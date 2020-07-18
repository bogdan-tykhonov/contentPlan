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
//////////////////////timer///////////////
let hours = 24;
let minutes = 60;
let seconds = 15;
setMinutes();
setHours();
setSeconds();
function addZero(time){
return '0'+ `${time}`;
}
function setSeconds(){
  
 if(seconds == 0) seconds = 60;
 else{
seconds--;
if(seconds < 10){
   seconds = addZero(seconds);
};
$('#seconds').text(seconds);
 }
}
function setMinutes(){
    if(minutes == 0) minutes = 60;
    else{
    minutes--;
    if(minutes < 10){
        minutes = addZero(seconds);
     };
    $('#minutes').text(minutes);
    }
}
function setHours(){
    if(hours == 0){
        clearInterval(secondsTime);
        clearInterval(minutesTime);
        clearInterval(hoursTime);
    }else{
    hours--;
    if(hours < 10){
        hours = addZero(seconds);
     };
    $('#hours').text(hours);
    }
}

let secondsTime = setInterval(setSeconds,1000);
let minutesTime = setInterval(setMinutes,1000*60);
let hoursTime = setInterval(setHours,1000*60*60);