<?php

add_filter('show_admin_bar',               '__return_false');
add_filter('gform_field_content',          'fix_textarea_height', 10, 5);
add_filter('nav_menu_css_class' ,          'special_nav_class', 15 , 2);


function fix_textarea_height( $content, $field, $value, $lead_id, $form_id ) {

    if($field->type != 'textarea')
        return $content;

    $content = preg_replace('/ rows=\'[^\']*\' cols=\'[^\']*\'/', '', $content);
    return $content;

}


if( ! function_exists('get_feature_image_url') ) {
    function get_feature_image_url( $post_id, $size = 'full' ) {

        $thumb_id = get_post_thumbnail_id( $post_id );
        if(empty($thumb_id)) return false;

        $image_details = wp_get_attachment_image_src($thumb_id, $size);
        if(!is_array($image_details)) return false;

        return reset($image_details);

    }
}


if( ! function_exists('get_image_url') ) {
    function get_image_url( $media_id, $size = 'full' ) {

        $image_details = wp_get_attachment_image_src($media_id, $size);
        if(!is_array($image_details)) return false;

        return reset($image_details);

    }
}


if( ! function_exists('register_multipost_thumbnail') ) {
    function register_multipost_thumbnail( $label, $id, $post_type ) {

        if(empty($label) || empty($id) || empty($post_type)) return false;

        if (class_exists('MultiPostThumbnails')) {
            new MultiPostThumbnails(array(
                'label'     => $label,
                'id'        => $id,
                'post_type' => $post_type
            ));
        }
    }
}


if( ! function_exists('get_menu_items') ) {
    function get_menu_items( $from_location = '' ) {

        if(empty($from_location)) return false;

        $items = null;
        $locations = get_nav_menu_locations();

        if(isset($locations[$from_location])) {
            $menu = wp_get_nav_menu_object( $locations[$from_location] );
            $items = wp_get_nav_menu_items( $menu->term_id );
        }

        return $items;

    }
}


if( ! function_exists('get_cleaned_menu') ) {
    function get_cleaned_menu( $location = '', $classes = '', $add_span = null ) {

        if(empty($location)) return false;

        if(!empty($classes))
            $classes .= ' ';

        $main_menu = wp_nav_menu(array('theme_location' => $location, 'container' => false, 'echo' => false, 'items_wrap' => '<ul class="'.$classes.'%2$s">%3$s</ul>'));
        $main_menu = preg_replace('/li id=\"[^\"]*\"/', 'li', $main_menu);
        $main_menu = preg_replace('/>[ \n\t]+</', '><', $main_menu); // For display inline purposes, remove useless spacing around tags

        if(!empty($add_span))
            $main_menu = str_replace('</a>', '<span class="'.$add_span.'"></span></a>', $main_menu);

        return apply_filters('cleaned_menu', $main_menu);

    }
}


function special_nav_class($classes, $item) {

    global $_locked_nav_classes;
    if(empty($_locked_nav_classes)) return $classes;

    $new_classes = array();

    foreach($_locked_nav_classes as $expect => $rewrite) {
        if( in_array($expect, $classes) && !in_array($rewrite, $new_classes) ) $new_classes[] = $rewrite;
    }

    return $new_classes;

}



function _get($param_name, $default_value = '') {
    return isset($_GET[$param_name]) ? $_GET[$param_name] : $default_value;
}

function _post($param_name, $default_value = '') {
    return isset($_POST[$param_name]) ? $_POST[$param_name] : $default_value;
}

function _request($param_name, $default_value = '') {
    return isset($_REQUEST[$param_name]) ? $_REQUEST[$param_name] : $default_value;
}

function _val($object, $param, $default = '') {
    return isset($object->$param) ? $object->$param : $default;
}

function _item($array, $param, $default = '') {
    return isset($array[$param]) ? $array[$param] : $default;
}

function json_exit($reason, $result = true) {
    die(json_encode(array('result' => $result, 'reason' => $reason)));
}



function _j($result,$data = null) {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, Content-Type");
    header("Content-Type: application/json");
    header($_SERVER["SERVER_PROTOCOL"]." 200 Ok");
    die(json_encode(array('response' => $data, 'result' => $result)));
}



if(is_admin()) {
    if(strpos($_SERVER['SERVER_NAME'], 'ndonline.com.au') !== FALSE) {
        add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
    }
}

