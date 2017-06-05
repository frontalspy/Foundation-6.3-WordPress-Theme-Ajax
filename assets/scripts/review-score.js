jQuery(document).ready(function($) { 
  
  // Animate the progress bars to the maximum when element is in view
  // isElementInView is defined in main.js
  // Maximum is defined in the php
  function animateProgress() {
    $('.review-scores .progress-meter').each(function(e, elem) {
      if (Utils.isElementInView(elem, false)) {
        $(elem).delay(e * 100).animate({width:'100%'}, 1000);
      }
    });
  }

  // Count up the final score from 0 to the max, defined by data-final-score
  function countUp() {
    var elem = $('.final-review-score');
    
    // If the element exists and is in view
    if (!elem.html() && Utils.isElementInView(elem, false)) {
      var score = $(elem).data('final-score');
      
      // Count up from countNum to the final score
      $({countNum: 0}).animate({countNum: score}, {
        duration: 1000,
        easing:'linear',
        step: function() {
          // What todo on every count
          $(elem).html((Math.floor(this.countNum)));
        },
        complete: function() {
          // Set the final score once animation is finished
          // Math.floor returns inaccurate number
          $(elem).html(score);
        }
      });
    }
  }

  // Check to see if the review score are in view on scroll
  $(window).scroll(function () {
  
  if($('.review-scores').length) {
      clearTimeout(timer);
      resizeTimer = setTimeout(animateProgress, 200);
      resizeTimer = setTimeout(countUp, 200);
    }
  });
  
  if($('.review-scores').length) {
    resizeTimer = setTimeout(animateProgress, 200);  
    resizeTimer = setTimeout(countUp, 200);
  }
});