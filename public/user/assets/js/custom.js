$(function(){

    'use strict';


        // Toggle Side Nav
        $(".buttonn").click(function(){
            $(".sidenav").animate({right: '0'} , 1000);
        });
        $(".closenav").click(function(){
            $(".sidenav").animate({right: '-260px'} , 1000);
        });

        // Scroll To Element
        $(document).ready(function (){
            $(".scrollPortfolio").click(function (e){
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#portfolio").offset().top
                }, 2000);
            });
        });


    // Carousel Product
    $('.bages-slider').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        tlr:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });


    // Toggle Counter
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    
    //Toggle Fixed Header
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 148) {
            $('.top-header').addClass('fixed-header');
        }
        else {
            $('.top-header').removeClass('fixed-header');
        }
    });

    // Show And Hidden Button Scroll Top
    $('body').append("<div class='go-top'><i class='fas fa-angle-double-up'></i></div>");
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600)
            $('.go-top').addClass('active');
        if (scrolled < 600)
            $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function() {
        $('html, body').animate({
            scrollTop: '0',
        }, 50);
    });

    // Toggle Cart
    $('.button-cart').click(function(e){
        e.preventDefault();
        $('.box-cart').fadeIn(1000);
    });

    $(document).mouseup(function(e){
        if($(e.target).closest('.box-cart').length === 0){
            $('.box-cart').hide();
        }
    });

    // Rating 
    $('.clickRate li').click(function(){
        $('.clickRate li').removeClass('fillStar');
        var $i = 0;
        for ($i = 0; $i <= $('.clickRate li').index(this) ; $i++) {
            $('.clickRate li').eq($i).addClass('fillStar');
        }
    });

    // Toggle Input Pluse And Minus
    $(document).ready(function() {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });

    // PlaY owl-imgs In Section owl-imgs
    $('.owl-imgs .thumbnails img').on('click', function () {
        $('.owl-imgs .master-img img').hide().attr('src' , $(this).attr('src')).fadeIn(500);
    });

    // Toggle Ckeckbox
    $('.collapse-section .check-accordion').click(function(){
        $(this).next('.content').slideToggle();
        $(this).parent('.collapse-section .nav-item').css({'border' : '2px solid blue'});
        // $('.accordion-collapse').not($(this).next('.accordion-collapse')).slideUp();
    });

    // Change Content with Yes Or No
    $("#yesShowMore1").click(function () {
        $(".content1").show();
    });
    $("#noShowMore1").click(function () {
        $(".content1").hide();
    });
    $("#yesShowMore2").click(function () {
        $(".content2").show();
    });
    $("#noShowMore2").click(function () {
        $(".content2").hide();
    });
    $("#yesShowMore3").click(function () {
        $(".content3").show();
    });
    $("#noShowMore3").click(function () {
        $(".content3").hide();
    });
    $("#yesShowMore4").click(function () {
        $(".content4").show();
    });
    $("#noShowMore4").click(function () {
        $(".content4").hide();
    });
    $("#yesPay").click(function () {
        $(".section-selectPay").show();
        $(".section-steps").hide();
    });
    $("#noPay").click(function () {
        $(".section-selectPay").hide();
        $(".section-steps").show();
    });
    $("#noAddress").click(function () {
        $(".other-Ad").show();
    });
    $("#yesAddress").click(function () {
        $(".other-Ad").hide();
    });

    // $(document).ready(function() {
    //     $(".btnAdd").click(function(){
    //         $(".Menue").clone().appendTo(".Menue");
    //     });
    // });
    let btnAdd = document.getElementById("btnAdd");
    btnAdd.addEventListener("click", function() {
        let boxes = document.getElementById("Menue");
        let clone = boxes.firstElementChild.cloneNode(true);
        boxes.appendChild(clone);
    });


    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
          $(".files").on("change", function(e) {
            var files = e.target.files,
              filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
              var f = files[i]
              var fileReader = new FileReader();
              fileReader.onload = (function(e) {
                var file = e.target;
                $("<span class=\"pip\">" +
                  "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                  "<br/><span class=\"remove\"><i class=\"fa-solid fa-xmark\"></i></span>" +
                  "</span>").insertAfter(".files");
                  
                $(".remove").click(function(){
                  $(this).parent(".pip").remove();
                });
              });
              fileReader.readAsDataURL(f);
            }
            console.log(files);
          });
        }
    });






   
});