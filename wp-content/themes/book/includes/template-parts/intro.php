<?php
$page_id = 13;
$intro_image_bg = get_field('intro_image_bg', $page_id);
$intro_image_left = get_field('intro_image_left', $page_id);
$intro_image_right = get_field('intro_image_right', $page_id);
$book = [
    'name' => get_field('book_name', $page_id),
    'title' => get_field('book_title', $page_id),
    'author' => get_field('book_author', 13),
    'count_reviews' => get_field('book_count_reviews', $page_id),
    'description' => get_field('book_description', $page_id),
    'price' => get_field('book_price', $page_id),
];
?>

<!-- Intro -->
<section id="intro">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-sm-10 col-md-8 col-xl-5 h-100 d-flex align-items-center">
                <div class="intro-item reveal-left">
                    <h1 class="section-title">
                        <?= $book['title']; ?>
                    </h1>
                    <div class="book-item">
                        <div class="book-item__name">
                            <?= $book['author']; ?>
                        </div>
                        <div class="book-item__text">
                            <p>
                                <?= $book['description']; ?>
                            </p>
                        </div>
                        <div class="d-flex flex-column align-items-center align-items-xl-start">
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
            <div class="col-sm-9 col-xl-7 h-100 d-flex align-items-end">
                <div id="intro-images" class="intro-images reveal-right">
                    <?php if ($intro_image_bg != '') : ?>
                        <div class="intro-images-item" data-depth="-0.15" data-friction-x="0.15" data-friction-y="0.15"
                             data-origin-x="1" data-origin-y="1" data-limit-y="10">
                            <img src="<?= $intro_image_bg['url']; ?>" alt="intro image">
                        </div>
                    <?php endif; ?>
                    <?php if ($intro_image_left != '') : ?>
                        <div class="intro-images-item" data-depth="0" data-friction-x="0" data-friction-y="0"
                             data-origin-x="1" data-origin-y="1">
                            <img src="<?= $intro_image_left['url']; ?>" alt="intro image">
                        </div>
                    <?php endif; ?>
                    <?php if ($intro_image_right != '') : ?>
                        <div class="intro-images-item" data-depth="0.15" data-friction-x="0.15" data-friction-y="0.15"
                             data-origin-x="1" data-origin-y="1" data-limit-y="10">
                            <img src="<?= $intro_image_right['url']; ?>" alt="intro image">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>