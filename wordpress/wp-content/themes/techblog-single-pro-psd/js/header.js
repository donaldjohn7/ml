$(document).ready(function(){
	//TAB AUTO SCROLL ANIMATION!!!
	// $(window).scroll(function(){
		// var offset = $(this).scrollTop();
		// // console.log(offset);
		// if(offset > 103){
		// 	$('#logowrap').css('position', 'absolute');
		// 	$('#logowrap').css('z-index', '100');
		// 	$('#logowrap').css('top', offset);
		// 	$('#logowrap').css('width', $('body').width());
		// }else if(offset == 103){
		// 	$('#logowrap').css('position', 'static');
		// 	$('#logowrap').css('z-index', '100');
		// 	$('#logowrap').css('width', 'auto');
		// }
		var bar = $('#logowrap').clone();

	    var top = bar.css('top');
	    $(window).scroll(function() {
	        if($(this).scrollTop() > 103) {
	        	$(bar).css('visibility', 'visible');
	        	// $(bar).css('position', 'absolute');
	        	// $(bar).css('z-index', '1000');
	        	$(bar).css('width', $('body').css('width'));
	        	$(bar)[0].id = 'logowrap-copy';
	        	$(bar).appendTo('body');
	            // bar.stop().animate({'top' : $('body').scrollTop()+27}, 0);
	        } else {
	        	// $('#logowrap').css('position', 'static');
	         	// bar.stop().animate({'top' : top}, 0);
	        	$(bar).css('visibility', 'hidden');
	        }
	    });
	// })
});