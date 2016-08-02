<?php
//
// Shortcodes
//

// Bootstrap media shortcodes
// 
// http://getbootstrap.com/components/#media

// [media class="class_you_want_to_add"] other shortcodes in here [/media]
function boostrap_media( $atts, $content = null ) {
    $a = shortcode_atts( array(
      'class' => '',
    ), $atts );

    return "<div class='media " . esc_attr($a['class']) . "'>" . do_shortcode( wp_kses_post($content) ) ."</div>";
}
add_shortcode( 'media', 'boostrap_media' );

// [media-object class="whatever" alignment="right" valignment="middle"][/media-object]
function boostrap_media_object( $atts, $content = null ) {
    $a = shortcode_atts( array(
      'class' => '',
      'alignment' => 'left',
      'valignment' => '',
    ), $atts );

    return "<div class='media-" . esc_attr($a['alignment']) . "" . esc_attr($a['valignment']) .  " " . esc_attr($a['class']) . "'>" . wp_kses_post($content) ."</div>";
}
add_shortcode( 'media-object', 'boostrap_media_object' );

// [media-body class="call_you_want_extra" title="this will be a header four media"][/media-body]

function boostrap_media_body( $atts, $content = null ) {
    $a = shortcode_atts( array(
      'class' => '',
      'title' => '',
    ), $atts );

    return "<div class='media-body " . esc_attr($a['class']) . "'>" . "<h4 class='media-heading'>" . esc_html( $a['title'] ) . "</h4>" . wp_kses_post($content) ."</div>";
}
add_shortcode( 'media-body', 'boostrap_media_body' );