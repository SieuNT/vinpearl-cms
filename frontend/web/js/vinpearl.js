window.addEventListener('load', function() {
    $('.js-next-price').on('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-price').scrollIntoView({ behavior: 'smooth' });
    });

    $('.js-next-uudai').on('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-uudai').scrollIntoView({ behavior: 'smooth' });
    });
    $('.js-next-vitri').on('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-vitri').scrollIntoView({ behavior: 'smooth' });
    });
    $('.js-next-matbang').on('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-matbang').scrollIntoView({ behavior: 'smooth' });
    });
    $('.js-next-nhamau').on('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-nhamau').scrollIntoView({ behavior: 'smooth' });
    });
    $('.js-next-lienhe').on('click', function(e) {
        e.preventDefault();
        document.querySelector('.footer').scrollIntoView({ behavior: 'smooth' });
    });
});