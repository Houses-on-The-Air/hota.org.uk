<?php

/**
 * ConfigManager - Handle configuration settings
 */
class ConfigManager {
    /**
     * @var array Configuration settings
     */
    private static $config = [];

    /**
     * @var bool Whether configuration has been loaded
     */
    private static $loaded = false;

    /**
     * Load configuration from environment variables or file
     */
    public static function load() {
        if (self::$loaded) {
            return;
        }

        // Database settings
        self::$config['db'] = [
            'type' => getenv('DB_TYPE') ?: 'mysql',
            'host' => getenv('DB_HOST') ?: 'localhost',
            'name' => getenv('DB_NAME') ?: 'hota_db',
            'user' => getenv('DB_USER') ?: 'hota_user',
            'pass' => getenv('DB_PASS') ?: '',
        ];

        // Email addresses
        self::$config['email'] = [
            'advertising' => getenv('ADVERTISING_EMAIL') ?: 'advertising@hota.org.uk',
            'info' => getenv('INFO_EMAIL') ?: 'info@hota.org.uk',
            'privacy' => getenv('PRIVACY_EMAIL') ?: 'privacy@hota.org.uk',
        ];

        // Award tiers
        self::$config['award_tiers'] = [
            1000000 => "Mansion",
            500000 => "Victorian Villa",
            250000 => "Country Cottage",
            100000 => "Townhouse",
            10000 => "Detached House",
            1000 => "Semi-Detached House",
            500 => "Terraced House",
            100 => "Bedsit",
            0 => "Cardboard Box"
        ];

        self::$loaded = true;
    }

    /**
     * Get a configuration value
     *
     * @param string $key Configuration key (dot notation supported)
     * @param mixed $default Default value if key doesn't exist
     * @return mixed Configuration value
     */
    public static function get($key, $default = null) {
        if (!self::$loaded) {
            self::load();
        }

        $keys = explode('.', $key);
        $value = self::$config;

        foreach ($keys as $k) {
            if (!isset($value[$k])) {
                return $default;
            }
            $value = $value[$k];
        }

        return $value;
    }
}
