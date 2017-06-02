jQuery(document).ready(function(){jQuery(".search-complete input").autocomplete({source:"../wp-content/themes/Foundation-Sage/templates/mal-connect.php",minLength:2,select:function(e,t){jQuery(".search-title input").val(t.item.label),jQuery(".search-output input").val(t.item.score)}})});
//# sourceMappingURL=mal-connect.js.map
