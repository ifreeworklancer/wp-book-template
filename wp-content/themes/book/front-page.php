<?php

get_header();

$sections = [
    'intro',
    'about',
    'author',
    'reviews',
    'project',
];

foreach ($sections as $section) {
    include(__DIR__ . '/includes/template-parts/' . $section . '.php');
}

get_footer();