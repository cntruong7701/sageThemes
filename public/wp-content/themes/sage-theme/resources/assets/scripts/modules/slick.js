$('.carousel').slick({
    prevArrow: '<span class="slick-prev icomoon icon-chevron-left 2xl:left-[89%] xl:left-[90%] lg:left-[87%] md:left-0"></span>',
    nextArrow: '<span class="slick-next icomoon icon-chevron-right 2xl:right-[-25px] xl:right-[-32px] lg:right-[-25px] md:right-0"></span>',
});

$('.carousel2').slick({
    prevArrow: '<span class="slick2-prev icomoon icon-chevron-left 2xl:left-[60%] xl:left-[70%] md:left-[38%]"></span>',
    nextArrow: '<span class="slick2-next icomoon icon-chevron-right 2xl:right-[10%] xl:right-[-32px] md:right-[38%]"></span>',
});

// $('.carousel3').slick({
//     prevArrow: '<span class="slick2-prev icomoon icon-chevron-left 2xl:left-[60%] xl:left-[70%] md:left-[38%]"></span>',
//     nextArrow: '<span class="slick2-next icomoon icon-chevron-right 2xl:right-[10%] xl:right-[-32px] md:right-[38%]"></span>',
// });

$('.carousel3').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows:true,
    // slide: '.SlideIcon__item',
    // appendArrows: $('.group_arrow'),
    infinite: true,
    responsive: [
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ],
    prevArrow:"<button type='button' class='slick-prev2 pull-left left-0'><span class='icomoon  icon-chevron-left'></span></button>",
    nextArrow:"<button type='button' class='slick-next2 pull-right right-0'><span class='icomoon icon-chevron-right'></span></button>"
})