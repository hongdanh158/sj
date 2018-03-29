$(document).ready(function() {
	heightDateArticle();
	var html = '<ul class="nav-mobile">' + $('.main-nav .nav').html() + '</ul>';
	$('.mobile-wrap-menu .content').html(html);
	$(".header .nav li").each(function(){
      if ($(this).has("ul").length) {
        $(this).find('a').eq(0).append('<span class="icon down"><i class="fas fa-angle-down"></i></span>');
        $(this).find('a').eq(0).addClass('hassub');
      };
    });
	$('.header .nav li').hover(
	    function() {
	        $('.header .nav li').removeClass('activeX');
	        $(this).find('ul').eq(0).stop(false, true).slideDown(200);
	        $(this).parent().css('overflow', 'visible');
	    },
	    function() {
	        $('.header .nav li').removeClass('activeX');
	        $(this).find('ul').eq(0).stop(false, true).slideUp(200);
	    }
    );

    //Mobile menu script
	if ($('.nav-mobile').length) {
		headHmtl = '<div class="head"><span class="icon closeSub"><i class="fa fa-arrow-left"></i></span><span class="head-text"></span></div>';
	    $(".nav-mobile li").each(function (index, obj) {
	      if ($(this).has("ul").length) {
	      	$(this).find('ul').eq(0).wrap('<div class="sub-menu"></div>').before(headHmtl);
	      	var headText = $(this).find('a').eq(0).html();
	      	$(this).find('.head-text').html(headText);
	        $(this).find('a').eq(0).addClass('hassub').attr('href', 'javascript:void(0)');
	      };
	    });
	    var html = '<ul class="lang">' + $('.top-menu .language ul').html() +  '</ul>';
	    $('.mobile-wrap-menu > .head').append(html);
	    $('.nav-mobile li a').click(function(event) {
	    	$(this).closest('li').find('div').eq(0).attr('visible', 'true');
	    });
	    $('.mobile-wrap-menu .closeSub, .sub-menu .head .head-text').click(function(event) {
	    	$(this).closest('.sub-menu').attr('visible', 'false');
	    });
	    $('.trigger-menu').click(function() {
	    	$('.three-bars-icon').addClass('close');
	    	$('.slidebar').addClass('show');
	    	addOverlay('body');
	    });
	    $('.closeSidebar').click(function(event) {
	    	closeSlidebar();
	    });
	    $('body').on('click', '.overlay', function(event) {
	    	event.preventDefault();
	    	closeSlidebar();
	    });
	}
	function closeSlidebar() {
		if ($('.slidebar').hasClass('show')) {
    		$('.slidebar').removeClass('show');
    	}
    	if ($('.three-bars-icon').hasClass('close')) {
    		$('.three-bars-icon').removeClass('close');
    	}
    	$('.sub-menu').attr('visible', 'false');
    	removeOverlay('body');
	}
	//End Mobile menu script
	function addOverlay(parent) {
    	if (!$(parent + ' .overlay').length) {
  			$(parent).prepend('<div class="overlay"></div>');
  		}
    }
    function removeOverlay(parent) {
    	if ($(parent + ' .overlay').length) {
  			$(parent + ' .overlay').remove();
  		}
    }
	function setCookie(name,value,days) {
	    var expires = "";
	    if (days) {
	        var date = new Date();
	        date.setTime(date.getTime() + (days*24*60*60*1000));
	        expires = "; expires=" + date.toUTCString();
	    }
	    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	}
	function getCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}
	function eraseCookie(name) {   
	    document.cookie = name+'=; Max-Age=-99999999;';  
	}
	function getScrollBarWidth () {
		var inner          = document.createElement('p');
		inner.style.width  = "100%";
		inner.style.height = "200px";
		
		var outer = document.createElement('div');
		outer.style.position   = "absolute";
		outer.style.top        = "0px";
		outer.style.left       = "0px";
		outer.style.visibility = "hidden";
		outer.style.width      = "200px";
		outer.style.height     = "150px";
		outer.style.overflow   = "hidden";
		outer.appendChild (inner);

		document.body.appendChild (outer);
		var w1 = inner.offsetWidth;
		outer.style.overflow = 'scroll';
		var w2 = inner.offsetWidth;
		if (w1 == w2) w2 = outer.clientWidth;
		document.body.removeChild (outer);
		return (w1 - w2);
	};
	
	$(window).scroll(function(){
	    if ($(this).scrollTop() > 100) {
	      $('.scrollToTop').fadeIn();
	    } else {
	      $('.scrollToTop').fadeOut();
	    }
	});
	
	//Set height date box article.
   	function heightDateArticle() {
   		if ($('.list-article .item .col.date .box a').length) {
   			if ($(window).width() > 600) {
				$('.list-article .item .col.date .box a').height($('.list-article .item .col.date .box a').width())
   			}
   			else {
   				$('.list-article .item .col.date .box a').height($('.list-article .item .col.date .box a').width()/2)
   			}
	    	
	    }
	    if ($('.list-volume .item .col.number .box').length) {
	    	$('.list-volume .item .col.number .box').height($('.list-volume .item .col.number .box').width())
	    }
   	}

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html').animate({scrollTop : 0},800);
	});
	$(window).bind('resize', function(e){
	    window.resizeEvt;
	    $(window).resize(function(){
	        clearTimeout(window.resizeEvt);
	        window.resizeEvt = setTimeout(function(){
	        	closeSlidebar();
	        	$('.sub-menu').attr('visible', 'false');
	        	heightDateArticle()
	        }, 100);
	    });
	});
});