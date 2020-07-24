"use strict"
$(document).ready(function(){
    $('.slider').slick({
    });
})
let windowWidth = $(window).width();
if(windowWidth <= 768){
    $('.text-content').removeClass('after-line');
    $('.img-wrapper').addClass('after-line');
};
function showAlert(){
  $('.alert').css('height','60px');
  };
  function closeAlert(){
    $('.alert').css('height','0px');
  };
//////////////////////slowlyNav//////////////
$("nav").on("click","a", function (event) {
  
    event.preventDefault();
    let id  = $(this).attr('href'),
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
$(".top").on("click",function (event) {
  var id  = $(this).attr('href'),
    top = ($(id).offset().top);
  $('body,html').animate({scrollTop: top}, 1000);
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
});

///////////////sendData/////////////
if(getCookie('liqpay_data')){
  let liqPay = JSON.parse(getCookie('liqpay_data'));
  let status = liqPay.status;
  console.log(status);
  if(status == 'wait_accept'){
    let userData = getCookie('data');
    userData = JSON.parse(userData);
$.ajax({
  url:"mailer.php",
  method:"POST",
  data:{
    name:userData.name,
    phone:userData.phone,
    mail:userData.mail
  },
  success:function(response){
    response = response;
    let index = response.indexOf('{');
     let data = JSON.parse(response.slice(index));
     if(data.success == 'true'){
       showModal(data.mail);
      }else{
        showModal();
        $('.modal h1').text('Нажаль виникла помилка, зверніться будь-ласка до адміністратора')
      }
  }
})
  }else{
    showAlert();
    setTimeout(closeAlert, 3000);
  }
  deleteCookie('liqpay_data');
  }
//////////check Inputs//////////////////
let empty ;
function checkEmpty(){
  empty = 0;
let inputs = document.querySelectorAll('.data input');
inputs.forEach(function(input){
  if(input.value == ""){
    $(input).css('border', '2px solid red');
    empty ++;
  }else{
    $(input).css('border', '1px solid black');
  }
})
return empty;
}
$('#main-buy').on('click', function(e){
  checkEmpty();
  if(empty == 0 && $('#attention').css('color') != 'rgb(255, 0, 0)'){
    e.preventDefault();
    let top = ($('#attention').offset().top)-200;
$('body,html').animate({scrollTop: top}, 500);
$('#attention').css('color', 'red'); 
  };
   if(empty == 0 && $('#attention').css('color') == 'rgb(255, 0, 0)'){
         let name = $('#name').val();
    let phone = $('#tel').val();
    let mail = $('#mail').val();
    let data = {
      "name":name,
      "phone":phone,
      "mail":mail
    }
   data = JSON.stringify(data);
    setCookie('data', data);
return; 
  } 
  else{
    e.preventDefault();
  }
})
///////////////modal////////////
function showModal(text){
  $('.modal-wrapper').css('display','flex');
  $('.modal h1 span').text(text)
};
$('.modal button').on('click', function(){
  $('.modal-wrapper').css('display','none');
})

