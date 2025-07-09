// JavaScript Document
$(document).ready(function() {
    $('.dropdown-subs').click(function(){
			$('.sub-menu-div').toggle(500);
	});
	
	$('input[type=text]').on('keypress',function()
	{
		
		$('.location').show(100);
		
	});
	
	var maxWidth = 768;
	if($(window).width() >= maxWidth)
			{
				$(window).scroll('top', function(){
					if($(this).scrollTop() > 21)
					{
						
					$('.navbar').css('top', '0');
					$('.navbar').css('position', 'fixed');
					$('.navbar').css('z-index', '9999');
					
				
					}
					else
					{
						$('.navbar').css('top', '20px');
						$('.navbar').css('position', 'relative');
						$('.inner-page').css('margin-top', ' 20px');
						$('.banner').css('margin-top', ' 20px');
						
					}
					
				});
				
				
		}
		else
		{
			$('.navbar').css('top', '0');
		
		}
		
		
    if($(window).width() >= maxWidth)
		{
			$('.dropdown').addClass('desk-menu');
		}
	if($(window).width() < maxWidth)
	{
		$('.dropdown').removeClass('desk-menu');
	}
	
	$('#mob-menu').on('click', function() {
		
		$('.sub-menu-div').toggle(500);
	});
	
	$('#sub-mob-rates').on('click', function() {
		$('.mob').toggle(200);
	});
	$('#sub-mob-terms').on('click', function() {
		$('.mob1').toggle(300);
	});
	$('#sub-mob-calc').on('click', function() {
		$('.mob2').toggle(400);
	});
	$('#sub-mob-mortgage').on('click', function() {
		$('.mob3').toggle(500);
	});
});





