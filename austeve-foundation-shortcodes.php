<?php
/**
 * Plugin Name: AUSteve Foundation Shortcodes
 * Plugin URI: https://github.com/australiansteve/wp-plugin-austeve-foundation-shortcodes
 * Description: Foundation shortcodes for display of UI elements
 * Version: 1.0.0
 * Author: AustralianSteve
 * Author URI: http://AustralianSteve.com
 * License: GPL2
 */

/* Regular grid row/columns */
function austeve_foundation_shortcode_columns( $atts, $content ) {
    $atts = shortcode_atts( array(
        'small' => 12,
        'medium' => null,
        'large' => null,
        'class' => null
    ), $atts );
    
    $atts['medium'] = ( $atts['medium'] == null ) ? $atts['small'] : $atts['medium'];
    $atts['large'] = ( $atts['large'] == null ) ? $atts['medium'] : $atts['large'];
   
    extract( $atts );
    
    $sizes = 'small-' . $small . ' medium-' . $medium . ' large-' . $large;

    $additionalClasses = ( $atts['class'] == null ) ? '' : ' '.$atts['class'];

    return '<div class="columns ' . $sizes . $additionalClasses . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'column', 'austeve_foundation_shortcode_columns');

function austeve_foundation_shortcode_row( $atts, $content ) {
    $atts = shortcode_atts( array(
        'class' => null,
        'background_image' => null,
    ), $atts );

    $additionalClasses = ( $atts['class'] == null ) ? '' : ' '.$atts['class'];
    $style = ( $atts['background_image'] == null ) ? '' : 'background-image:url('.$atts['background_image'].')';

    return '<div class="row' . $additionalClasses . '" style="'.$style.'">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'row', 'austeve_foundation_shortcode_row' );

/* Block grid row/columns */
function austeve_foundation_shortcode_column( $atts, $content ) {
    $atts = shortcode_atts( array(
        'class' => null
    ), $atts );

    $additionalClasses = ( $atts['class'] == null ) ? '' : ' '.$atts['class'];

    return '<div class="column' . $additionalClasses . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'blockcolumn', 'austeve_foundation_shortcode_column' );

function austeve_foundation_shortcode_blockrow( $atts, $content ) {
    $atts = shortcode_atts( array(
        'small' => 1,
        'medium' => null,
        'large' => null,
        'class' => null
    ), $atts );
    
    $atts['medium'] = ( $atts['medium'] == null ) ? $atts['small'] : $atts['medium'];
    $atts['large'] = ( $atts['large'] == null ) ? $atts['medium'] : $atts['large'];
   
    extract( $atts );
    
    $sizes = 'small-up-' . $small . ' medium-up-' . $medium . ' large-up-' . $large;
    
    $additionalClasses = ( $atts['class'] == null ) ? '' : ' '.$atts['class'];

    return '<div class="row ' . $sizes . $additionalClasses . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'blockrow', 'austeve_foundation_shortcode_blockrow' );
?>