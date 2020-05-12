$('.page-scroll').on('click', function (e) {
    // ambil isi href
    let tujuan = $(this).attr('href');

    // tangkap elemen ybs
    let elementTujuan = $(tujuan);

    $('html , body').animate({
        scrollTop: elementTujuan.offset().top - 65
    }, 1000, 'swing');

    e.preventDefault();
});
