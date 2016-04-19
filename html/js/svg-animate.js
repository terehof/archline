/**
 * Created by Yegor on 09.04.2016.
 */

document.addEventListener('DOMContentLoaded', function() {

    // Overwriting defaults
    var svg = new Walkway({
        selector: '#svg',
        duration: '5000',
        // can pass in a function or a string like 'easeOutQuint'
        easing: function (t) {
            return t * t;
        }
    });

    svg.draw();
});