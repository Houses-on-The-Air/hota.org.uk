<?php

/**
 * Logger - Simple logging functionality
 */
class Logger {
    /**
     * @var string Log file path
     */
    private static $logFile;

    /**
     * @var bool Whether to include timestamp
     */
    private static $includeTimestamp = true;

    /**
     * @var array Log levels
     */
    private static $levels = [
        'DEBUG' => 10,
        'INFO' => 20,
        'NOTICE' => 30,
        'WARNING' => 40,
        'ERROR' => 50,
        'CRITICAL' => 60,
        'ALERT' => 70,
        'EMERGENCY' => 80
    ];

    /**
     * @var int Current log level
     */
    private static $currentLevel = 20; // INFO

    /**
     * Initialize the logger
     *
     * @param string $logFile Path to log file
     * @param string $level Minimum log level
     * @param bool $includeTimestamp Whether to include timestamp
     */
    public static function init($logFile = null, $level = 'INFO', $includeTimestamp = true) {
        self::$logFile = $logFile ?: __DIR__ . '/../logs/application.log';
        self::$includeTimestamp = $includeTimestamp;

        // Ensure log directory exists
        $logDir = dirname(self::$logFile);
        if (!is_dir($logDir)) {
            mkdir($logDir, 0755, true);
        }

        // Set log level
        self::setLevel($level);
    }

    /**
     * Set minimum log level
     *
     * @param string $level Log level
     * @return void
     */
    public static function setLevel($level) {
        $level = strtoupper($level);
        if (isset(self::$levels[$level])) {
            self::$currentLevel = self::$levels[$level];
        }
    }

    /**
     * Log a message
     *
     * @param string $level Log level
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function log($level, $message, array $context = []) {
        $level = strtoupper($level);

        // Check if level is enabled
        if (!isset(self::$levels[$level]) || self::$levels[$level] < self::$currentLevel) {
            return false;
        }

        // Format timestamp
        $timestamp = self::$includeTimestamp ? '[' . date('Y-m-d H:i:s') . '] ' : '';

        // Format level
        $formattedLevel = "[$level] ";

        // Replace placeholders in message
        $formattedMessage = self::interpolate($message, $context);

        // Build log entry
        $logEntry = $timestamp . $formattedLevel . $formattedMessage;

        // Add stack trace for errors and above
        if (self::$levels[$level] >= self::$levels['ERROR']) {
            $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);
            $caller = isset($trace[1]) ? $trace[1] : [];
            $callerInfo = '';

            if (isset($caller['file'], $caller['line'])) {
                $callerInfo = ' in ' . $caller['file'] . ' on line ' . $caller['line'];
            }

            $logEntry .= $callerInfo;
        }

        $logEntry .= PHP_EOL;

        // Write to log file
        $result = file_put_contents(self::$logFile, $logEntry, FILE_APPEND | LOCK_EX);

        return $result !== false;
    }

    /**
     * Replace placeholders in message
     *
     * @param string $message Message with placeholders
     * @param array $context Values to replace placeholders
     * @return string Interpolated message
     */
    private static function interpolate($message, array $context = []) {
        // Build a replacement array with braces around the context keys
        $replace = [];
        foreach ($context as $key => $val) {
            // Check if the value can be cast to string
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }

        // Interpolate replacement values into the message and return
        return strtr($message, $replace);
    }

    /**
     * Log a debug message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function debug($message, array $context = []) {
        return self::log('DEBUG', $message, $context);
    }

    /**
     * Log an info message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function info($message, array $context = []) {
        return self::log('INFO', $message, $context);
    }

    /**
     * Log a notice message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function notice($message, array $context = []) {
        return self::log('NOTICE', $message, $context);
    }

    /**
     * Log a warning message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function warning($message, array $context = []) {
        return self::log('WARNING', $message, $context);
    }

    /**
     * Log an error message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function error($message, array $context = []) {
        return self::log('ERROR', $message, $context);
    }

    /**
     * Log a critical message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function critical($message, array $context = []) {
        return self::log('CRITICAL', $message, $context);
    }

    /**
     * Log an alert message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function alert($message, array $context = []) {
        return self::log('ALERT', $message, $context);
    }

    /**
     * Log an emergency message
     *
     * @param string $message Log message
     * @param array $context Additional context data
     * @return bool Whether the message was logged
     */
    public static function emergency($message, array $context = []) {
        return self::log('EMERGENCY', $message, $context);
    }
}
