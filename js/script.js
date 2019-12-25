// Hamburger Icon
$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.hiddenSidebar').toggleClass('expanded');
	});
});

// $(".hiddenSidebar").click(function() {
//   $(this).toggleClass("expanded");
// });