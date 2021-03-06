﻿$(function() {
    $('.single-item').slick();
    $('.multiple-item').slick({
          infinite: true,
          dots:false,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [{
               breakpoint: 768,
                    settings: {
                         slidesToShow: 2,
                         slidesToScroll: 2,
               }
          },{
               breakpoint: 480,
                    settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1,
                    }
               }
          ]
     });
    $('.center-item').slick({
          infinite: true,
          dots:true,
          slidesToShow: 1,
          centerMode: true, //要素を中央寄せ
          centerPadding:'100px', //両サイドの見えている部分のサイズ
          autoplay:true, //自動再生
          responsive: [{
               breakpoint: 480,
                    settings: {
                         centerMode: false,
               }
          }]
     });
});