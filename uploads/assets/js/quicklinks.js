// $(document).ready(function () {
//     // Initialize scrollUp
    // $.scrollUp({
    //     scrollName: 'scrollUp',
    //     scrollDistance: 300,
    //     scrollFrom: 'top',
    //     scrollSpeed: 300,
    //     easingType: 'linear',
    //     animation: 'fade',
    //     animationSpeed: 200,
    //     scrollTrigger: false,
    //     scrollTarget: false,
    //     scrollText: 'Scroll to top',
    //     scrollTitle: false,
    //     scrollImg: false,
    //     activeOverlay: false,
    //     zIndex: 2147483647
    // });

    // Smooth scrolling for quick links
    $(document).ready(function() {
        $('#quick-links a').on('click', function(e) {
            // e.preventDefault(); // Prevent default anchor click behavior
            var target = $(this.hash); // Get the target element
    
            // Animate the scroll to the target element
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 300, 'linear');
        });
    });
    