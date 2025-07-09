$(document).ready(function() {
      getRealData();
    });
    function getRealData() {
        $.ajax({
            type: "POST", 
            url: "symfonyratetrade/web/bundles/assets/php/blog.php",
            cache: false,
            success: function(text) {
                response = text;
                 $("#responsecontainer").html(response); 
            }
        });
    }
