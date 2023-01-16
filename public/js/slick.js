$('.brands').slick({
    slidesToShow: 6 ,
    slidesToScroll: 1,
    dots:true,
    arrow:false,
    autoplay:true,
    autoplaySpeed:500,
    infinite: true,
    
    //parametrer les element dans le responsive
    responsive: [
        {
            breakpoint:992,
            settings: {
              slidesToShow: 5,
              dots:true
            }
          },
        {
          breakpoint: 850,
          settings: {
            slidesToShow:4,
            dots:false
          }
        },
        {
          breakpoint: 450,
          settings: {
            slidesToShow:3,
            dots:false
          }
        },
      ]   
});
