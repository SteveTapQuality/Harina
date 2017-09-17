<?php
/**
 * Customizer functionality
 *
 * @package kale-child
 */
?>
<?php 

/*------------------------------
 Panels and Sections
 ------------------------------*/

function kale_child_customizer_panels_sections( $wp_customize ) {
    
    #kale_child_section_general_settings
    $wp_customize->add_section( 'kale_child_section_about', array(
        'title'       => esc_html__( 'About', 'kale-child' ),
        'priority'    => 62
    ) );
}

add_action( 'customize_register', 'kale_child_customizer_panels_sections' );


/*------------------------------
 Fields
 ------------------------------*/
 
function kale_child_customizer_fields( $fields ) {
    
    global $kale_child_defaults;
    
    #kale_section_general_settings
    #-----------------------------------------
    
    $fields[] = array(
        'type'        => 'textarea',
        'settings'    => 'kale_child_footer_copyright',
        'label'       => esc_html__( 'Copyright Text', 'kale-child' ),
        'description' => esc_html__( 'Accepts HTML.', 'kale-child' ),
        'section'     => 'kale_child_section_about',
        'priority'    => 2,
        'default'     => $kale_child_defaults['kale_child_footer_copyright'],
        'sanitize_callback' => 'force_balance_tags',
    );

	
    return $fields;
}

add_filter( 'kirki/fields', 'kale_child_customizer_fields' );
?>