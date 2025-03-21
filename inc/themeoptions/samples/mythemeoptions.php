<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.
if( class_exists( 'CSF' ) ) {
// Set a unique slug-like ID
$prefix = 'git_theme_options';

// Create options
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'theme-options',
  'framework_title'         => 'GIT Custom Framework <small>by Nazmul Siddique</small>',
  'footer_text'             => 'Thank you for creating with GIT Custom Framework',
) );
// General Section
CSF::createSection( $prefix, array(
  'id'    => 'general_section',
  'title'  => 'General Settings',
  'icon'   => 'fas fa-rocket',
) );
CSF::createSection( $prefix, array(
  'parent'      => 'general_section',
  'title'  => 'Header',
  'fields' => array(
    array(
      'id'    => 'logo-image',
      'type'  => 'media',
      'title' => 'Logo',
    ),

  )
) );
CSF::createSection( $prefix, array(
  'parent'      => 'general_section',
  'title'  => 'Contact Information',
  'fields' => array(
    array(
      'id'    => 'contact-us-section-title',
      'type'  => 'text',
      'title' => 'Contact Us Section Text Here',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'contact-us-section-subtitle',
      'type'  => 'text',
      'title' => 'Contact Us Section Sub Title Here',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'contact-us-contact-form',
      'type'  => 'text',
      'title' => 'Contact Us Section Contact Form Short Code Here',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'contact-us-contact-form-address-title',
      'type'  => 'text',
      'title' => 'Contact Us Section Contact Form Address Title Here',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'address',
      'type'  => 'text',
      'title' => 'Contact Address',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'mobile-number',
      'type'  => 'text',
      'title' => 'Contact Number',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'email-address',
      'type'  => 'text',
      'title' => 'Email Address',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),

  )
) );
CSF::createSection( $prefix, array(
  'parent'      => 'general_section',
  'title'  => 'Footer',
  'fields' => array(
    array(
      'id'    => 'footer-logo',
      'type'  => 'media',
      'title' => 'Footer Logo',
    ),
    array(
      'id'    => 'footer-up-arrow',
      'type'  => 'icon',
      'title' => 'Footer Up Icon Image',
    ),
    array(
      'id'    => 'copyright-text',
      'type'  => 'text',
      'title' => 'Copyright Text Here',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'     => 'social-media',
      'type'   => 'repeater',
      'title'  => 'Social Media Icon With Link',
      'fields' => array(
        array(
          'id'    => 'social-media-icon',
          'type'  => 'icon',
          'title' => 'Social Media Icon',
        ),
        array(
          'id'    => 'social-media-link',
          'type'  => 'link',
          'title' => 'Social Media Link',
        ),
      ),
    ),

  )
) );

// Slider Section
CSF::createSection( $prefix, array(
  'title'       => 'Slider Section',
  'icon'  => 'far fa-clone',
  'fields'      => array(
    array(
      'id'     => 'slider-area',
      'type'   => 'repeater',
      'title'  => 'Slider fields',
      'fields' => array(
        array(
          'id'    => 'slider-bg',
          'type'  => 'media',
          'title' => 'Slider Image',
        ),
        array(
          'id'    => 'slider-color',
          'type'  => 'color',
          'title' => 'Color',
        ),
        array(
          'id'    => 'slider-title',
          'type'  => 'text',
          'title' => 'Title Title',
        ),
        array(
          'id'    => 'slider-subtitle',
          'type'  => 'text',
          'title' => 'Title Sub Title',
        ),
        array(
          'id'    => 'slider-description',
          'type'  => 'text',
          'title' => 'Title Description',
        ),
        array(
          'id'    => 'slider-button-text',
          'type'  => 'text',
          'title' => 'Button Text'
        ),
        array(
          'id'    => 'slider-button-link',
          'type'  => 'text',
          'title' => 'Button Link'
        ),
      )
    ),
  )
) );

// Client Section
CSF::createSection( $prefix, array(
  'title'       => 'Client Section',
  'icon'  => 'fa fa-users',
  'fields'      => array(
    array(
      'id'    => 'our-client-section-title',
      'type'  => 'text',
      'title' => 'Home Page Recent Highlights Title',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'     => 'client-area',
      'type'   => 'repeater',
      'title'  => 'Client Image & Link fields',
      'fields' => array(
        array(
          'id'    => 'client-title',
          'type'  => 'text',
          'title' => 'Client Title',
        ),
        array(
          'id'    => 'client-logo-image',
          'type'  => 'media',
          'title' => 'Client Logo Image'
        ),
        array(
          'id'    => 'client-logo-link',
          'type'  => 'link',
          'title' => 'Client Logo Link'
        ),
      )
    ),
  )
) );

// Home page  Section Content
CSF::createSection( $prefix, array(
  'id'     => 'home_page_about_section',
  'title'  => 'Home Page Content',  
  'icon'   => 'fa fa-home',
) );
CSF::createSection( $prefix, array(
  'parent'      => 'home_page_about_section',
  'title'       => 'Home Page About Content',
  'fields'      => array(
      array(
        'id'    => 'about-page-bg',
        'type'  => 'background',
        'title' => 'Home Page About Section Background Image',
        'output' => '.home-about-section',
      ),
      array(
        'id'    => 'about-page-title',
        'type'  => 'text',
        'title' => 'Home Page About Section Title',
        'attributes' => array(
        'style' => 'width: 100%;'
        ),
      ),
      array(
        'id'    => 'about-page-description',
        'type'  => 'textarea',
        'title' => 'Home Page About Section Description',
      ),
  )
) );
CSF::createSection( $prefix, array(
  'parent'      => 'home_page_about_section',
  'title'       => 'Home Page Our Mission Content',
  'fields'      => array(
      array(
        'id'    => 'our-mission-bg',
        'type'  => 'background',
        'title' => 'Home Page About Section Background Image',
        'output' => '.our-mission-section',
      ),
      array(
        'id'    => 'our-mission-section-title',
        'type'  => 'text',
        'title' => 'Home Page Our Mission Title',
        'default' => 'Home Page Our Mission Title',
        'attributes' => array(
        'style' => 'width: 100%;'
        ),
      ),
      array(
        'id'     => 'our-mission-column-content',
        'type'   => 'repeater',
        'title'  => 'Home Page Our Mission Content',
        'fields' => array(
          array(
            'id'    => 'our-mission-column-title',
            'type'  => 'text',
            'title' => 'Our Mission Content Title',
          ),
          array(
            'id'    => 'our-mission-column-description',
            'type'  => 'text',
            'title' => 'Our Mission Content Description',
          ),
        )
      ),

  )
) );
CSF::createSection( $prefix, array(
  'parent'      => 'home_page_about_section',
  'title'       => 'Home Page Our Concerns Content',
  'fields'      => array(
    array(
      'id'    => 'our-concerns-section-title',
      'type'  => 'text',
      'title' => 'Our Concerns Title',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'     => 'our-concern-section-content',
      'type'   => 'group',
      'title'  => 'Home Page Our Concerns Content',
      'fields' => array(
        array(
          'id'    => 'our-concerns-main-title',
          'type'  => 'text',
          'title' => 'Our Concerns Link Title',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
        'id'    => 'our-concerns-tab-image',
        'type'  => 'media',
        'title' => 'Our Concerns Content Image',
        ),
        array(
          'id'    => 'our-concerns-tab-title',
          'type'  => 'text',
          'title' => 'Our Concerns Content Title',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'our-concerns-tab-description',
          'type'  => 'textarea',
          'title' => 'Our Concerns Content Description',
        ),
        array(
          'id'    => 'our-concerns-tab-link',
          'type'  => 'link',
          'title' => 'Our Concerns Content Link',
        ),
      )
    ),
  )

) );

CSF::createSection( $prefix, array(
  'parent'      => 'home_page_about_section',
  'title'       => 'Home Page Recent Highlights Content',
  'fields'      => array(
      array(
        'id'    => 'our-recent-highlights-title',
        'type'  => 'text',
        'title' => 'Home Page Recent Highlights Title',
        'attributes' => array(
        'style' => 'width: 100%;'
        ),
      ),
      array(
        'id'     => 'our-recent-highlights-content',
        'type'   => 'repeater',
        'title'  => 'Home Page Recent Highlights Content',
        'fields' => array(
          array(
            'id'    => 'our-recent-highlights-image',
            'type'  => 'media',
            'title' => 'Recent Highlights Content Image',
          ),
          array(
            'id'    => 'our-recent-highlights-title',
            'type'  => 'text',
            'title' => 'Recent Highlights Content Title',
          ),
          array(
            'id'    => 'our-recent-highlights-description',
            'type'  => 'textarea',
            'title' => 'Recent Highlights Content Description',
          ),
          array(
            'id'    => 'our-recent-highlights-link',
            'type'  => 'link',
            'title' => 'Recent Highlights Content Link',
          ),
        )
      ),

  )
) );


// Real Estate page  Section Content
CSF::createSection( $prefix, array(
  'id'     => 'real_estate_page_section',
  'title'  => 'Real Estate Content',  
  'icon'   => 'fa fa-building',
) );

CSF::createSection( $prefix, array(
  'parent'      => 'real_estate_page_section',
  'title'       => 'Real Estate Slider Section',
  'fields'      => array(
    array(
      'id'     => 'real_estate_slider_area',
      'type'   => 'repeater',
      'title'  => 'Real Estate Slider fields',
      'fields' => array(
        array(
          'id'    => 'real_estate_slider_bg',
          'type'  => 'media',
          'title' => 'Slider Image',
        ),
        array(
          'id'    => 'real_estate_slider_title',
          'type'  => 'text',
          'title' => 'Title Title',
        ),
        array(
          'id'    => 'real_estate_slider_description',
          'type'  => 'text',
          'title' => 'Title Description',
        ),
      )
    ),
  )
) );

CSF::createSection( $prefix, array(
  'parent'      => 'real_estate_page_section',
  'title'       => 'Real Estate About Content',
  'fields'      => array(
      array(
        'id'    => 'real_estate_about_page_bg',
        'type'  => 'media',
        'title' => 'Real Estate About Section Background Image',
      ),
      array(
        'id'    => 'real_estate_about_page_title',
        'type'  => 'text',
        'title' => 'Real Estate About Section Title',
        'attributes' => array(
        'style' => 'width: 100%;'
        ),
      ),
  )
) );

CSF::createSection( $prefix, array(
  'parent'      => 'real_estate_page_section',
  'title'       => 'Real Estate Approach Section',
  'fields'      => array(
    array(
      'id'    => 'approach_section_title',
      'type'  => 'text',
      'title' => 'Approach Section Title',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'     => 'approach_section_area',
      'type'   => 'repeater',
      'title'  => 'Real Estate Approach fields',
      'fields' => array(
        array(
          'id'    => 'approach_single_section_title',
          'type'  => 'text',
          'title' => 'Single Approach Section Title',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'approach_single_section_image_1',
          'type'  => 'media',
          'title' => 'Single Approach Section Image One',
        ),
        array(
          'id'    => 'approach_single_section_image_2',
          'type'  => 'media',
          'title' => 'Single Approach Section Image Two',
        ),
        array(
          'id'    => 'approach_single_section_description',
          'type'  => 'text',
          'title' => 'Single Approach Section Description',
        ),
      )
    ),
  )
) );

CSF::createSection( $prefix, array(
  'parent'      => 'real_estate_page_section',
  'title'       => 'Real Estate Project Section',
  'fields'      => array(
    array(
      'id'    => 'project_section_title',
      'type'  => 'text',
      'title' => 'Project Section Title',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'     => 'project_section_area',
      'type'   => 'group',
      'title'  => 'Real Estate Project fields',
      'fields' => array(
        array(
          'id'    => 'project_single_section_group_title',
          'type'  => 'text',
          'title' => 'Single Project Section Group Title',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'project_single_section_image_1',
          'type'  => 'media',
          'title' => 'Single Project Section Image One',
        ),
        array(
          'id'    => 'project_single_section_image_2',
          'type'  => 'media',
          'title' => 'Single Project Section Image Two',
        ),
        array(
          'id'    => 'project_single_section_image_3',
          'type'  => 'media',
          'title' => 'Single Project Section Image Three',
        ),
        array(
          'id'    => 'project_single_section_title',
          'type'  => 'text',
          'title' => 'Single Project Section Title',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'project_single_section_category',
          'type'  => 'text',
          'title' => 'Single Project Section Category',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'project_single_section_status',
          'type'  => 'text',
          'title' => 'Single Project Section Status',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'project_single_section_address',
          'type'  => 'text',
          'title' => 'Single Project Section Address',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
      )
    ),
  )
) );

CSF::createSection( $prefix, array(
  'parent'      => 'real_estate_page_section',
  'title'       => 'Real Estate Landowner Content',
  'fields'      => array(
      array(
        'id'    => 'real_estate_landowner_bg',
        'type'  => 'background',
        'title' => 'Real Estate Landowner Section Background Image',
        'output' => '.landowner-section-bg',
      ),
      array(
        'id'    => 'real_estate_landowner_title',
        'type'  => 'text',
        'title' => 'Real Estate Landowner Section Title',
        'attributes' => array(
        'style' => 'width: 100%;'
        ),
      ),
      array(
        'id'    => 'real_estate_landowner_subtitle',
        'type'  => 'text',
        'title' => 'Real Estate Landowner Section Sub Title',
        'attributes' => array(
        'style' => 'width: 100%;'
        ),
      ),
      array(
        'id'    => 'real_estate_landowner_image',
        'type'  => 'media',
        'title' => 'Real Estate Landowner Section Scroll Image'
      ),
  )
) );

CSF::createSection( $prefix, array(
  'parent'      => 'real_estate_page_section',
  'title'       => 'Real Estate Key Point',
  'fields'      => array(
    array(
      'id'    => 'key_point_section_title',
      'type'  => 'text',
      'title' => 'Key Point Section Title',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'    => 'key_point_section_subtitle',
      'type'  => 'text',
      'title' => 'Key Point Section Sub Title',
      'attributes' => array(
      'style' => 'width: 100%;'
      ),
    ),
    array(
      'id'     => 'key_point_single_section_area',
      'type'   => 'repeater',
      'title'  => 'Real Estate Key Point fields',
      'fields' => array(
        array(
          'id'    => 'key_point_single_section_title',
          'type'  => 'text',
          'title' => 'Single Key Point Title',
          'attributes' => array(
          'style' => 'width: 100%;'
          ),
        ),
        array(
          'id'    => 'key_point_single_section_icon',
          'type'  => 'media',
          'title' => 'Single Key Point Icon',
        ),
        array(
          'id'    => 'key_point_single_section_description',
          'type'  => 'text',
          'title' => 'Single Key Point Description',
        ),
      )
    ),
  )
) );

}