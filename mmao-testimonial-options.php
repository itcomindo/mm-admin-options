<?php

/**
 *
 * Testimonials section
 *@package mmao
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function mmao_testimonial_options()
{
    return (array(
        Field::make('separator', 'mmao_testimonials_sep', 'Testimonial Options')
            ->set_classes('mmao_sep'),

        Field::make('complex', 'mmao_testimonials', 'Testimonial Items')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'mmao_teti_name', 'Name'),
                Field::make('text', 'mmao_teti_author_job', 'Job or Location'),
                Field::make('textarea', 'mmao_teti_desc', 'Name'),
            ))
            ->set_header_template('
                <% if (mmao_teti_name) { %>
                    <%- mmao_teti_name %>
                <% } else { %>
                    Name
                <% } %>
            '),
    ));
}


function mmao_testimonial_content()
{
    $mmao_testimonials = carbon_get_theme_option('mmao_testimonials');
    if ($mmao_testimonials) {
        $output = '<div class="testimonials">';
        $output .= '<ul>';
        foreach ($mmao_testimonials as $testimonial) {
            $output .= '<li class="testimonial-item">';
            $output .= '<h3 class="testimonial-name">' . esc_html($testimonial['mmao_teti_name']) . '</h3>';
            $output .= '<p class="testimonial-content">' . esc_html($testimonial['mmao_teti_desc']) . '</p>';
            $output .= '<p class="testimonial-job">' . esc_html($testimonial['mmao_teti_author_job']) . '</p>';
            $output .= '</li>';
        }
        $output .= '</ul>';
        $output .= '</div>';
    } else {
        $output = '';
    }
    return $output;
}
add_shortcode('mmao_testimonials', 'mmao_testimonial_content');
