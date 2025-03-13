<?php

/**
 * ErrorHandler - Centralized error and exception handling
 */
class ErrorHandler {
    /**
     * @var string File where errors are logged
     */
    private $logFile;

    /**
     * @var bool Whether to display errors (development mode)
     */
    private $displayErrors;

    /**
     * @var bool Whether detailed error information should be shown
     */
    private $debugMode;

    /**
     * @var array Custom error templates
     */
    private $errorTemplates = [];

    /**
     * Constructor - Set up error handling
     *
     * @param string $logFile Path to error log file
     * @param bool $displayErrors Whether to display errors
     * @param bool $debugMode Whether to show detailed error information
     */
    public function __construct($logFile = null, $displayErrors = false, $debugMode = false) {
        $this->logFile = $logFile ?: ini_get('error_log');
        $this->displayErrors = $displayErrors;
        $this->debugMode = $debugMode;

        // Set default error templates
        $this->errorTemplates = [
            '404' => __DIR__ . '/../templates/errors/404.php',
            '500' => __DIR__ . '/../templates/errors/500.php',
            'generic' => __DIR__ . '/../templates/errors/generic.php',
        ];

        // Register error handlers
        set_error_handler([$this, 'handleError']);
        set_exception_handler([$this, 'handleException']);
        register_shutdown_function([$this, 'handleFatalError']);
    }

    /**
     * Handle regular PHP errors
     *
     * @param int $level Error level
     * @param string $message Error message
     * @param string $file File where the error occurred
     * @param int $line Line where the error occurred
     * @return bool Whether the error was handled
     */
    public function handleError($level, $message, $file, $line) {
        if (!(error_reporting() & $level)) {
            // This error code is not included in error_reporting
            return false;
        }

        $errorType = $this->getErrorType($level);
        $this->logError("$errorType: $message in $file on line $line");

        if ($this->displayErrors) {
            echo $this->formatErrorForDisplay($errorType, $message, $file, $line);
        }

        // Don't execute PHP's internal error handler
        return true;
    }

    /**
     * Handle uncaught exceptions
     *
     * @param Throwable $exception The exception object
     * @return void
     */
    public function handleException($exception) {
        $message = $exception->getMessage();
        $file = $exception->getFile();
        $line = $exception->getLine();
        $trace = $exception->getTraceAsString();

        $this->logError("Uncaught Exception: $message in $file on line $line\nStack trace:\n$trace");

        http_response_code(500);

        if ($this->displayErrors) {
            if ($this->debugMode) {
                echo $this->formatExceptionForDisplay($exception);
            } else {
                $this->displayErrorPage('500', [
                    'message' => 'An unexpected error occurred.',
                    'code' => 500
                ]);
            }
        } else {
            $this->displayErrorPage('500', [
                'message' => 'An unexpected error occurred.',
                'code' => 500
            ]);
        }
    }

    /**
     * Handle fatal errors
     *
     * @return void
     */
    public function handleFatalError() {
        $error = error_get_last();

        if ($error !== null && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
            $message = $error['message'];
            $file = $error['file'];
            $line = $error['line'];

            $this->logError("FATAL ERROR: $message in $file on line $line");

            if (headers_sent()) {
                echo "<div style='color:red;font-weight:bold;'>";
                echo "A fatal error occurred. Please check the error log for details.";
                echo "</div>";
            } else {
                http_response_code(500);
                $this->displayErrorPage('500', [
                    'message' => 'A fatal error occurred.',
                    'code' => 500
                ]);
            }
        }
    }

    /**
     * Log error message
     *
     * @param string $message Error message to log
     * @return void
     */
    private function logError($message) {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message\n";

        if ($this->logFile) {
            error_log($logMessage, 3, $this->logFile);
        } else {
            error_log($logMessage);
        }
    }

    /**
     * Get human-readable error type
     *
     * @param int $type Error type constant
     * @return string Human-readable error type
     */
    private function getErrorType($type) {
        $errorTypes = [
            E_ERROR => 'Fatal Error',
            E_WARNING => 'Warning',
            E_PARSE => 'Parse Error',
            E_NOTICE => 'Notice',
            E_CORE_ERROR => 'Core Error',
            E_CORE_WARNING => 'Core Warning',
            E_COMPILE_ERROR => 'Compile Error',
            E_COMPILE_WARNING => 'Compile Warning',
            E_USER_ERROR => 'User Error',
            E_USER_WARNING => 'User Warning',
            E_USER_NOTICE => 'User Notice',
            E_STRICT => 'Strict Standards',
            E_RECOVERABLE_ERROR => 'Recoverable Error',
            E_DEPRECATED => 'Deprecated',
            E_USER_DEPRECATED => 'User Deprecated'
        ];

        return isset($errorTypes[$type]) ? $errorTypes[$type] : 'Unknown Error';
    }

    /**
     * Format error for HTML display
     *
     * @param string $type Error type
     * @param string $message Error message
     * @param string $file File where the error occurred
     * @param int $line Line where the error occurred
     * @return string Formatted HTML
     */
    private function formatErrorForDisplay($type, $message, $file, $line) {
        ob_start();
        ?>
        <div style="background-color:#f8d7da; color:#721c24; padding:10px; margin:10px 0; border:1px solid #f5c6cb; border-radius:4px;">
            <strong><?php echo htmlspecialchars($type); ?>:</strong>
            <?php echo htmlspecialchars($message); ?><br>
            <small>
                File: <?php echo htmlspecialchars($file); ?><br>
                Line: <?php echo $line; ?>
            </small>
        </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Format exception for HTML display
     *
     * @param Throwable $exception The exception object
     * @return string Formatted HTML
     */
    private function formatExceptionForDisplay($exception) {
        $message = $exception->getMessage();
        $file = $exception->getFile();
        $line = $exception->getLine();
        $trace = $exception->getTraceAsString();

        ob_start();
        ?>
        <div style="background-color:#f8d7da; color:#721c24; padding:10px; margin:10px 0; border:1px solid #f5c6cb; border-radius:4px;">
            <h3>Uncaught Exception</h3>
            <p><strong>Message:</strong> <?php echo htmlspecialchars($message); ?></p>
            <p><strong>File:</strong> <?php echo htmlspecialchars($file); ?></p>
            <p><strong>Line:</strong> <?php echo $line; ?></p>
            <h4>Stack Trace:</h4>
            <pre><?php echo htmlspecialchars($trace); ?></pre>
        </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Display a custom error page
     *
     * @param string $type Error type (404, 500, etc.)
     * @param array $data Data to pass to the template
     * @return void
     */
    public function displayErrorPage($type, array $data = []) {
        $templateFile = $this->errorTemplates[$type] ?? $this->errorTemplates['generic'];

        if (file_exists($templateFile)) {
            extract($data);
            include $templateFile;
        } else {
            // Fallback if template doesn't exist
            echo "<!DOCTYPE html>
                  <html lang=\"en\">
                  <head>
                      <meta charset=\"UTF-8\">
                      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                      <title>Error - Houses on The Air</title>
                      <style>
                          body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
                          h1 { color: #333; }
                          .error-container { max-width: 600px; margin: 0 auto; }
                      </style>
                  </head>
                  <body>
                      <div class=\"error-container\">
                          <h1>Error " . htmlspecialchars($data['code'] ?? '') . "</h1>
                          <p>" . htmlspecialchars($data['message'] ?? 'An error occurred') . "</p>
                          <p><a href=\"/\">Return to homepage</a></p>
                      </div>
                  </body>
                  </html>";
        }
    }

    /**
     * Set custom error template
     *
     * @param string $type Error type (404, 500, etc.)
     * @param string $templateFile Path to template file
     * @return void
     */
    public function setErrorTemplate($type, $templateFile) {
        if (file_exists($templateFile)) {
            $this->errorTemplates[$type] = $templateFile;
        }
    }
}
