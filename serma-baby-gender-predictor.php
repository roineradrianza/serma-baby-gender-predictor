<?php
/*
Plugin Name: Predictor de Género de Bebé - Ser Madre
Description: Este plugin muestra un formulario para predecir el género de un bebé. Utilice el shortcode [serma-baby-gender-predictor-wp]
Version: 1.0.0
Requires at least: 5.1
Requires PHP: 7.2
Author: Ser Madre
Developer: Roiner Adrianza
Author URI: http://sermadre.com
License: GPL v3
*/

if (!defined('ABSPATH')) {
    exit;
}
//Exit if accessed directly

define('SERMA_BABY_GENDER_PREDICTOR_FILE', __FILE__);
define('SERMA_BABY_GENDER_PREDICTOR', dirname(SERMA_BABY_GENDER_PREDICTOR_FILE));
define('SERMA_BABY_GENDER_PREDICTOR_URL', plugin_dir_url(SERMA_BABY_GENDER_PREDICTOR_FILE));
define('SERMA_BABY_GENDER_PREDICTOR_DB_VERSION', '1.0');
define('SERMA_BABY_GENDER_PREDICTOR_VERSION', '1.0.0');

define('SERMA_BABY_GENDER_PREDICTOR_ENV', false);

if (SERMA_BABY_GENDER_PREDICTOR_ENV) {
    @ini_set('display_errors', 1);
}

require_once SERMA_BABY_GENDER_PREDICTOR . "/Controller/Main.php";

