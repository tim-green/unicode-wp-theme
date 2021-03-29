var $ = jQuery;

  jQuery(document).ready(function(){
    jQuery('.unicode-slider').slick({
        accessibility: true,
        infinite: true,
        arrows: true,
        autoplay: false,
        prevArrow: '<div class="unicode-slide-prev"><i class="fal fa-angle-left"></i></div>',
        nextArrow: '<div class="unicode-slide-next"><i class="fal fa-angle-right"></i></div>'
      });
  });
          