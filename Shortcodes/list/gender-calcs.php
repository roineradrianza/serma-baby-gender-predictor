<?php

new SERMA_BABY_GENDER_PREDICTOR_CALC_SHORTCODE();

class SERMA_BABY_GENDER_PREDICTOR_CALC_SHORTCODE
{

    public function __construct()
    {
        add_shortcode('serma-baby-gender-predictor-wp', array($this, 'gender_predictor'));
    }

    public function gender_predictor($attrs = [])
    {

        if (!is_admin()) {
           
            wp_register_style( 'serma-random-name-generator-core-cookie-font', "https://fonts.googleapis.com/css2?family=Cookie&display=swap", '' );
            wp_register_style( 'serma-random-name-generator-core-inter-font', "https://fonts.googleapis.com/css2?family=Inter:wght@500;700;800;900&display=swap", '' );
            wp_register_style( 'fontawesome', get_stylesheet_directory_uri() . "/assets/icons/fontawesome-5.15.4/css/fontawesome.min.css", '' ,'5.15.4', true );
            wp_register_style( 'fontawesome-all', get_stylesheet_directory_uri() . "/assets/icons/fontawesome-5.15.4/css/all.min.css", ['fontawesome'], '5.15.4', true );
            
            wp_enqueue_style( 'serma-random-name-generator-core-inter-font' );
            wp_enqueue_style( 'serma-random-name-generator-core-cookie-font' );
            wp_enqueue_style( 'fontawesome' );
            wp_enqueue_style( 'fontawesome-all' );    

            wp_register_script( 'tailwind-css', "https://cdn.tailwindcss.com", [], '3.0.12', false );
            wp_register_script( 'tailwind-flowbite', "https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js", 'tailwind-css', '1.3.0', false );
            wp_register_script( 'fontawesome', get_stylesheet_directory_uri() . "/assets/icons/fontawesome-5.15.4/js/all.min.js", [], '5.15.4', true );

            wp_enqueue_script( 'tailwind-css' );
            wp_enqueue_script( 'tailwind-flowbite' );
            wp_add_inline_script( 'tailwind-css', serma_baby_gender_predictor_tailwind_config() );

            $vue_file = SERMA_BABY_GENDER_PREDICTOR_ENV ? 'vue.min' : 'vue.prod.min';

            serma_baby_gender_predictor_register_script(
                "lib/$vue_file", 
                [], 
                false, 
                "const serma_baby_gender_predictor_ajax = '" . esc_url(admin_url('admin-ajax.php')) . "?action='", 
                '3.2.29' 
            );

            switch ($attrs['calc']) {
                case 'chinese_predictor':
                    return self::chinese_predictor_template();
                    break;
                    
                case 'updating_blood':
                    return self::updating_blood_template();
                    break;
                
                case 'parent_blood_type':
                    return self::parent_blood_type_template();
                    break;
                
                case 'rh_factor_parent':
                    return self::rh_factor_parent_template();
                    break;
                    
                default:
                    # code...
                    break;
            }

            
        }
    }

    private static function chinese_predictor_template() {
        return SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::render_view(
            [], 
            [
                'chinese-predictor'
            ], 
            'chinese-predictor'
        );
    }

    private static function updating_blood_template() {
        return SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::render_view(
            [], 
            [
                'lib/flowbite/datepicker',
                'updating-blood'
            ], 
            'updating-blood'
        );
    }
    
    private static function parent_blood_type_template() {
        return SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::render_view(
            [], 
            [
                'parent-blood-type'
            ], 
            'parent-blood-type'
        );
    }
    
    private static function rh_factor_parent_template() {
        return SERMA_BABY_GENDER_PREDICTOR_TEMPLATE::render_view(
            [], 
            [
                'rh-factor-parent'
            ], 
            'rh-factor-parent'
        );
    }

}