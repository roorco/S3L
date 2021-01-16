"use strict";

document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {
                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);
                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }
    var $modalBtns = Array.from(document.querySelectorAll('.modal-button'));
    if ($modalBtns.length > 0) {
        // Add a click event on each of them
        $modalBtns.forEach(function ($btn) {
            $btn.addEventListener('click', function () {
                // Get the target from the "data-target" attribute
                var target = $btn.dataset.target;
                var $target = document.getElementById(target);
                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $target.classList.add('is-active');
                var html = document.documentElement;
                html.classList.add('is-clipped');
                var modalBg = Array.from(document.querySelectorAll('.modal-background'));
                var closeBtn = Array.from(document.querySelectorAll('[data-dismiss]'));
                closeBtn.forEach(function (button) {
                    return button.addEventListener('click', function () {
                        $target.classList.remove('is-active');
                        html.classList.remove('is-clipped');
                    });
                });

                modalBg.forEach(function (modBg) {
                    return modBg.addEventListener('click', function () {
                        $target.classList.remove('is-active');
                        html.classList.remove('is-clipped');
                    });
                });
            });
        });
    }
    var scroll = new SmoothScroll('a[href*="#"]', {
        // Selectors
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)

        // Speed & Easing
        speed: 500, // Integer. How fast to complete the scroll in milliseconds
        offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
        easing: 'easeInOutCubic', // Easing pattern to use
        customEasing: function customEasing(time) {

            // Function. Custom easing pattern
            // If this is set to anything other than null, will override the easing option above

            // return <your formulate with time as a multiplier>

            // Example: easeInOut Quad
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;
        }

        // Callback API
        // before: function(anchor, toggle) {}, // Callback to run before scroll
        // after: function(anchor, toggle) {} // Callback to run after scroll
    });
});
