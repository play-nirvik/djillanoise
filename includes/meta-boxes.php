<?php
/**
 * Initialize the meta boxes.
 */
add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {

  $event_details_meta_box = array(
    'id'        => 'event_details',
    'title'     => 'Event Details',
    'desc'      => '',
    'pages'     => array( 'event' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
            'id'          => 'event_date_picker',
            'label'       => __( 'Date', 'djillanoise' ),
            'desc'        => __( 'Choose event date', 'djillanoise' ),
            'type'        => 'date-picker'
        ),
      array(
            'id'          => 'event_venue',
            'label'       => __( 'Venue', 'djillanoise' ),
            'desc'        => __( 'Enter Venue details', 'djillanoise' ),
            'type'        => 'text'
      ),
      array(
            'id'          => 'event_link',
            'label'       => __( 'Link', 'djillanoise' ),
            'desc'        => __( 'Enter event URL link', 'djillanoise' ),
            'type'        => 'text'
      )
    )
  );

  ot_register_meta_box( $event_details_meta_box );

}
?>