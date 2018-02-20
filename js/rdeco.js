$(function(){
    $("#header").load("/rdeco.sakura.ne.jp/htdocs/rdeco_hp/header.html");
    $("#footer").load("/rdeco.sakura.ne.jp/htdocs/rdeco_hp/footer.html");
    $('.slider').slick();
})
$(function() {
    $('.multiple-item').slick({
          infinite: true,
          dots:true,
          slidesToShow: 6,
          slidesToScroll: 6,
          responsive: [{
               breakpoint: 768,
                    settings: {
                         slidesToShow: 3,
                         slidesToScroll: 3,
               }
          },{
               breakpoint: 480,
                    settings: {
                         slidesToShow: 2,
                         slidesToScroll: 2,
                    }
               }
          ]
     });
});