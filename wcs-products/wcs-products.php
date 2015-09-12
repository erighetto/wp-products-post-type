<?php
/*
Plugin Name: WCS Custom Post Type - Products
Plugin URI: http://www.emanuelrighetto.it
Description: Add a new Content Type as Product
Version: 0.2
Author: Emanuel Righetto
Author Email: posta@emanuelrighetto.it
License:

  Copyright 2015 Emanuel Righetto (posta@emanuelrighetto.it)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as 
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
  
*/

/* This plugin has a dependency: Advanced Custom Fields */
include_once(WP_PLUGIN_DIR .'/advanced-custom-fields/acf.php');

/*
* Create the new post type "products" and the associated fields
*/
add_action( 'init', 'create_product' );

function create_product() {
	register_post_type('products', array(
		'labels' => array(
			'name' => 'Prodotti',
			'singular_name' => 'Prodotto',
			'add_new' => 'Aggiungi nuovo',
			'add_new_item' => 'Aggiungi nuovo Prodotto',
			'edit' => 'Modifica',
			'edit_item' => 'Modifica Prodotto',
			'new_item' => 'Nuovo Prodotto',
			'view' => 'Visualizza',
			'view_item' => 'Visualizza Prodotto',
			'search_items' => 'Cerca tra i Prodotti',
			'not_found' => 'Nessun Prodotto trovato',
			'not_found_in_trash' => 'Nessun Prodotto trovato nel cestino',
			'parent' => 'Prodotto padre'
		) ,
		'public' => true,
		'menu_position' => 15,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		) ,
		'taxonomies' => array(
			''
		) ,
		'menu_icon' => plugins_url('images/image.png', __FILE__) ,
		'has_archive' => true
	));

if(function_exists("register_field_group")) {
	register_field_group(array (
		'id' => 'acf_caratteristiche-prodotto',
		'title' => 'Caratteristiche Prodotto',
		'fields' => array (
			array (
				'key' => 'field_55f358c4db721',
				'label' => 'Stile',
				'name' => 'stile',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55f358f4db722',
				'label' => 'Epoca',
				'name' => 'epoca',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55f35925db723',
				'label' => 'Provenienza',
				'name' => 'provenienza',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55f3592fdb724',
				'label' => 'Prezzo',
				'name' => 'prezzo',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '€',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_dimensioni-prodotto-cm',
		'title' => 'Dimensioni Prodotto (cm)',
		'fields' => array (
			array (
				'key' => 'field_55f3b23bbbc54',
				'label' => 'Altezza',
				'name' => 'altezza',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_55f3b26cbbc55',
				'label' => 'Larghezza',
				'name' => 'larghezza',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_55f3b27cbbc56',
				'label' => 'Profondità',
				'name' => 'profondita',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'products',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
}    
}
?>