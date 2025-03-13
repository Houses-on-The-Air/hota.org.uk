<?php

/**
 * Validator - Input validation utility class
 */
class Validator {
    /**
     * @var array Validation errors
     */
    private static $errors = [];

    /**
     * @var array Custom validation rules
     */
    private static $customRules = [];

    /**
     * Validate a single value
     *
     * @param mixed $value Value to validate
     * @param string $rule Validation rule (email, url, numeric, etc.)
     * @param array $options Additional rule options
     * @return bool Whether validation passed
     */
    public static function validate($value, $rule, array $options = []) {
        switch ($rule) {
            case 'required':
                return !empty($value);

            case 'email':
                return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;

            case 'url':
                return filter_var($value, FILTER_VALIDATE_URL) !== false;

            case 'numeric':
                return is_numeric($value);

            case 'integer':
                return filter_var($value, FILTER_VALIDATE_INT) !== false;

            case 'float':
                return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;

            case 'boolean':
                return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null;

            case 'ip':
                return filter_var($value, FILTER_VALIDATE_IP) !== false;

            case 'mac':
                return filter_var($value, FILTER_VALIDATE_MAC) !== false;

            case 'min':
                if (!isset($options['value'])) {
                    return false;
                }

                if (is_string($value)) {
                    return mb_strlen($value) >= $options['value'];
                }

                return $value >= $options['value'];

            case 'max':
                if (!isset($options['value'])) {
                    return false;
                }

                if (is_string($value)) {
                    return mb_strlen($value) <= $options['value'];
                }

                return $value <= $options['value'];

            case 'between':
                if (!isset($options['min']) || !isset($options['max'])) {
                    return false;
                }

                if (is_string($value)) {
                    $length = mb_strlen($value);
                    return $length >= $options['min'] && $length <= $options['max'];
                }

                return $value >= $options['min'] && $value <= $options['max'];

            case 'in':
                if (!isset($options['values']) || !is_array($options['values'])) {
                    return false;
                }

                return in_array($value, $options['values'], true);

            case 'regex':
                if (!isset($options['pattern'])) {
                    return false;
                }

                return preg_match($options['pattern'], $value) === 1;

            case 'date':
                if (empty($value)) {
                    return false;
                }

                $format = $options['format'] ?? 'Y-m-d';
                $date = \DateTime::createFromFormat($format, $value);
                return $date !== false && !array_sum($date->getLastErrors());

            case 'callsign':
                // Amateur radio callsign validation (generic pattern)
                $pattern = '/^[A-Z0-9]{1,3}[0-9][A-Z0-9]{1,3}$/i';
                return preg_match($pattern, $value) === 1;

            default:
                // Check for custom validation rule
                if (isset(self::$customRules[$rule]) && is_callable(self::$customRules[$rule])) {
                    return call_user_func(self::$customRules[$rule], $value, $options);
                }

                return false;
        }
    }

    /**
     * Add a custom validation rule
     *
     * @param string $name Rule name
     * @param callable $callback Validation callback function
     * @return void
     */
    public static function addRule($name, callable $callback) {
        self::$customRules[$name] = $callback;
    }

    /**
     * Validate an array of data against rules
     *
     * @param array $data Input data
     * @param array $rules Validation rules
     * @return bool Whether validation passed
     */
    public static function check(array $data, array $rules) {
        self::$errors = [];
        $valid = true;

        foreach ($rules as $field => $fieldRules) {
            $value = $data[$field] ?? null;

            // Skip non-required empty values
            if (!isset($data[$field]) && !in_array('required', $fieldRules, true)) {
                continue;
            }

            foreach ($fieldRules as $rule) {
                $options = [];

                // Check if rule has options
                if (is_array($rule)) {
                    $options = $rule;
                    $rule = $options['rule'];
                    unset($options['rule']);
                }

                if (!self::validate($value, $rule, $options)) {
                    $valid = false;

                    if (!isset(self::$errors[$field])) {
                        self::$errors[$field] = [];
                    }

                    self::$errors[$field][] = self::getErrorMessage($field, $rule, $options);
                }
            }
        }

        return $valid;
    }

    /**
     * Get validation errors
     *
     * @return array Validation errors
     */
    public static function errors() {
        return self::$errors;
    }

    /**
     * Get first error for a field
     *
     * @param string $field Field name
     * @return string|null First error message or null if no errors
     */
    public static function firstError($field) {
        return self::$errors[$field][0] ?? null;
    }

    /**
     * Get error message for a validation rule
     *
     * @param string $field Field name
     * @param string $rule Rule name
     * @param array $options Rule options
     * @return string Error message
     */
    private static function getErrorMessage($field, $rule, array $options = []) {
        $field = ucfirst(str_replace('_', ' ', $field));

        switch ($rule) {
            case 'required':
                return "$field is required";
            case 'email':
                return "$field must be a valid email address";
            case 'url':
                return "$field must be a valid URL";
            case 'numeric':
                return "$field must be numeric";
            case 'integer':
                return "$field must be an integer";
            case 'float':
                return "$field must be a decimal number";
            case 'boolean':
                return "$field must be a boolean";
            case 'ip':
                return "$field must be a valid IP address";
            case 'mac':
                return "$field must be a valid MAC address";
            case 'min':
                $what = is_string($options['test_value'] ?? '') ? 'characters' : 'value';
                return "$field must be at least {$options['value']} $what";
            case 'max':
                $what = is_string($options['test_value'] ?? '') ? 'characters' : 'value';
                return "$field must not exceed {$options['value']} $what";
            case 'between':
                $what = is_string($options['test_value'] ?? '') ? 'characters' : 'value';
                return "$field must be between {$options['min']} and {$options['max']} $what";
            case 'in':
                return "$field must be one of the allowed values";
            case 'regex':
                return "$field has an invalid format";
            case 'date':
                return "$field must be a valid date";
            case 'callsign':
                return "$field must be a valid amateur radio callsign";
            default:
                if (isset(self::$customRules[$rule])) {
                    return "$field is invalid";
                }
                return "$field failed validation";
        }
    }

    /**
     * Sanitize input data
     *
     * @param mixed $data Input data to sanitize
     * @param string $type Sanitization type
     * @return mixed Sanitized data
     */
    public static function sanitize($data, $type = 'string') {
        switch ($type) {
            case 'string':
                return is_array($data)
                    ? array_map('trim', array_map('strip_tags', $data))
                    : trim(strip_tags($data));

            case 'email':
                return filter_var($data, FILTER_SANITIZE_EMAIL);

            case 'url':
                return filter_var($data, FILTER_SANITIZE_URL);

            case 'int':
            case 'integer':
                return filter_var($data, FILTER_SANITIZE_NUMBER_INT);

            case 'float':
                return filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            case 'html':
                // For HTML content, use a proper HTML purifier library in a real application
                // This is just a simple example
                return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');

            case 'sql':
                // Basic SQL injection protection - use prepared statements instead in production
                return addslashes($data);

            case 'array':
                if (!is_array($data)) {
                    return [];
                }
                return array_map(function($item) {
                    return is_array($item)
                        ? self::sanitize($item, 'array')
                        : self::sanitize($item, 'string');
                }, $data);

            default:
                return $data;
        }
    }
}
