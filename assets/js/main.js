$(document).ready(function () {

    "use strict";

    // Preloader

    $(window).load(function () { // makes sure the whole site is loaded
        $('.preload.loader-frame').fadeOut(); // will first fade out the loading animation
        $('.preload').fadeOut('auto');
        // will fade out the white DIV that covers the website.
        $('body').css({
            'overflow': 'visible'
        });
    })

    // Animated typing text

    $(".animated-text").typed({
        strings: [
            "Le bon choix",
            "Changer ta vie",
            "Créer votre future",
            "Atteindre votre objectif"
        ],
        typeSpeed: 40,
        loop: true,
    });

    // PopUp Effect

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

    $.extend(true, $.magnificPopup.defaults, {
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'http://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });

    // Owl Clients

    $("#owl-clients").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

    // Owl Testimonils

    $("#owl-testimonials").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 600,
        paginationSpeed: 400,
        singleItem: true,
        transitionStyle: "goDown",
        autoPlay: true
    });

    // Snazzy Maps
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(33.5912284, -7.5210958, 17.18), // Casablanca

            // Disables the default Google Maps UI components
            disableDefaultUI: true,
            scrollwheel: false,

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "stylers": [{
                    "hue": "#f23c7e"
                }, {
                    "saturation": 150
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                    "lightness": 50
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var myLatLng = new google.maps.LatLng(33.592501, -7.522318);
        // Custom Map Marker Icon - Customize the map-marker.png file to customize your icon
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }

});


$(document).ready(function () {
    // Show or hide the sticky footer button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // Animate the scroll to top
    $('.go-top').click(function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0
        }, 300);
    })
});


$('.img-pop-up').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
$('.img-pop-un').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});

$('.img-pop-deux').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});

$('.img-pop-trois').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});

$('.img-pop-quatre').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
$('.img-pop-cinq').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});