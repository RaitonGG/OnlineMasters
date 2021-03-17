<?php
function techbit_breadcrumbs() {

       $techbit_showonhome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $techbit_showcurrent = 1;
    if (is_home() || is_front_page()) {

            echo '<ul id="breadcrumbs" class="banner-link text-center"><li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'techbit') . '</a></li></ul>';
    } else {

        echo '<ul id="breadcrumbs" class="banner-link text-center"><li><a href="' . esc_url(home_url('/')). '">' . esc_html__('Home', 'techbit') . '</a> ';
        if (is_category()) {
            $techbit_thisCat = get_category(get_query_var('cat'), false);
            if ($techbit_thisCat->parent != 0)
                echo esc_html(get_category_parents($techbit_thisCat->parent, TRUE, ' '));
            echo  esc_html__('Archive by category', 'techbit') . ' " ' . single_cat_title('', false) . ' "';
        }   elseif (is_search()) {
            echo  esc_html__('Search Results For ', 'techbit') . ' " ' . get_search_query() . ' "';
        } elseif (is_day()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ';
            echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . esc_html(get_the_time('F') ). '</a> ';
            echo  esc_html(get_the_time('d'));
        } elseif (is_month()) {
            echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ';
            echo  esc_html(get_the_time('F')) ;
        } elseif (is_year()) {
            echo esc_html(get_the_time('Y')) ;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $techbit_post_type = get_post_type_object(get_post_type());
                $techbit_slug = $techbit_post_type->rewrite;
                echo '<a href="' . esc_url(home_url('/'. $techbit_slug['slug'] . '/')) .'">' . esc_html($techbit_post_type->labels->singular_name) . '</a>';
                if ($techbit_showcurrent == 1)
                    echo  esc_html(get_the_title()) ;
            } else {
                $techbit_cat = get_the_category();
                $techbit_cat = $techbit_cat[0];
                $techbit_cats = get_category_parents($techbit_cat, TRUE, ' ');
                if ($techbit_showcurrent == 0)
                    $techbit_cats =
                            preg_replace("#^(.+)\s\s$#", "$1", $techbit_cats);
                echo $techbit_cats;
                if ($techbit_showcurrent == 1)
                    echo  esc_html(get_the_title());
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $techbit_post_type = get_post_type_object(get_post_type());
            echo esc_html($techbit_post_type->labels->singular_name );
        } elseif (is_page()) {
            if ($techbit_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_page() && $post->post_parent) {
            $techbit_parent_id = $post->post_parent;
            $techbit_breadcrumbs = array();
            while ($techbit_parent_id) {
                $techbit_page = get_page($techbit_parent_id);
                $techbit_breadcrumbs[] = '<a href="' . esc_url(get_permalink($techbit_page->ID)) . '">' . esc_html(get_the_title($techbit_page->ID)) . '</a>';
                $techbit_parent_id = $techbit_page->post_parent;
            }
            $techbit_breadcrumbs = array_reverse($techbit_breadcrumbs);
            for ($techbit_i = 0; $techbit_i < count($techbit_breadcrumbs); $techbit_i++) {
                echo $techbit_breadcrumbs[$techbit_i];
                if ($techbit_i != count($techbit_breadcrumbs) - 1)
                    echo ' ';
            }
            if ($techbit_showcurrent == 1)
                echo esc_html(get_the_title());
        } elseif (is_tag()) {
            echo  esc_html__('Posts tagged', 'techbit') . ' " ' . esc_html(single_tag_title('', false)) . ' "';
        } elseif (is_author()) {
            global $author;
            $techbit_userdata = get_userdata($author);
            echo  esc_html__('Articles Published by', 'techbit') . ' " ' . esc_html($techbit_userdata->display_name ). ' "';
        } elseif (is_404()) {
            echo esc_html__('Error 404', 'techbit') ;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            printf( /* translators: %s is search query variable*/ esc_html__(' ( Page %s )', 'techbit'),esc_html(get_query_var('paged')) );
        }

        
        echo '</li></ul>';
    }
}