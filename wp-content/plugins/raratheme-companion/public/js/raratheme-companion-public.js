jQuery(document).ready(function($) {
	! function (d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0],
	        p = /^http:/.test(d.location) ? 'http' : 'https';
	    if (!d.getElementById(id)) {
	        js = d.createElement(s);
	        js.id = id;
	        js.src = p + "://platform.twitter.com/widgets.js";
	        fjs.parentNode.insertBefore(js, fjs);
	    }
	}(document, "script", "twitter-wjs");

	$(document).on('click','.expand-faq', function(e){
		e.preventDefault();
		$(this).children('i').toggleClass('fa-toggle-on');
		if(!$('.raratheme-faq-holder .inner').hasClass('open'))
		{
			$('.raratheme-faq-holder .inner').addClass('open');
			$('.raratheme-faq-holder .inner').slideDown('slow');
		}
		else{
			$('.raratheme-faq-holder .inner').removeClass('open');
			$('.raratheme-faq-holder .inner').slideUp('slow');
		}
	});
	$('.faq-answer').slideUp();
	$('.toggle').click(function(e) {
	  	e.preventDefault();
	  
	    var $this = $(this);
	  
	    if ($this.parent().hasClass('show')) {
	        $this.parent().removeClass('show');
	        $this.next().slideUp(350);
	    } else {
	        $this.parent().removeClass('show');
	        $this.next().slideUp(350);
	        $this.parent().toggleClass('show');
	        $this.next().slideToggle(350);
	    }
	});
});