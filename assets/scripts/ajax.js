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
    $(document).on('click','a',  function(e) {
      // Get the URL from the href attribute for the ajax call
      var url = $(this).attr('href');
      
      // Only Ajax load if the link is internal
      if($(this)[0].host === window.location.host && url.indexOf('wp-admin') < 0 && $(this).attr('target') !== '_blank') {
        
        // Prevent the default click acion
        e.preventDefault();
        $.ajax({
          // Get the nonce identifier ID location placed in the document
          // Refer to lib/setup
          url: url,
          type: 'GET',
          dataType: 'html',
          data: {
            // Set the nonce as a vairable as a check on the base.php
            'nonce' : ajaxadmin.nonce
          },
          beforeSend: function(){
              // When the ajax call begins, start the loading bar animation
              $('#loader .progress-meter').animate({width:'40%'}, 2000);
          }
        })
        .done(function(data) {
          var regx = '(?:.+\/)([^#?]+)';
          var post_slug = url.match(regx)[1].split('/')[0];
          // When the ajax returns a 200 progress the animation          
          $('#loader .progress-meter').animate({width:'75%'}, 3000);
          
          // Replace the content of the main element with the main from the get_post_details
          //$('main.main').html(data);
          $('main.main').html(data);
          
          // Scroll the window to the top of the page
          $(window).scrollTop(0);
          
          // Using the history api, set the current state and url to the new page
          window.history.pushState(data, "Title", url);
          
          // Change the title
          checkTitle($('h1'));
          
          // Re-initialise Foundation Equalizer for equal height
          Foundation.reInit($('main.main'));
          
          // Finish the loading animation once the ajax has finished loading
          $('#loader .progress-meter').animate({width:'100%'}).finish().fadeOut('fast', function() {
            $(this).css({width:'0%'});
          }).fadeIn('fast');
          
          if($('#wpadminbar').length) {
            $.ajax({
                  type: 'GET',
                  dataType: "text",
                  url: ajaxadmin.ajaxurl,
                  data: {
                    'post_slug': post_slug,
                    'action': 'get_admin_bar'
                  }
            }).done(function(data) {
              if($('#wpadminbar #wp-admin-bar-edit').length) {
                $('#wpadminbar #wp-admin-bar-edit').html(data);
              } else {
                $('#wpadminbar .ab-top-menu').append('<li id="wp-admin-bar-edit">' + data + '</li>');
              }
             });
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
        dataType: 'html',
        data: {
          // Pass s (required by WordPress) to the function ajax_search
          // 
          's': search,
          'nonce' : ajaxadmin.nonce,
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
        
        // Re-initialise Foundation Equalizer for equal height
        Foundation.reInit($('main.main'));
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
