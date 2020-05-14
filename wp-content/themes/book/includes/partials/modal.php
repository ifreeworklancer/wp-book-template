<div class="custom-modal custom-modal--order">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h2 class="section-title">
            <?= get_field('book_title', 13); ?>
        </h2>
    </div>
    <div class="custom-modal-body">
        <?= do_shortcode('[contact-form-7 id="12" title="Заказ книги"]'); ?>
    </div>
</div>

<div class="modal-mask"></div>