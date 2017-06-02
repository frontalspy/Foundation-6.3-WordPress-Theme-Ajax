jQuery(document).ready(function($) { 
  function animateProgress() {
    $('.review-scores .progress-meter').each(function(e, elem) {
      if (Utils.isElementInView(elem, false)) {
        $(elem).delay(e * 100).animate({width:'100%'}, 1000);
      }
    });
  }
  
  function countUp() {
    var elem = $('.final-review-score');
    if (!elem.html() && Utils.isElementInView(elem, false)) {
      var score = $(elem).data('final-score');
      $({countNum: 0}).animate({countNum: score}, {
        duration: 1000,
        easing:'linear',
        step: function() {
          // What todo on every count
          $(elem).html((Math.floor(this.countNum)));
        },
        complete: function() {
          $(elem).html(score);
        }
      });
    }
  }
  
  $(window).scroll(function () {
    clearTimeout(timer);
    resizeTimer = setTimeout(animateProgress, 200);
    resizeTimer = setTimeout(countUp, 200);
  });

  resizeTimer = setTimeout(animateProgress, 200);  
  resizeTimer = setTimeout(countUp, 200);
});