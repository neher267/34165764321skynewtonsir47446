// image to svg
$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
});

$(document).ready(function() {
    // $('.pod-page-loader-bg').hide();
});


// $(document).ready(function() {
//     //anchor scroll
//     $('a[href*="#"]:not([href="#"])').click(function() {
//         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
//             || location.hostname == this.hostname) {
//
//             var target = $(this.hash);
//             target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//             if (target.length) {
//                 $('html,body').animate({scrollTop: target.offset().top}, 500);
//                 return false;
//             }
//         }
//     });
// })


// $('.timepicker').timepicker({
//     minuteStep: 1,
//     maxHours: 24,
//     format: 'HH:mm',
//     // format: 'LT',
//     // defaultTime: false,
//     defaultTime: '00:00',
//     showMeridian: false,
//     showSeconds: false,
//     // disableFocus: true,
//     // explicitMode: true,
// });


// $(window).resize(function(){
//     $(".sweet-alert").css("margin-top",-$(".sweet-alert").outerHeight()/2);
// });