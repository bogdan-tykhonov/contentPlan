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
//////////////////////slowlyNav//////////////
$("nav").on("click","a", function (event) {
  
    event.preventDefault();
    var id  = $(this).attr('href'),
        top = ($(id).offset().top)-50;
    $('body,html').animate({scrollTop: top}, 1500);
});
$("a").on("click",function (event) {
  if(event.target.tagName != "BUTTON") return;
  event.preventDefault();
  var id  = $(this).attr('href'),
      top = ($(id).offset().top)-500;
  $('body,html').animate({scrollTop: top}, 1500);
});
/////////////////////cookie//////////////////
function setCookie(name, value, options = {}) {

    options = {
      path: '/',
      // при необходимости добавьте другие значения по умолчанию
      ...options
    };
  
    if (options.expires instanceof Date) {
      options.expires = options.expires.toUTCString();
    }
  
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
  
    for (let optionKey in options) {
      updatedCookie += "; " + optionKey;
      let optionValue = options[optionKey];
      if (optionValue !== true) {
        updatedCookie += "=" + optionValue;
      }
    }
  
    document.cookie = updatedCookie;
  };

  function deleteCookie(name) {
    setCookie(name, "", {
      'max-age': -1
    })
  };

  function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  };
//////////////////////timer///////////////
let date;
let time;
let nextDay;
function addZero(timeFormat){
    if(timeFormat<10){
       return '0'+`${timeFormat}`;
    }else{
        return timeFormat;
    }
}
if(getCookie('time')){
    nextDay = JSON.parse(getCookie('time'));
}else{
    nextDay = new Date().getTime()+86400000;;
    setCookie("time", nextDay, 86400000);
};
function timer(){
     date = new Date();
     let timeLeft = nextDay - date;
     let newDate = new Date(timeLeft);
let hours = newDate.getUTCHours();
let minutes = newDate.getUTCMinutes();
let seconds = newDate.getUTCSeconds();
 seconds = addZero(seconds);
 minutes = addZero(minutes);
 hours = addZero(hours);
$('#seconds').text(seconds);
$('#hours').text(hours);
$('#minutes').text(minutes);
}
setInterval(timer,1000);
//////////////////////contacts/////////////
$('.info h3:first-child').on('click', function(){
    if($('.info ul').css('height') == '0px'){
    $('.info ul').css('height','200px');
    }else{
        $('.info ul').css('height','0px');
    }
})
function showAlert(){
$('.alert').css('height','60px');
}
function closeAlert(){
  $('.alert').css('height','0px');
}
//////////////////////////
if(getCookie('liqpay_data')){
let liqPay = JSON.parse(getCookie('liqpay_data'));
let status = liqPay.status;
if(status == 'failure'){
  showAlert();
  setTimeout(closeAlert, 3000);
}
deleteCookie('liqpay_data');
}