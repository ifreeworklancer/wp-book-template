<?php
/*
Template Name: Спасибо
Template Post Type: page
*/
get_header('secondary');
?>

    <!-- Page thanks -->
    <section id="thanks">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-sm-8 text-center">
                    <h1 class="section-title mb-3">
                        <?= get_the_title(); ?>
                    </h1>
                    <div class="section-subtitle mb-4">
                        <?= get_field('section_subtitle'); ?>
                    </div>
                    <a href="<?= site_url(); ?>" class="btn btn-primary">
                        На головну
                    </a>
                </div>
            </div>
        </div>
        <figure class="decor-bg" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);"></figure>
    </section>
<?php
get_footer('secondary');