<?php
$page_id = 68;
$reviews = [
    'subtitle' => get_field('section_subtitle', $page_id),
    'video_link' => get_field('author_video_link', $page_id),
    'items' => get_field('reviews_item', $page_id),
];
?>
<!-- Reviews -->
<section id="reviews">
    <div class="reviews-video" style="background-image: url('<?= get_the_post_thumbnail_url($page_id); ?>');">
        <div class="video-play" data-youtube="<?= getVideoLinkAttribute($reviews['video_link']) ?>">
            <div class="video-play-icon">
                <svg width="50" height="50">
                    <use xlink:href="#video-play-icon"></use>
                </svg>
            </div>
        </div>
    </div>
    <div class="reviews-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h2 class="section-subtitle">
                        <?= $reviews['subtitle']; ?>
                    </h2>
                    <div class="reviews-slider">
                        <?php foreach ($reviews['items'] as $item) : ?>
                            <div class="reviews-slider-item">
                                <div class="reviews-item">
                                    <div class="reviews-item-prev">
                                        <figure style="background-image: url('<?= $item['reviews_item_image']['url']; ?>');"
                                                class="reviews-item__image"></figure>
                                        <div class="reviews-item-info">
                                            <div class="reviews-item__name">
                                                <?= $item['reviews_item_name']; ?>
                                            </div>
                                            <div class="reviews-item__position">
                                                <?= $item['reviews_item_position'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-item-body">
                                        <div class="reviews-item__description">
                                            <?= $item['reviews_item_description']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slider-arrow slider-arrow--reviews">
                        <div class="slider-arrow-item slider-arrow-item--prev">
                            <svg width="25" height="25">
                                <use xlink:href="#arrow-prev-icon"></use>
                            </svg>
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next">
                            <svg width="25" height="25">
                                <use xlink:href="#arrow-next-icon"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>