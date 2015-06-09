<?php

//[tickets_left format="widget"]
function tickets_left( $atts, $content = null ){
//    if (!is_null($content)) {
//        return "<p>Please, verify your shortcode. This is not an enclosing shortcode.</p>";
//    }

    $local_attrs = shortcode_atts(array(
        'format' => 'widget'
    ), $atts);

    return "foo = {$local_attrs['format']}";
}

add_shortcode( 'tickets_left', 'tickets_left' );