$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 18) {
    	$('nav').addClass('affix');
    }
    else {
        $('nav').removeClass('affix');
    }
  });
});