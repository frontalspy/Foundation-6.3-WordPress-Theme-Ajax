jQuery(document).ready(function(t){function a(a){t(a).html()?document.title=t("h1").html():document.title="Test Website"}Modernizr.history&&(t(document).on("click","*:not(#wpadminbar) a",function(n){var i=t(this).attr("href"),e="(?:.+/)([^#?]+)",o=i.match(e)[1].split("/")[0],s=t(this).data("paged");t(this)[0].host!==window.location.host&&""===o||(n.preventDefault(),t.ajax({url:ajaxadmin.ajaxurl,type:"POST",data:{post_slug:o,paged:s,action:"get_post_details"}}).done(function(n){console.log(n),t("main.main").html(n),window.history.pushState(n,"Title",i),a(t("h1"))}))}),t(document).on("submit","form.site-search",function(n){var i=t(this).find("input").val(),e=t(this).attr("action")+"search/"+i;n.preventDefault(),t.ajax({url:ajaxadmin.ajaxurl,type:"get",data:{s:i,action:"ajax_search"}}).done(function(n){t("main.main").html(n),window.history.pushState(n,"Title",e),a(t("h1"))})}),t(window).on("popstate",function(n){var i=n.originalEvent.state;null!==i&&(t("main.main").html(i),a(t("h1")))}))});