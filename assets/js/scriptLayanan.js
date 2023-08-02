let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
    }, 4000);
    
$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('.-1').toggleClass('1');
        $('.-2').toggleClass('2');
    });
 

$('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
  });

});

var myFP = fluidPlayer('video',	{
    "layoutControls": {
        "controlBar": {
            "autoHideTimeout": 3,
            "animated": true,
            "autoHide": true,
        },
        "htmlOnPauseBlock": {
            "html": null,
            "height": null,
            "width": null,
        },
            "autoPlay": false,
            "mute": true,
            "allowTheatre": true,
            "playPauseAnimation": true,
            "playbackRateEnabled": true,
            "allowDownload": true,
            "playButtonShowing": true,
            "fillToContainer": false,
            "posterImage": "IMG/thumbnail.jpg",
    },
    "vastOptions": {
            "adList": [],
            "adCTAText": false,
            "adCTATextPosition": "",
    },
}); 