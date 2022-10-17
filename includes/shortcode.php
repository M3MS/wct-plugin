<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function wct_shortcode($atts) {

    $attributes = shortcode_atts(
        
        array(
            'id' => null
        ), $atts );

        $html_out = '';
        $i = 1;

        if( have_rows('table_rows', $attributes['id']) ):


            $html_out .= '<div class="comparison-table font-sans">';

            $html_out .= '<div class="heading hidden md:flex">';
                $html_out .= '<span class="font-sans font-bold uppercase text-center">Image</span>';
                $html_out .= '<span class="font-sans font-bold uppercase text-center">Product</span>';
                $html_out .= '<span class="font-sans font-bold uppercase text-center">Details</span>';
            $html_out .= '</div>';

            while( have_rows('table_rows', $attributes['id']) ): the_row();


                $html_out .= '<div class="product ' . ($i <= 3 ? 'has-medal' : '') . ' flex flex-col md:flex-row flex-wrap md:justify-between items-center w-full">';

                    $image = get_sub_field('image');
                    $badge = get_sub_field('badge');
                    $name = get_sub_field('product_name');
                    $features = get_sub_field('features');
                    $link = get_sub_field('cta');

                    if( $badge ):
                        $html_out .= '<div class="product__badge item w-full h-auto">';

                        $html_out .= '<span class="font-sans font-bold uppercase">' . $badge . '</span>';

                        $html_out .= '</div>';
                    endif;

                    if($i <= 3):
                        $html_out .= '<div class="product__medal">';

                        $html_out .= '<img src="' . plugin_dir_url(__DIR__) . '/img/medal-' . $i . '.png" />';

                        $html_out .= '</div>';

                    endif;

                    if( $image && is_array($image) ):
                        $html_out .= '<div class="product__image">';

                        if( $link && is_array($link) ):

                            $html_out .= '<a href="' . $link['url'] . '" class="button">';
                                $html_out .= '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                            $html_out .= '</a>';

                        else:
                            $html_out .= '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                        endif;

                        $html_out .= '</div>';
                    endif;

                    if( $name ):
                        $html_out .= '<div class="product__name">';
                            $html_out .= '<h4 class="text-base font-sans text-center md:text-left font-bold capitalize">' . $name . '</h4>';
                        $html_out .= '</div>';
                    endif;

                    if( $features ):

                        $html_out .= '<ul class="product__features">';
            
                        foreach( $features as $feature ):

                            $html_out .= '<li class="font-sans"><svg class="sui-svg" width="15" height="15" preserveAspectRatio="none" viewBox="0 0 1636 1792" style="fill:#3bb1a9" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1671 566c0 25-10 50-28 68l-724 724-136 136c-18 18-43 28-68 28s-50-10-68-28l-136-136-362-362c-18-18-28-43-28-68s10-50 28-68l136-136c18-18 43-28 68-28s50 10 68 28l294 295 656-657c18-18 43-28 68-28s50 10 68 28l136 136c18 18 28 43 28 68z"></path>
                            </svg>' . $feature['feature'] . '</li>';

                        endforeach;

                        $html_out .= '</ul>';

                    endif;

                    if( $link && is_array($link) ):
                        $html_out .= '<div class="product__link flex items-center justify-center">';
                            $html_out .= '<a href="' . $link['url'] . '" class="wct-button">' . $link['title'] . '</a>';
                        $html_out .= '</div>';
                    endif;


                $html_out .= '</div>';

                $i++;
            endwhile;

            $html_out .= '</div>';

        endif;

    return $html_out;
}

add_shortcode('winner_comparison_table', 'wct_shortcode');