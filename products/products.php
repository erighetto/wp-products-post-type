<?php
/*
Plugin Name: Add Custom Post Type
Plugin URI: http://www.emanuelrighetto.it
Description: Add a new Content Type as Product
Version: 0.1
Author: Emanuel Righetto
Author Email: posta@emanuelrighetto.it
License:

  Copyright 2013 Emanuel Righetto (posta@emanuelrighetto.it)

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

/*
* Create the new post type "products" and associated taxonomies
*/
add_action( 'init', 'create_product' );

function create_product() {
register_post_type( 'products',
array(
'labels' => array(
'name' => 'Products',
'singular_name' => 'Product',
'add_new' => 'Add New',
'add_new_item' => 'Add New Product',
'edit' => 'Edit',
'edit_item' => 'Edit Product',
'new_item' => 'New Product',
'view' => 'View',
'view_item' => 'View Product',
'search_items' => 'Search Products',
'not_found' => 'No Products found',
'not_found_in_trash' =>
'No Products found in Trash',
'parent' => 'Parent Product'
),
'public' => true,
'menu_position' => 15,
'supports' =>
array( 'title', 'editor', 'thumbnail',  ),
'taxonomies' => array( '' ),
'menu_icon' =>
plugins_url( 'images/image.png', __FILE__ ),
'has_archive' => true
)
);
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'collection', 
    	array('products'), /* if you change the name of register_post_type( 'product', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Collections', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Collection', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Collections', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Collections', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Collection', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Collection:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Collection', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Collection', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Collection', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Collection Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'size', 
    	array('products'), /* if you change the name of register_post_type( 'product', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Sizes', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Size', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Sizes', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Sizes', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Size', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Size:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Size', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Size', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Size', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Size Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
  	// now let's add custom tags (these act like categories)
    register_taxonomy( 'color', 
    	array('products'), /* if you change the name of register_post_type( 'product', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Colors', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Color', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Colors', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Colors', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Color', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Color:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Color', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Color', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Color', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Color Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );
  	// now let's add custom tags (these act like categories)
    register_taxonomy( 'cup', 
    	array('products'), /* if you change the name of register_post_type( 'product', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Cups', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Cup', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Cups', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Cups', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Cup', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Cup:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Cup', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Cup', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Cup', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Cup Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    );     
}





/*
* Add the UI for a custom field that stores SKU
*/
add_action( 'admin_init', 'product_details_admin' );

function product_details_admin() {
add_meta_box( 'product_meta_box',
'Product Details',
'display_product_meta_box',
'products', 'normal', 'high' );
}

function display_product_meta_box( $product ) {
// Retrieve SKU
$SKU =
esc_html( get_post_meta( $product->ID,
'SKU', true ) );
$SKU =
intval( get_post_meta( $product->ID,
'SKU', true ) );
?>
<table>
<tr>
<td style="width: 100%">SKU</td>
<td><input type="text" size="80"
name="product_SKU"
value="<?php echo $SKU; ?>" /></td>
</tr>
</table>
<?php }




/*
* Save the value of custom field SKU
*/
add_action( 'save_post', 'add_product_fields', 10, 2 );

function add_product_fields( $product_id,
$product ) {
// Check post type for Products
if ( $product->post_type == 'products' ) {
// Store data in post meta table if present in post data
if ( isset( $_POST['product_SKU'] ) &&
$_POST['product_SKU'] != '' ) {
update_post_meta( $product_id, 'SKU',
$_POST['product_SKU'] );
}
}
}



/*
* Include custom template
*/
add_filter( 'template_include','include_template_function', 1 );

function include_template_function( $template_path ) {
if ( get_post_type() == 'products' ) {
if ( is_single() ) {
// checks if the file exists in the theme first,
// otherwise serve the file from the plugin
if ( $theme_file = locate_template( array
( 'single-products.php' ) ) ) {
$template_path = $theme_file;
} else {
$template_path = plugin_dir_path( __FILE__ ) .
'/single-products.php';
}
}
}
return $template_path;
}




/*
* Check the post type of the parent of a given $post
*/
function get_parent_post_type ($post) {
  /* Get an array of Ancestors and Parents if they exist */
	$parents = get_post_ancestors( $post->ID );
  /* Get the top Level post->ID count base 1, array base 0 so -1 */ 
	$id = ($parents) ? $parents[count($parents)-1]: $post->ID;
	/* Get the parent type */
  $parent = get_post( $id );
	$type = $parent->post_type;
	
return $type;
}

/**
 *  Add custom field to media content: prepare the html for the rendering of the field
 * @param $form_fields array, fields to include in attachment form
 * @param $post object, attachment record in database
 * @return $form_fields, modified form fields
 */
 
function product_attachment_field_purpose( $form_fields, $post ) {
if ( get_parent_post_type($post) == 'products' ) {

	$option = array ('','Front','Back');
	$html = "<select name='attachments[{$post->ID}][custom_purpose]' id='attachments[{$post->ID}][custom_purpose]'>\n";
	
	foreach ($option as $key => $value) {
    $html.= "<option value='".strtolower($value)."'";
    	if ( get_post_meta( $post->ID, '_custom_purpose', true ) == strtolower($value)){
                $html.= ' selected="selected"';
            }
    $html.= ">".$value."</option>\n";
  }

  $html.= "</select>\n";


	$form_fields['custom_purpose'] = array(
		'label' => 'Custom Purpose', 
		'input' => 'html',
		'html' => $html,
		'helps' => 'Add Custom Purpose',
		'required' => TRUE,  
	);
}
	return $form_fields;
}

add_filter( 'attachment_fields_to_edit', 'product_attachment_field_purpose', 10, 2 );

/*
@@@@ TODO: http://www.kevinleary.net/add-custom-meta-fields-media-attachments-wordpress/#IDComment249326558

Bisogna capire come intervenire
*/


/**
 * Store the data of the custom field into the db
 * @param $post array, the post data for database
 * @param $attachment array, attachment fields from $_POST form
 * @return $post array, modified post data
 */

function product_attachment_field_purpose_save( $post, $attachment ) {
	if( isset( $attachment['custom_purpose'] ) )
update_post_meta( $post['ID'], '_custom_purpose', $attachment['custom_purpose'] );

	return $post;
}

add_filter( 'attachment_fields_to_save', 'product_attachment_field_purpose_save', 10, 2 );




/*
* In the media UI render a new colum that show the value of the custom field
*/
function product_image_attachment_columns($columns) {
    $columns['product-custom-scope'] = __("Custom Scope");
    return $columns;
}
add_filter("manage_media_columns", "product_image_attachment_columns", null, 2);

function product_image_attachment_show_column($name) {
    global $post;
    switch ($name) {
        case 'product-custom-scope':
            $value = get_post_meta($post->ID, "_custom_purpose", true);
            echo $value;
            break;
    }
}
add_action('manage_media_custom_column', 'product_image_attachment_show_column', null, 2);
?>
