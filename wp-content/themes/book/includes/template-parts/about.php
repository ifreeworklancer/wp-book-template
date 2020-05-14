<?php
$page_id = 49;
$about = [
    'subtitle' => get_field('section_subtitle', $page_id),
    'description' => get_field('about_description', $page_id),
    'items' => get_field('about_item', $page_id),
]
?>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-around mb-5">
            <div class="col-sm-9 col-lg-5 mb-4 mb-lg-0 reveal-left">
                <div class="section-subtitle">
                    <?= $about['subtitle']; ?>
                </div>
                <h2 class="section-title">
                    <?= get_the_title($page_id); ?>
                </h2>
            </div>
            <div class="col-sm-9 col-lg-5 reveal-right">
                <div class="section-description">
                    <?= $about['description']; ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <?php foreach ($about['items'] as $item) : ?>
                <div class="col-sm-7 col-lg-3">
                    <div class="about-item reveal-bottom-interval">
                        <div class="about-item-prev">
                            <img src="<?= $item['about_item_image']['url']; ?>" alt="about image">
                        </div>
                        <div class="about-item-description">
                            <?= $item['about_item_description']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="decor-image">
        <img src="<?= get_the_post_thumbnail_url($page_id);?>" alt="decor image">
    </div>
</section>