<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/**
 * Gestor de Fincas Zaragoza - Child Theme
 * Cargar estilos del tema padre y mejoras de diseño
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	
	// Fuentes de Google para tipografía elegante
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;600;700&family=Segoe+UI:wght@400;500;600;700&display=swap' );
});

/**
 * Agregar soporte para animaciones suaves
 */
add_action( 'wp_head', function () {
	echo '<style>';
	echo 'html { scroll-behavior: smooth; }';
	echo '* { box-sizing: border-box; }';
	echo 'body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }';
	echo '.wp-block-button { margin: 20px 0; }';
	echo '@media (prefers-reduced-motion: reduce) { * { animation: none !important; transition: none !important; } }';
	echo '</style>';
}, 999 );

/**
 * Soporte mejorado para Stackable y bloques Gutenberg
 */
add_filter( 'blocksy:custom:css', function ( $css ) {
	$custom_css = '
	/* Soporte para Stackable blocks */
	.ugb-container { border-radius: 12px; }
	.ugb-button { border-radius: 6px; }
	.ugb-block__content { line-height: 1.6; }
	';
	return $css . $custom_css;
} );

/**
 * Mejorar aparición de imágenes
 */
add_filter( 'wp_get_attachment_image_attributes', function ( $attr ) {
	$attr['loading'] = 'lazy';
	return $attr;
} );
