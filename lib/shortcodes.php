<?php
//
// Shortcodes
//

// [media class="class_you_want_to_add"] other shortcodes in here [/media]
function boostrap_media( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'class' => '',
    ), $atts );

    return "<div class='media " . $a['class'] . "'>" . do_shortcode($content) ."</div>";
}
add_shortcode( 'media', 'boostrap_media' );

// [media-object][/media-object]


// [media-body][/media-body]