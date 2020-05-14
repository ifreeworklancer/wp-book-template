<?php
$page_id = 61;
$author = [
    'subtitle' => get_field('section_subtitle', $page_id),
    'description' => get_field('author_description', $page_id),
];
?>
<!-- Author -->
<section id="author">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-sm-9 col-md-7 col-lg-6">
                <div class="author-image reveal-left">
                    <figure class="decor-image"
                            style="background-image: url(<?= get_theme_file_uri('images/icons/author-decor.svg') ?>);"></figure>
                    <img src="<?= get_the_post_thumbnail_url($page_id); ?>" alt="author image">
                </div>
            </div>
            <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="author-item reveal-right">
                    <div class="section-subtitle">
                        <?= $author['subtitle']; ?>
                    </div>
                    <h2 class="section-title mb-3">
                        <?= get_the_title($page_id); ?>
                    </h2>
                    <div class="author-item-description">
                        <?= $author['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>