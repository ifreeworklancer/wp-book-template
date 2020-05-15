<?php
$page_id = 81;
$project = [
    'subtitle' => get_field('section_subtitle', $page_id),
    'logo' => get_field('project_logo', $page_id),
    'first_description' => get_field('project_first_description', $page_id),
    'second_description' => get_field('project_second_description', $page_id),
];

$book = [
    'name' => get_field('book_name', 13),
    'image' => get_field('book_image', 13),
    'title' => get_field('book_title', 13),
    'author' => get_field('book_author', 13),
    'count_reviews' => get_field('book_count_reviews', 13),
    'description' => get_field('book_description', 13),
    'price' => get_field('book_price', 13),
];
?>

<!-- Project -->
<section id="project">
    <div class="container">
<!--        <div class="row justify-content-around align-items-center mb-5">-->
<!--            <div class="col-sm-8 col-lg-5 mb-4">-->
<!--                <div class="project-item reveal-left">-->
<!--                    <div class="section-subtitle">-->
<!--                        --><?//= $project['subtitle']; ?>
<!--                    </div>-->
<!--                    <h2 class="section-title mb-4">-->
<!--                        --><?//= get_the_title($page_id); ?>
<!--                    </h2>-->
<!--                    <div class="project-item__description">-->
<!--                        --><?//= $project['first_description']; ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-8 col-lg-5">-->
<!--                <div class="project-item reveal-right">-->
<!--                    <div class="project-item-image">-->
<!--                        --><?php //foreach ($project['logo'] as $item) : ?>
<!--                            <div class="project-item-image-col">-->
<!--                                <img src="--><?//= $item['project_logo_image']['url']; ?><!--" alt="project logo">-->
<!--                            </div>-->
<!--                        --><?php //endforeach; ?>
<!--                    </div>-->
<!--                    <div class="project-item__description">-->
<!--                        --><?//= $project['second_description']; ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6 text-center reveal-bottom">
                <div class="book-decor-title">
                    <?= $book['name']; ?>
                </div>
                <div class="book-image">
                    <img src="<?= $book['image']['url']; ?>" alt="project image">
                </div>
                <div class="book-item">
                    <div class="book-item__name">
                        <?= $book['author']; ?>
                    </div>
                    <div class="book-item__text">
                        <p>
                            <?= $book['description']; ?>
                        </p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div class="product-price d-flex justify-content-center justify-content-lg-start mb-4">
                            <?php foreach ($book['price'] as $item) : ?>
                                <div class="product-price-item">
                                    <div class="product-price-item__type">
                                        <?= $item['book_price_type']; ?>
                                    </div>
                                    <div class="product-price-item__value">
                                        <?= $item['book_price_value']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="#" class="btn btn-outline-primary open-order">
                            Замовити
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure style="background-image: url(<?= get_the_post_thumbnail_url($page_id); ?>);" class="decor-bg"></figure>
</section>