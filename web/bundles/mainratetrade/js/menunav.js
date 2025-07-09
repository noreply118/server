     $(document).on('click', '.toggle_fixing', function(e) {
            e.preventDefault();
            if ($('#main_navbar').hasClass('navbar-fixed-top')) {
                $('#main_navbar').toggleClass('navbar-fixed-bottom navbar-fixed-top');
                $(this).children('i').toggleClass('fa-chevron-down fa-chevron-up');
            } else {
                $('#main_navbar').toggleClass('navbar-fixed-bottom');
                $(this).children('i').toggleClass('fa-chevron-down fa-chevron-up');
                if ($('#main_navbar').parent('div').hasClass('container')) $('#main_navbar').children('div').addClass('container').removeClass('container-fluid');
                else if ($('#main_navbar').parent('div').hasClass('container-fluid')) $('#main_navbar').children('div').addClass('container-fluid').removeClass('container');
                FixMegaNavbar(navHeight);
            }
            if ($('#main_navbar').hasClass('navbar-fixed-top')) {$('body').css({'margin-top': $('#main_navbar').height()+'px', 'margin-bottom': ''});}
            else if ($('#main_navbar').hasClass('navbar-fixed-bottom')) {$('body').css({'margin-bottom': $('#main_navbar').height()+'px', 'margin-top': ''});}
        })
        //End navbar toggle fix top bottom

    	//Start Fix MegaNavbar on scroll page
    	var navHeight = $('#main_navbar').offset().top;
    	FixMegaNavbar(navHeight);
    	$(window).bind('scroll', function() {FixMegaNavbar(navHeight);});

    	function FixMegaNavbar(navHeight) {
    	    if (!$('#main_navbar').hasClass('navbar-fixed-bottom')) {
    	        if ($(window).scrollTop() > navHeight) {
    	            $('#main_navbar').addClass('navbar-fixed-top')
    	            $('body').css({'margin-top': $('#main_navbar').height()+'px'});
    	            if ($('#main_navbar').parent('div').hasClass('container')) $('#main_navbar').children('div').addClass('container').removeClass('container-fluid');
    	            else if ($('#main_navbar').parent('div').hasClass('container-fluid')) $('#main_navbar').children('div').addClass('container-fluid').removeClass('container');
    	        }
    	        else {
    	            $('#main_navbar').removeClass('navbar-fixed-top');
    	            $('#main_navbar').children('div').addClass('container-fluid').removeClass('container');
    	            $('body').css({'margin-top': ''});
    	        }
    	    }
    	}
    	//End Fix MegaNavbar on scroll page

    	//Next code used to prevent unexpected menu close when using some components (like accordion, tabs, forms, etc), please add the next JavaScript to your page
    	$( window ).load(function() {
    	    $(document).on('click', '.navbar .dropdown-menu', function(e) {e.stopPropagation();});

            //Tabs
            $(function() {
                var active = $('a[data-toggle="tab"]').parents('.active').length;
                var tabClicked = false;

                // Closes current active tab (toggle and pane):
                var close = function() {
                    $('a[data-toggle="tab"]').parent().removeClass('active');
                    $('.tab-pane.active').removeClass('active');
                    active = false;
                }

                // Closing active tab on clicking on toggle:
                $('[data-toggle=tab]').click(function(){
                    if ($(this).parent().hasClass('active')){$($(this).attr("href")).toggleClass('active'); active = false;}
                    else {tabClicked = true; active = this;}
                });

                // Closing active tab on clicking outside tab context (toggle and pane):
                $(document).on('click.bs.tab.data-api', function(event) {
                    if(active && !tabClicked && !$(event.target).closest('.tab-pane.active').length) {close();}
                    tabClicked = false;
                });

                // Closing active tab on ESC key release:
                $(document).keyup(function(e){
                    if(active && e.keyCode === 27) {close();}
                });
            });


    	});