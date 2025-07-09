$(document).ready(function() {
 
	// For the Second level Dropdown menu, highlight the parent	
	$( ".dropdown-menu" )
	.mouseenter(function() {
		$(this).parent('li').addClass('active');
	})
	.mouseleave(function() {
		$(this).parent('li').removeClass('active');
	});
 
});
document.addEventListener("contextmenu",e=>{e.preventDefault()}),$("input[name='yourinput']").keypress(function(e){17==e.keyCode&&e.preventDefault()}),$(document).keypress(function(e){"13"==e.which&&e.preventDefault()}),document.addEventListener("keydown",function(e){e.ctrlKey&&e.shiftKey&&"I"===e.key&&e.preventDefault()});
