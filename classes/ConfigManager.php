<?php

/**
 * ConfigManager - Handle configuration settings with enhanced features
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
     * @var string Path to config cache file
     */
    private static $cachePath = __DIR__ . '/../cache/config.cache.php';

    /**
     * @var int Cache time-to-live in seconds (1 hour)
     */
    private static $cacheTtl = 3600;

    /**
     * Load configuration from cache, environment variables or file
     *
     * @param bool $forceRefresh Force refresh of configuration (ignore cache)
     */
    public static function load($forceRefresh = false) {
        if (self::$loaded && !$forceRefresh) {
            return;
        }

        // Try to load from cache first if not forcing refresh
        if (!$forceRefresh && self::loadFromCache()) {
            self::$loaded = true;
            return;
        }

        // Set default PDO options - check if PDO is available first
        $pdoOptions = [];
        if (class_exists('PDO')) {
            $pdoOptions = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_EMULATE_PREPARES => false,
            ];
        } else {
            // If PDO is not available, log a warning
            error_log('WARNING: PDO extension is not available. Database features will not function properly.');
        }

        // Define configuration
        self::$config = [
            // Database settings
            'db' => [
                'type' => self::getEnv('DB_TYPE', 'mysql'),
                'host' => self::getEnv('DB_HOST', 'localhost'),
                'name' => self::getEnv('DB_NAME', 'hota_db'),
                'user' => self::getEnv('DB_USER', 'hota_user'),
                'pass' => self::getEnv('DB_PASS', ''),
                'port' => self::getEnv('DB_PORT', 3306),
                'charset' => 'utf8mb4',
                'options' => $pdoOptions,
            ],

            // Email addresses
            'email' => [
                'advertising' => self::getEnv('ADVERTISING_EMAIL', 'advertising@hota.org.uk'),
                'info' => self::getEnv('INFO_EMAIL', 'info@hota.org.uk'),
                'privacy' => self::getEnv('PRIVACY_EMAIL', 'privacy@hota.org.uk'),
                'support' => self::getEnv('SUPPORT_EMAIL', 'support@hota.org.uk'),
                'webmaster' => self::getEnv('WEBMASTER_EMAIL', 'webmaster@hota.org.uk'),
            ],

            // Award tiers
            'award_tiers' => [
                1000000 => "Mansion",
                500000 => "Victorian Villa",
                250000 => "Country Cottage",
                100000 => "Townhouse",
                10000 => "Detached House",
                1000 => "Semi-Detached House",
                500 => "Terraced House",
                100 => "Bedsit",
                0 => "Cardboard Box"
            ],

            // Application settings
            'app' => [
                'name' => 'Houses On The Air',
                'url' => self::getEnv('APP_URL', 'https://hota.org.uk'),
                'environment' => self::getEnv('APP_ENV', 'production'),
                'debug' => filter_var(self::getEnv('APP_DEBUG', 'false'), FILTER_VALIDATE_BOOLEAN),
                'upload_max_size' => 5 * 1024 * 1024, // 5MB in bytes
                'timezone' => self::getEnv('APP_TIMEZONE', 'UTC'),
            ],

            // Social media links
            'social' => [
                'facebook' => 'https://www.facebook.com/HOTARADIO',
                'twitter' => 'https://www.x.com/housesontheair',
                'bluesky' => 'https://bsky.app/profile/hotaradio.bsky.social',
                'reddit' => 'https://www.reddit.com/r/housesontheair',
                'patreon' => 'https://patreon.com/HousesonTheAir',
            ]
        ];

        // Set application timezone
        date_default_timezone_set(self::$config['app']['timezone']);

        // Save to cache
        self::saveToCache();

        self::$loaded = true;
    }

    /**
     * Get environment variable with fallback
     *
     * @param string $name Environment variable name
     * @param mixed $default Default value if not found
     * @return mixed Value from environment or default
     */
    private static function getEnv($name, $default = null) {
        return getenv($name) ?: $default;
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

        // Support dot notation (e.g., 'db.host')
        if (strpos($key, '.') !== false) {
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

        return isset(self::$config[$key]) ? self::$config[$key] : $default;
    }

    /**
     * Set a configuration value
     *
     * @param string $key Configuration key (dot notation supported)
     * @param mixed $value Value to set
     * @return void
     */
    public static function set($key, $value) {
        if (!self::$loaded) {
            self::load();
        }

        // Support dot notation for setting nested values
        if (strpos($key, '.') !== false) {
            $keys = explode('.', $key);
            $configRef = &self::$config;

            foreach ($keys as $i => $k) {
                // If we're at the last key, set the value
                if ($i === count($keys) - 1) {
                    $configRef[$k] = $value;
                    break;
                }

                // Create the key if it doesn't exist
                if (!isset($configRef[$k])) {
                    $configRef[$k] = [];
                }

                // Move deeper into the array
                $configRef = &$configRef[$k];
            }
        } else {
            self::$config[$key] = $value;
        }

        // Update the cache
        self::saveToCache();
    }

    /**
     * Load configuration from cache file
     *
     * @return bool True if loaded from cache, false otherwise
     */
    private static function loadFromCache() {
        if (!file_exists(self::$cachePath)) {
            return false;
        }

        // Check if cache is still valid
        $cacheTime = filemtime(self::$cachePath);
        if (time() - $cacheTime > self::$cacheTtl) {
            return false;
        }

        // Load from cache file
        $cached = include self::$cachePath;

        if (is_array($cached)) {
            self::$config = $cached;
            return true;
        }

        return false;
    }

    /**
     * Save configuration to cache file
     *
     * @return bool True if saved successfully, false otherwise
     */
    private static function saveToCache() {
        $cacheDir = dirname(self::$cachePath);

        // Create cache directory if it doesn't exist
        if (!is_dir($cacheDir) && !mkdir($cacheDir, 0755, true)) {
            error_log("Failed to create cache directory: $cacheDir");
            return false;
        }

        // Create cache file content
        $content = "<?php\n// Generated at " . date('Y-m-d H:i:s') . "\nreturn " . var_export(self::$config, true) . ";\n";

        // Write to file with exclusive lock
        if (file_put_contents(self::$cachePath, $content, LOCK_EX) === false) {
            error_log("Failed to write to cache file: " . self::$cachePath);
            return false;
        }

        return true;
    }

    /**
     * Clear configuration cache
     *
     * @return bool True if cache cleared successfully, false otherwise
     */
    public static function clearCache() {
        if (file_exists(self::$cachePath)) {
            return unlink(self::$cachePath);
        }
        return true;
    }

    /**
     * Rebuild configuration cache
     *
     * @return bool True if cache was rebuilt successfully
     */
    public static function rebuildCache() {
        // Clear and reload configuration
        self::clearCache();
        self::load(true);
        return self::$loaded;
    }
}
