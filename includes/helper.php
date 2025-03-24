<?php
/**
 * Helper functions for the HOTA website
 */

/**
 * Safe include function that handles paths correctly
 *
 * @param string $file File to include
 * @param array $vars Variables to extract into scope
 * @return bool True if file was included, false otherwise
 */
function include_file($file, $vars = []) {
    // Define the base path for includes
    $base_path = dirname(__DIR__);

    // If file doesn't start with a slash, assume it's relative to includes
    if (strpos($file, '/') !== 0) {
        $file = '/includes/' . $file;
    }

    // Build the full path
    $full_path = $base_path . $file;

    // Check if file exists
    if (!file_exists($full_path)) {
        error_log("Failed to include file: $full_path does not exist");
        return false;
    }

    // Extract variables into scope if provided
    if (!empty($vars) && is_array($vars)) {
        extract($vars);
    }

    // Include the file
    include $full_path;
    return true;
}

/**
 * Include the header template
 *
 * @param array $vars Variables to pass to the header (e.g. ['pageTitle' => 'Home'])
 * @return bool True if header was included
 */
function include_header($vars = []) {
    return include_file('header.php', $vars);
}

/**
 * Include the footer template
 *
 * @param array $vars Variables to pass to the footer
 * @return bool True if footer was included
 */
function include_footer($vars = []) {
    return include_file('footer.php', $vars);
}

/**
 * Format an external URL with proper security attributes
 *
 * @param string $url The external URL
 * @param string $text The link text
 * @param string $class Optional CSS classes
 * @return string HTML anchor tag with proper attributes
 */
function external_link($url, $text, $class = '') {
    $classAttr = $class ? ' class="' . htmlspecialchars($class) . '"' : '';
    return '<a href="' . htmlspecialchars($url) . '" target="_blank" rel="nofollow noopener"' . $classAttr . '>' . htmlspecialchars($text) . '</a>';
}

/**
 * Format a mailto link with proper security attributes
 *
 * @param string $email The email address
 * @param string $text The link text (defaults to email address)
 * @param string $class Optional CSS classes
 * @return string HTML anchor tag for email
 */
function email_link($email, $text = null, $class = '') {
    $text = $text ?: $email;
    $classAttr = $class ? ' class="' . htmlspecialchars($class) . '"' : '';
    return '<a href="mailto:' . htmlspecialchars($email) . '"' . $classAttr . '>' . htmlspecialchars($text) . '</a>';
}

/**
 * Format a date in UK format (DD/MM/YYYY or DD Month YYYY)
 *
 * @param string|int $date Date string or timestamp
 * @param bool $includeTime Whether to include time
 * @param bool $longMonth Whether to use long month names
 * @return string Formatted date
 */
function format_uk_date($date, $includeTime = false, $longMonth = false) {
    if (!is_numeric($date)) {
        $date = strtotime($date);
    }

    $monthFormat = $longMonth ? 'F' : 'M';

    if ($includeTime) {
        return date("j $monthFormat Y, H:i", $date);
    } else {
        return date("j $monthFormat Y", $date);
    }
}

/**
 * Convert US spellings to UK spellings in text
 *
 * @param string $text Text to convert
 * @return string Converted text
 */
function convert_to_uk_spelling($text) {
    $usToUk = [
        // Basic -ize to -ise conversions
        'organize' => 'organise',
        'organizing' => 'organising',
        'organized' => 'organised',
        'organization' => 'organisation',
        'analyze' => 'analyse',
        'analyzing' => 'analysing',
        'analyzed' => 'analysed',
        'recognize' => 'recognise',
        'recognizing' => 'recognising',
        'recognized' => 'recognised',
        'standardize' => 'standardise',
        'standardizing' => 'standardising',
        'standardized' => 'standardised',

        // Other common US/UK spelling differences
        'color' => 'colour',
        'colorize' => 'colourise',
        'colorizing' => 'colourising',
        'colorized' => 'colourised',
        'favor' => 'favour',
        'favorite' => 'favourite',
        'theater' => 'theatre',
        'center' => 'centre',
        'centered' => 'centred',
        'fiber' => 'fibre',
        'program' => 'programme', // Except computer program
        'license' => 'licence', // When used as a noun
        'practice' => 'practise', // When used as a verb
        'dialog' => 'dialogue',
        'catalog' => 'catalogue',
        'traveling' => 'travelling',
        'traveled' => 'travelled',
        'traveler' => 'traveller',
        'labeled' => 'labelled',
        'labeling' => 'labelling',
        'modeling' => 'modelling',
        'modeled' => 'modelled',
        'canceled' => 'cancelled',
        'canceling' => 'cancelling',
        'fulfill' => 'fulfil',
        'fulfillment' => 'fulfilment',
        'skillful' => 'skilful',
        'defense' => 'defence',
        'offense' => 'offence',
        'apologize' => 'apologise',
        'apologizing' => 'apologising',
        'apologized' => 'apologised',
        'authorized' => 'authorised',
        'authorizing' => 'authorising',
        'authorize' => 'authorise',
        'customized' => 'customised',
        'customizing' => 'customising',
        'customize' => 'customise',
        'digitize' => 'digitise',
        'digitized' => 'digitised',
        'digitizing' => 'digitising',
    ];

    // Case-insensitive replacement
    foreach ($usToUk as $us => $uk) {
        // Replace lowercase
        $text = str_ireplace($us, $uk, $text);

        // Replace capitalized
        $text = str_ireplace(ucfirst($us), ucfirst($uk), $text);

        // Replace all uppercase
        $text = str_ireplace(strtoupper($us), strtoupper($uk), $text);
    }

    // Special case for 'license' as a verb vs 'licence' as a noun
    // In British English, 'license' is the verb form, while 'licence' is the noun
    // This needs context that simple find/replace can't handle

    // Computer-specific exceptions (these stay American spelling)
    $text = str_replace('computer programme', 'computer program', $text);
    $text = str_replace('software programme', 'software program', $text);

    return $text;
}

/**
 * Format a file size in a human-readable way using British English conventions
 *
 * @param int $bytes The size in bytes
 * @param int $decimals Number of decimal places to show
 * @return string Formatted file size
 */
function format_file_size($bytes, $decimals = 2) {
    $size = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f %s", $bytes / pow(1024, $factor), $size[$factor]);
}

/**
 * Get a list of UK counties for form dropdowns
 *
 * @return array List of UK counties
 */
function get_uk_counties() {
    return [
        "Avon", "Bedfordshire", "Berkshire", "Borders", "Buckinghamshire",
        "Cambridgeshire", "Central", "Cheshire", "Cleveland", "Clwyd",
        "Cornwall", "County Antrim", "County Armagh", "County Down", "County Fermanagh",
        "County Londonderry", "County Tyrone", "Cumbria", "Derbyshire", "Devon",
        "Dorset", "Dumfries and Galloway", "Durham", "Dyfed", "East Sussex",
        "Essex", "Fife", "Gloucestershire", "Grampian", "Greater London",
        "Greater Manchester", "Gwent", "Gwynedd County", "Hampshire", "Herefordshire",
        "Hertfordshire", "Highlands and Islands", "Humberside", "Isle of Wight", "Kent",
        "Lancashire", "Leicestershire", "Lincolnshire", "Lothian", "Merseyside",
        "Mid Glamorgan", "Norfolk", "North Yorkshire", "Northamptonshire", "Northumberland",
        "Nottinghamshire", "Oxfordshire", "Powys", "Rutland", "Shropshire",
        "Somerset", "South Glamorgan", "South Yorkshire", "Staffordshire", "Strathclyde",
        "Suffolk", "Surrey", "Tayside", "Tyne and Wear", "Warwickshire",
        "West Glamorgan", "West Midlands", "West Sussex", "West Yorkshire", "Wiltshire",
        "Worcestershire"
    ];
}
