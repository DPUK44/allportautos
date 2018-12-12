<?php
add_action( 'cmb2_admin_init', 'cmb2_allportautos_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_allportautos_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_allportautos_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'allportautos' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Textarea for left column
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'allportautos' ),
		'desc'       => __( 'Content for left column', 'allportautos' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea'
    ) );
    
    // Textarea for right column
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'allportautos' ),
		'desc'       => __( 'Content for right column', 'allportautos' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea'
	) );

	// Add other metaboxes as needed

}