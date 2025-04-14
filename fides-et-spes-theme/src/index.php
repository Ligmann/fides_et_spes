<?php
if (is_front_page()) {
    get_template_part('views/front-page');
} elseif (is_home()) {
    get_template_part('views/home');
} elseif (is_single()) {
    get_template_part('views/single');
} elseif (is_page()) {
    get_template_part('views/page');
} elseif (is_archive()) {
    get_template_part('views/archive');
} elseif (is_search()) {
    get_template_part('views/search');
} elseif (is_404()) {
    get_template_part('views/404');
};
