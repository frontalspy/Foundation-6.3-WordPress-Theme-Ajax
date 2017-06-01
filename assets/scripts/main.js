/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages

                $(document).foundation(); // Foundation JavaScript

            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
            }
        },
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home page
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'about_us': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(
                document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                    UTIL.fire(classnm);
                    UTIL.fire(classnm, 'finalize');
                }
            );

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

var timer,resizeTimer;
function Utils() {}

  Utils.prototype = {
    // function to check if element is in view of window
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
      var pageTop = jQuery(window).scrollTop();
      var pageBottom = pageTop + jQuery(window).height();
      var elementTop = jQuery(element).offset().top;
      var elementBottom = elementTop + jQuery(element).height();

      if (fullyInView === true) {
        return ((pageTop < elementTop) && (pageBottom > elementBottom));
      } else {
        return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
      }
    }
  };

  var Utils = new Utils();

jQuery(document).ready(function($) {
  $('svg.animation').css('visibility', 'visible');
  $('.hamburger').click(function() {
    if ($(this).hasClass('is-active')) {
      $(this).removeClass('is-active');
    } else {
      $(this).addClass('is-active');
    }
    $(this).next().find('#top-menu').slideToggle();
  });

  $("video").bind("contextmenu",function(){
    return false;
  });

  $('img').lazyload();

  var finishedPromise = anime({
    targets: 'svg.animation path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 3500,
    delay: function(el, i) { return i * 150; },
    direction: 'alternate',
    loop: true
  });

  finishedPromise.update = function(anim) {
    $('svg.animation path').each(function (n, elem)  {
      if($(elem).css('stroke-dashoffset') === '0px') {
        $(elem).css('animation', 'fill-in 0.75s forwards');
      } else {
        $(elem).css('animation', 'fill-out 2s forwards');
      }
    });
  };
  
  if(Modernizr.history) {
    $(document).on('click','*:not(#wpadminbar) a',  function(e) {
      var url = $(this).attr('href');
      var regx = '(?:.+\/)([^#?]+)';
      var post_slug = url.match(regx)[1].split('/')[0];
      if($(this)[0].host === window.location.host && post_slug !== '') {
        e.preventDefault();
        $.ajax({
          url: WP_Web_Push.register_url,
          type: 'POST',
          data: {
            'post_slug': post_slug,
            'action': 'get_post_details'
          }
        })
        .done(function(data) {
            $('main.main').html(data);
            window.history.pushState(data, "Title", url);
            document.title = $('h1').html();
        });
      }
    });
    $(window).on('popstate', function(e) {
      var state = e.originalEvent.state;
      if(state !== null) {
        $('main.main').html(state);
        document.title = $('h1').html();
      }
    });
  }
 });
