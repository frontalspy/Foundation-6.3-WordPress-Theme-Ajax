jQuery(document).ready(function($) {
  
  // If the html content has a h1 tag use this as the title
  function checkTitle(elem) {
    if($(elem).html()) {
      document.title = $('h1').html();
    } else {
      document.title = $('title').html();
    }
  }
  
  // Ajax call to get a script and cache it
  $.cachedScript = function( url, options ) {
    options = $.extend( options || {}, {
      dataType: "script",
      cache: true,
      url: url
    });
    return jQuery.ajax( options );
  };
  
  // Main bulk of ajax call depends on if browser supports history api.
  // Use Modernizr to check
  if(Modernizr.history) {
    
    // Ajax load pages on all inks other than the WPAdmin Bar
    $(document).on('click','*:not(#wpadminbar) a',  function(e) {
      // Get the URL from the href attribute
      var url = $(this).attr('href');
      
      // Regex to grab only the post slug, after the /
      //var regx = '(?:.+\/)([^#?]+)';
      //var post_slug = url.match(regx)[1].split('/')[0];
      
      // If the link is from pagination
      //var paged = $(this).data('paged');
      
      // Only Ajax load if the link is internal
      //if($(this)[0].host === window.location.host && post_slug !== '' && url.indexOf('wp-admin') < 0) {
      if($(this)[0].host === window.location.host && url.indexOf('wp-admin') < 0) {
        
        // Prevent the default click acion
        e.preventDefault();
        $.ajax({
          // Get the admin-ajax.php location placed in the document
          // Refer to lib/setup
          //url: ajaxadmin.ajaxurl,
          url: url,
          type: 'GET',
          dataType: 'html',
          data: {
//            // Pass post_slug and paged to the function get_post_details
//            'post_slug': post_slug,
//            'paged' : paged,
//            'action': 'get_post_details',
//            'nonce' : ajaxadmin.nonce
          },
          beforeSend: function(){
              // When the ajax returns a 200 start the loading animation
              $('#loader .progress-meter').animate({width:'90%'}, 3000);
          }
        })
        .done(function(data) {
          
          // Replace the content of the main element with the main from the get_post_details
          //$('main.main').html(data);
          $('main.main').html($(data).find('main.main').html());
          
          // Scroll the window to the top of the page
          $(window).scrollTop(0);
          
          // Using the history api, set the current state and url to the new page
          window.history.pushState($(data).find('main.main').html(), "Title", url);
          
          // Change the title
          checkTitle($('h1'));
          
          // Finish the loading animation once the ajax has finished loading
          $('#loader .progress-meter').animate({width:'100%'}).finish().fadeOut('fast', function() {
            $(this).css({width:'0%'});
          }).fadeIn('fast');
          
          // If the page is a review, load and execute the review-scores script
          if($('.review-scores').length) {
            $.cachedScript(window.location.origin + '/tester/wp-content/themes/Foundation-sage/dist/scripts/review-score.js');
          }
        });
      }
    });
    
    // Ajax loading for search submit
    $(document).on('submit','form.site-search',  function(e) {
      
      // Get the value from the input
      var search = $(this).find('input').val();
      
      // Get the action url and append the wordpress search formatting
      var url = $(this).attr('action')  + 'search/' + search;
      e.preventDefault();
      $.ajax({
        url: ajaxadmin.ajaxurl,
        type: 'GET',
        data: {
          // Pass s (required by WordPress) to the function ajax_search
          's': search,
          'action': 'ajax_search'
        }
      })
      .done(function(data) {
        
        // Replace the content of the main element with the main from the ajax_search
        $('main.main').html(data);
        
        // Using the history api, set the current state and url to the new page
        window.history.pushState(data, "Title", url);
        
        // Check Title
        checkTitle($('h1'));
      });
    });
    
    // When trying to change page states (bakwards or forwards) use the history api
    $(window).on('popstate', function(e) {
      
      // Call the previous/next state
      var state = e.originalEvent.state;
      if(state !== null) {
        
        // Replace the content of the main element with the main from the called state
        $('main.main').html(state);
        
        // Check Title
        checkTitle($('h1'));
      }
    });
  }
});