<?php
    $galleryPhotos = [
        'https://via.placeholder.com/800x600',
        'https://via.placeholder.com/800x300',
        'https://via.placeholder.com/800x400',
        'https://via.placeholder.com/800x500',
        'https://via.placeholder.com/800x600',
        'https://via.placeholder.com/800x300',
        'https://via.placeholder.com/800x400',
        'https://via.placeholder.com/800x500',
    ]
?>

<section class="gallery-container">
    <?php foreach ($galleryPhotos as $key => $galleryPhoto): ?>
        <div class="gallery-container__gallery-item" data-modal-open="modal-gallery" onclick="slideToIndex(<?php echo $key?>)">
            <img src="<?php echo $galleryPhoto?>" alt="">
        </div>
    <?php endforeach ?>
</section>

<div data-modal="modal-gallery" class="modal modal-gallery">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__box gallery">
        <div class="modal__header">
            <div class="modal__title">Título Galeria</div>
            <div class="modal__close js-modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                    <path
                        class="path1"
                        d="M548.203 537.6l289.099-289.098c9.998-9.998 9.998-26.206 0-36.205-9.997-9.997-26.206-9.997-36.203 0l-289.099 289.099-289.098-289.099c-9.998-9.997-26.206-9.997-36.205 0-9.997 9.998-9.997 26.206 0 36.205l289.099 289.098-289.099 289.099c-9.997 9.997-9.997 26.206 0 36.203 5 4.998 11.55 7.498 18.102 7.498s13.102-2.499 18.102-7.499l289.098-289.098 289.099 289.099c4.998 4.998 11.549 7.498 18.101 7.498s13.102-2.499 18.101-7.499c9.998-9.997 9.998-26.206 0-36.203l-289.098-289.098z"
                    ></path>
                </svg>
            </div>
        </div>
        <div class="modal__body">
            <div class="modal__content">
                <div class="gallery-modal-slider swiper-container" id="gallery-modal-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($galleryPhotos as $key => $galleryPhoto): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $galleryPhoto?>" alt="">
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function slideToIndex(index){
        var modalSlider = document.getElementById('gallery-modal-slider');
        modalSlider.swiper.slideTo(index);
    }
</script>
