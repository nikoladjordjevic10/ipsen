// Navigation current link
$(".nav a.main-link").each(function(){
	if(this.href == window.location.href){
		$(this).toggleClass('current disabled');
	}
})

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

// singleEquipment Page Images Slider
$(document).ready(function() {
	$(window).resize(function(){
    $(".imageBig img").css("transform", "translateX(0px)");
    $(".imagesNav img").removeClass("selected");
    $(".imagesNav img").first().addClass("selected");
  });
  $(".imagesNav").on('click', 'img', function() {
    var indexImg = $(this).parent().index();
    var imgWidth = $(".imageBig img").width() + 16;
    $(".imageBig img").css("transform", "translateX("+indexImg * -imgWidth+"px)");
    $(".imagesNav img").removeClass("selected");
    $(this).addClass("selected");
  });
});