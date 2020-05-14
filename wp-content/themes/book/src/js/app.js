import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';
import Parallax from 'parallax-js'

window.jQuery = window.$ = jquery;

(function () {

    /**
     *  Header and Menu
     */

    let burgerMenu = $('.burger-menu'),
        menu = $('.menu');

    $(burgerMenu).on('click', function () {
        burgerMenu.toggleClass('active');
        menu.toggleClass('active');
    });

    $(document).mouseup(function (e) {
        if ((!burgerMenu.is(e.target) && burgerMenu.has(e.target).length === 0) && (!menu.is(e.target) && menu.has(e.target).length === 0)) {
            burgerMenu.removeClass('active');
            menu.removeClass('active');
        }
    });

    $(window).on('scroll', function () {
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Anchor link
     */
    $(".anchor-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Form-label
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        $(this).val() !== "" ? $(this).parents('.form-group').addClass('in-focus') : $(this).parents('.form-group').removeClass('in-focus');
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Parallax
     */
    let scene = document.getElementById('intro-images');
    if (!!scene) {
        new Parallax(scene);
    }

    $(window).on('scroll', function () {
        $('#about .decor-image img').css('transform', `translateY(${$(window).scrollTop() * 0.2}%)`);
    });

    /**
     * Modal
     */
    let orderModal = $('.custom-modal--order'),
        closeModal = $('.close-modal'),
        modalMask = $('.modal-mask');

    $('.open-order').on('click', function (e) {
        e.preventDefault();
        $(orderModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function () {
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            if ($(orderModal).length) {
                $(orderModal).removeClass('active');
                $(modalMask).removeClass('active');
            }
        }
    });

    /**
     * Slider
     */
    if ($('.reviews-slider').length) {
        let flkty1 = new Flickity(document.querySelector('.reviews-slider'), {
            prevNextButtons: false,
            pageDots: false,
            contain: true,
            draggable: false,
            wrapAround: true,
            adaptiveHeight: true,
            autoPlay: 4000,
            pauseAutoPlayOnHover: true,
            cellAlign: 'left'
        });

        document.querySelector('.slider-arrow--reviews .slider-arrow-item--prev').addEventListener('click', function () {
            flkty1.previous(false, false);
        });

        document.querySelector('.slider-arrow--reviews .slider-arrow-item--next').addEventListener('click', function () {
            flkty1.next(false, false);
        });
    }

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.reveal-left', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reveal-right', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reveal-bottom', {
        origin: 'bottom',
        delay: 400,
        distance: '200px'
    });
    ScrollReveal().reveal('.reveal-bottom-interval', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
})(jQuery);