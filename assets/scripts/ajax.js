jQuery(document).ready(function($) {
  function checkTitle(elem) {
    if($(elem).html()) {
      document.title = $('h1').html();
    } else {
      document.title = "Test Website";
    }
  }
  if(Modernizr.history) {
    $(document).on('click','*:not(#wpadminbar) a',  function(e) {
      var url = $(this).attr('href');
      var regx = '(?:.+\/)([^#?]+)';
      var post_slug = url.match(regx)[1].split('/')[0];
      var paged = $(this).data('paged');
      if($(this)[0].host === window.location.host && post_slug !== '') {
        e.preventDefault();
        $.ajax({
          url: ajaxadmin.ajaxurl,
          type: 'POST',
          data: {
            'post_slug': post_slug,
            'paged' : paged,
            'action': 'get_post_details'
          }
        })
        .done(function(data) {
            console.log(data);
            $('main.main').html(data);
            window.history.pushState(data, "Title", url);
            checkTitle($('h1'));
        });
      }
    });
    $(document).on('submit','form.site-search',  function(e) {
      var search = $(this).find('input').val();
      var url = $(this).attr('action')  + 'search/' + search;
      e.preventDefault();
      $.ajax({
        url: ajaxadmin.ajaxurl,
        type: 'get',
        data: {
          's': search,
          'action': 'ajax_search'
        }
      })
      .done(function(data) {
          $('main.main').html(data);
          window.history.pushState(data, "Title", url);
          checkTitle($('h1'));
      });
    });
    $(window).on('popstate', function(e) {
      var state = e.originalEvent.state;
      if(state !== null) {
        $('main.main').html(state);
        checkTitle($('h1'));
      }
    });
  }
});