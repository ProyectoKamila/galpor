$(document).ready(function() {

   var dstoy = $('#stoy').attr('data-url');
   console.log('Case donde ' + dstoy);
    switch (dstoy) {
        case 'index':
        $('.menu .nav-pills > li:first-child').addClass('active');
        break;
        case 'oonocenos':
        $('.menu .nav-pills > li:nth-child(2)').addClass('active');
        break;
        case 'servicios':
        $('.menu .nav-pills > li:nth-child(3)').addClass('active');
        break;
        case 'galeria':
        $('.menu .nav-pills > li:nth-child(4)').addClass('active');
        break;
        case 'contactanos':
        $('.menu .nav-pills > li:nth-child(5)').addClass('active');
        break;
    }
});

