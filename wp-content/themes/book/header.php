<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>

<!-- Svg -->
<?php require_once('includes/partials/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <div class="logo">
                    <?= get_custom_logo(0) ?>
                </div>
            </div>
            <div class="col-auto d-flex align-items-center">
                <nav class="site-nav d-none d-lg-block mr-4">
                    <ul class="site-nav-list">
                        <li>
                            <a href="#about" class="anchor-link">
                                <?= get_field('section_subtitle', 49) ?>
                            </a>
                        </li>
                        <li>
                            <a href="#author" class="anchor-link">
                                <?= get_field('section_subtitle', 61) ?>
                            </a>
                        </li>
                        <li>
                            <a href="#reviews" class="anchor-link">
                                <?= get_field('section_subtitle', 68) ?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="#" class="btn btn-outline-primary open-order d-none d-lg-inline-flex">
                    Замовити
                </a>
                <div class="burger-menu d-lg-none">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div>
            <nav class="site-nav">
                <ul class="site-nav-list">
                    <li>
                        <a href="#about" class="anchor-link">
                            <?= get_field('section_subtitle', 49) ?>
                        </a>
                    </li>
                    <li>
                        <a href="#author" class="anchor-link">
                            <?= get_field('section_subtitle', 61) ?>
                        </a>
                    </li>
                    <li>
                        <a href="#reviews" class="anchor-link">
                            <?= get_field('section_subtitle', 68) ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="btn btn-outline-primary open-order">
                Замовити
            </a>
        </div>
    </div>
</header>


<!-- Modal -->
<?php require_once('includes/partials/modal.php'); ?>

<!-- Main -->
<main>
