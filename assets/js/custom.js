var $ = jQuery.noConflict();
$(document).ready(function($) {
    "use strict";

//  Contact Form with validation

    $("#form-contact-submit").bind("click", function(event){
        $("#form-contact").validate({
            submitHandler: function() {
                $.post("assets/php/contact.php", $("#form-contact").serialize(),  function(response) {
                    $('#form-status').html(response);
                    $('#form-contact-submit').attr('disabled','true');
                });
                return false;
            }
        });
    });

    $("#form-slider-submit").bind("click", function(event){
        $("#form-slider").validate({
            rules: {
                phone: {
                    required: true,
                    number: true
                }
            },
            submitHandler: function() {
                $.post("assets/php/subscribe.php", $("#form-slider").serialize(),  function(response) {
                    $('#form-slider-status').html(response);
                    $('#form-slider-submit').addClass('disable-submit-button');
                });
                return false;
            }
        });
    });

    $("#form-one-field-submit").bind("click", function(event){
        $("#form-one-field").validate({
            submitHandler: function() {
                $.post("assets/php/subscribe.php", $("#form-one-field").serialize(),  function(response) {
                    $('#form-one-field-status').html(response);
                    $('#form-one-field .input-group').addClass('hide');
                });
                return false;
            }
        });
    });





//  Resposive Video Scaling

    $(".video").fitVids();
    $('.video').css('visibility', 'visible');

//  Slider (Flex Slider)



//  Image Carousel

    if ($('.owl-carousel').length > 0) {
        $(".image-carousel").owlCarousel({
            items: 1,
            autoPlay: 10000,
            stopOnHover: true,
            navigation: true,
            navigationText : false,
            responsiveBaseWidth: ".image-carousel-slide"
        });
        $(".testimonials-carousel").owlCarousel({
            items: 1,
            responsiveBaseWidth: ".testimonial",
            pagination: true
        });
    }

//  Set the same height to "empty" box as the parent box

    if (document.documentElement.clientWidth > 768) {
        $('.box.with-empty-space .empty-space').css('height', $(".box.with-empty-space").height());
    }

//  Smooth Navigation Scrolling

    $('.navigation .nav a[href^="#"], a[href^="#"].roll').on('click',function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);
        if (document.documentElement.clientWidth > 768) {
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - $('.navigation').height()
            }, 2000)
        } else {
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 2000)
        }
    });

//  Set slider height to full screen if has a video

    if ( $("body").hasClass("slider-has-video") ) {
        $('.flexslider').css('height', $(window).height() - ($('.slider-banner').height() + $('.navigation').height() ));
    }

//  Magnific Popup

    if ($('.image-popup').length > 0) {
        $('.image-popup').magnificPopup({
            type:'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            overflowY: 'scroll'
        });
    }

    if ($('.video-popup').length > 0) {
        $('.video-popup').magnificPopup({
            type:'iframe',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            overflowY: 'scroll',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                    '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src'
            }
        });
    }

//  Parallax

    if (document.documentElement.clientWidth > 768) {
        $('.slide-has-parallax').each(function () {
            var imgSrc = $(this).children('.parallax-bg').attr('src');
            $(this).css('background', 'url("' + imgSrc + '") 50% 0%');
            $(this).children('.parallax-bg').remove();
        });
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() > 1) {
            $('.navigation').addClass('navigation-show');
        } else {
            $('.navigation').removeClass('navigation-show');
        }
        var scrollAmount = $(window).scrollTop() / 1.5;
        scrollAmount = Math.round(scrollAmount);
        if (document.documentElement.clientWidth > 768) {
            $('.slide-has-parallax').css('background-position', '50% ' + scrollAmount + 'px');
            $('.form-has-parallax').css('margin-bottom', scrollAmount/2 + 'px');
        }
    });

//  Scroll Reveal

    if (document.documentElement.clientWidth > 768) {
        window.scrollReveal = new scrollReveal();
    }

//  Count Down

    if ($('.count-down').length > 0) {
        $(".count-down").ccountdown(2014,12,24,'18:00');
    }

});

$(window).load(function() {

    if($('body').hasClass('has-count-down')){
        if ($(window).width() < 768) {
            $('.flexslider').attr('style', 'height: '+ $('#count-down .block').height() +'px !important');
        }
    }

    if ($('.flexslider').length > 0) {
        $('.flexslider').flexslider({
            directionNav: true,
            controlNav: false,
            prevText: "",
            nextText: "",
            start: function(slider) {
                document.getElementById("loading-icon").remove();
                $('.flexslider').removeClass('loading');
            }
        });
    }
});

//var mapStyles = [{featureType:'water',elementType:'all',stylers:[{hue:'#d7ebef'},{saturation:-5},{lightness:54},{visibility:'on'}]},{featureType:'landscape',elementType:'all',stylers:[{hue:'#eceae6'},{saturation:-49},{lightness:22},{visibility:'on'}]},{featureType:'poi.park',elementType:'all',stylers:[{hue:'#dddbd7'},{saturation:-81},{lightness:34},{visibility:'on'}]},{featureType:'poi.medical',elementType:'all',stylers:[{hue:'#dddbd7'},{saturation:-80},{lightness:-2},{visibility:'on'}]},{featureType:'poi.school',elementType:'all',stylers:[{hue:'#c8c6c3'},{saturation:-91},{lightness:-7},{visibility:'on'}]},{featureType:'landscape.natural',elementType:'all',stylers:[{hue:'#c8c6c3'},{saturation:-71},{lightness:-18},{visibility:'on'}]},{featureType:'road.highway',elementType:'all',stylers:[{hue:'#dddbd7'},{saturation:-92},{lightness:60},{visibility:'on'}]},{featureType:'poi',elementType:'all',stylers:[{hue:'#dddbd7'},{saturation:-81},{lightness:34},{visibility:'on'}]},{featureType:'road.arterial',elementType:'all',stylers:[{hue:'#dddbd7'},{saturation:-92},{lightness:37},{visibility:'on'}]},{featureType:'transit',elementType:'geometry',stylers:[{hue:'#c8c6c3'},{saturation:4},{lightness:10},{visibility:'on'}]}];

$.ajaxSetup({
    cache: true
});

function createHomepageGoogleMap(_latitude,_longitude){
    if( document.getElementById('map') != null ){
        $.getScript("assets/js/locations.js", function(){
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                scrollwheel: false,
                center: new google.maps.LatLng(_latitude, _longitude),
                mapTypeId: google.maps.MapTypeId.ROADMAP
                //styles: mapStyles
            });
            var i;
            var newMarkers = [];
            for (i = 0; i < locations.length; i++) {
                var pictureLabel = document.createElement("img");
                pictureLabel.src = locations[i][7];
                var boxText = document.createElement("div");
                infoboxOptions = {
                    content: boxText,
                    disableAutoPan: false,
                    pixelOffset: new google.maps.Size(-120, 0),
                    zIndex: null,
                    alignBottom: true,
                    boxClass: "infobox-wrapper",
                    enableEventPropagation: true,
                    closeBoxMargin: "0px 0px -8px 0px",
                    closeBoxURL: "assets/img/close-btn.png",
                    infoBoxClearance: new google.maps.Size(1, 1)
                };
                var marker = new MarkerWithLabel({
                    position: new google.maps.LatLng(locations[i][3], locations[i][4]),
                    map: map,
                    icon: 'assets/img/marker.png',
                    labelAnchor: new google.maps.Point(50, 0),
                    labelClass: "marker-style"
                });
                newMarkers.push(marker);
                boxText.innerHTML =
                    '<div class="infobox-inner">' +
                        '<div class="infobox-image" style="position: relative">' +
                        '<img src="' + locations[i][5] + '">' + '<div><span class="infobox-price">' + locations[i][2] + '</span></div>' +
                        '</div>' +
                        '<div class="infobox-description">' +
                        '<div class="infobox-title">' + locations[i][0] + '</div>' +
                        '<div class="infobox-location">' + locations[i][1] + '</div>' +
                        '</div>' +
                        '</div>';
                //Define the infobox
                newMarkers[i].infobox = new InfoBox(infoboxOptions);
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        newMarkers[i].infobox.open(map, this);
                    }
                })(marker, i));
            }
//            $('body').addClass('loaded');
//            setTimeout(function() {
//                $('body').removeClass('has-fullscreen-map');
//            }, 1000);
//            $('#map').removeClass('fade-map');
        });
    }
}