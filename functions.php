<?php

function dev_add_theme_scripts() {
	
	wp_enqueue_style(
		'app_style',
		get_template_directory_uri() . '/public/build/bundle.css',
		false,
		'1.0', 'all'
	);

	wp_enqueue_script(
		'app_scripts',
		get_template_directory_uri() . '/public/build/bundle.js',
		null,
		1.0, true
	);

} add_action('wp_enqueue_scripts', 'dev_add_theme_scripts');