"use strict"
$(document).ready(function(){
    $('.slider').slick({
    });
})
let windowWidth = $(window).width();
if(windowWidth <= 768){
    $('.text-content').removeClass('after-line');
    $('.img-wrapper').addClass('after-line');
}