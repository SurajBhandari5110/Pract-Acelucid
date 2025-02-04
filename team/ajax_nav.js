var nav = nav ||  {
	isInit : false,
	firstLoad : true,
	html : '',
	isNotMobile : false,
	isHystory : true,
	endAnim : false,
	loadDuration :6500,
	//loadDuration :1,
	endLoad : false,
	isPlaying : false,
	pageTitle : '',
	isHome : true,
	header : null,
	scrollStart : 0,
	isHomeFirst : true,
	isLoading : false,
	heightHomeHero : 513,
	langMenu : '',
	videoAlreadyPlay : false
}

nav.init = function (){
	nav.chekMq();
	nav.modalBg = jQuery('div.modalBg');

	nav.centerGif();
	if (nav.isHomePage()){
		nav.setBgColor();
		nav.scrollTop();

	}else{
		nav.loadDuration = 1000;
		nav.changeModalbg()
	}
	nav.setLoading();

	nav.pageTitle = jQuery('title').text();
	if (nav.firstLoad){
		nav.setFirstactive();
	}


	if (nav.isNotMobile){
		/* CHECK HISTORY COMPATIBILITY */
		if (typeof history.pushState === 'undefined')
			nav.isHystory = false;
		/* CREATE gblVideo DIV*/
		if (nav.modalBg.length < 1){
		/*	jQuery('body').append('<div class="modalBg closed"></div>');
			nav.modalBg = jQuery('div.modalBg');*/
		}

		nav.html = jQuery('<div>');
		nav.replaceImg('body');

		if (!nav.isInit && nav.isHystory){
			jQuery(document).on( 'click','a.load-ajax', function(event){
				event.preventDefault();
				var url = jQuery(this).attr('href');
				if (!jQuery(this).parent().hasClass('active') && !nav.isLoading && document.URL != url) {


					nav.open(url);
					nav.activeNavigation(this);
					if (nav.isHomePage()){
						gblVideo.closeOnChangeVideo();
					}
					if (nav.isHystory){
						history.pushState({url : url}, nav.pageTitle,url);
					}
				}
			});

		}

	if (isiPad){
		jQuery('.scroll-to-skip').remove();
	}

	}else{
		jQuery('div.modalBg').hide();
		jQuery('.homeheader .bgi')
			.css('background-image','url('+jQuery('.homeheader .bgi').data('768')+')')
			.css('background-size','cover').css('background-position', 'center center');
		jQuery('.homeheader > div').height(200)
		jQuery('#launcher_video').remove();
		jQuery('a.navBtn').click(function(){
			jQuery('#nav-main').toggleClass('open');
		})
	}
	jQuery(document).on('click', 'div.toTop a', function(){
		jQuery('html, body').finish().animate({
			scrollTop:jQuery('body, html').offset().top
		},650, 'easeInExpo');
	});
}


nav.chekMq = function(){
	nav.isNotMobile = false;
	if (Modernizr.mq('(min-width: 768px)'))
		nav.isNotMobile = '768';
	if (Modernizr.mq('(min-width: 1200px)'))
		nav.isNotMobile = '1200';

}

nav.isHomePage = function() {
	return jQuery('#page').hasClass('home');
}

nav.setBgColor = function (){
	if (!nav.isHomePage()){
		nav.modalBg.css('background-color', '#2d2a2b');
	}else{
		nav.modalBg.css('background-color', '#FFF');
	}
}
nav.setLoading = function (){
	setTimeout(function(){
		nav.endAnim = true;
		if (nav.endLoad){
			nav.close();
		}
	}, nav.loadDuration);
}

nav.activeNavigation = function(_element){
	jQuery('#nav-main').find('.active').removeClass('active');
	jQuery(_element).closest('li').addClass('active');
	jQuery(jQuery('a[href="'+jQuery(_element).attr('href')+'"]')).closest('li').addClass('active');
}
nav.setFirstactive = function(){
	jQuery('#nav-main .active').removeClass('active');
	jQuery(jQuery('#nav-main a[href="'+document.URL+'"]')).closest('li').addClass('active');
}

nav.open = function(url){
	nav.isLoading = true;
	nav.modalBg.css('top', gblVideo.winHeight + 120);
	jQuery('img', nav.modalBg).css('top',gblVideo.winHeight);
	if (nav.isHomePage()){

		jQuery('.homeheader').finish().animate({height : 0}, 600,'easeOutExpo');
	}
	nav.scrollStart = jQuery(window).scrollTop();

	// if (nav.scrollStart == 0){
		jQuery('#page').animate({marginTop : jQuery(window).height()+300}, 800,'easeInExpo');
		nav.modalBg.removeClass('closed');
		nav.modalBg.addClass('opened');
		nav.modalBg.show();
		nav.isOpen = true;
		setTimeout(function (){
			nav.modalBg.animate({top :35}, 800,'easeOutExpo', function(){
				nav.load(url);
			});nav.scrollTop();
			setTimeout(function(){
				jQuery('img', nav.modalBg).finish().animate({top : gblVideo.winHeight/2}, 800,'easeOutExpo');
			}

			,200);
		},500);
	// }

};

nav.close = function(){
	jQuery('img', nav.modalBg).animate({top : gblVideo.winHeight}, 800,'easeInExpo');
	setTimeout(function(){
			nav.modalBg.finish().animate({top : 2000}, 800,'easeInExpo', function(){
			nav.modalBg.removeClass('closed');
			nav.modalBg.addClass('opened');
			nav.isOpen = true
			nav.changeModalbg();
		});
	}
	,200);
	/* HIDE VIDEO if Homepage and is not first laod or the video is already placed */
	if (nav.isHomePage() && (!nav.firstLoad  || nav.videoAlreadyPlay)){
		jQuery('.scroll-to-skip').removeClass('');
		jQuery('.homeheader video').css('top',-gblVideo.video.h);
		jQuery('.homeheader > div').css('height',0);
		jQuery('.homeheader').css('height',0);

	}else if (nav.isHomePage() && !nav.videoAlreadyPlay){
		/*else if firsload and not played set cookie */
			nav.setCookie('v_p_a', 'true',360);

	}
	setTimeout(function (){
		nav.scrollStart = jQuery(window).scrollTop();
		if (nav.scrollStart == 0){
			jQuery('#page').finish().animate({marginTop : 0}, 800,'easeOutExpo');
		}else{
			jQuery('#page').css('margin-top',0);
		}
		jQuery('#page').animate({marginTop : 0}, 800,'easeOutExpo');
		if (nav.firstLoad && isiPad)
			jQuery('.homeheader div.newLogo').css('margin-top', 150);
		else
			jQuery('.homeheader div.newLogo').css('margin-top', -500);

		if (nav.isHomePage() && (!nav.firstLoad  || nav.videoAlreadyPlay)){
			setTimeout(function(){
				jQuery('.homeheader > div').finish().animate({height : 513, top:0}, 2000,'easeOutExpo');
				jQuery('.homeheader').finish().animate({height : 513}, 2000,'easeOutExpo');
				setTimeout(function(){
					jQuery('.homeheader div.newLogo').finish().animate({marginTop : 150}, 1000,'easeOutExpo');
				},100);

				gblVideo.loadVideo(false);
				jQuery('.scroll-to-skip').addClass('play');

			},350)

		}
		if (nav.isHomePage() && video && nav.firstLoad && !nav.videoAlreadyPlay){
			gblVideo.waiting = setInterval(function(){
				nav.isPlaying = true;
				//gblVideo.openVideo();
				jQuery(video).finish().animate({top : 0}, 0,'easeOutExpo');
				gblVideo.play();
			}, 400)
		}

		caseSlider.init();

		setTimeout(function(){
			nav.isLoading = false;

			caseSlider.setAutoplay();
			nav.wayLaunch('.anim');
		}, 500);
	}, 400);

};

nav.load = function( url){

	nav.firstLoad = false;

	jQuery.ajax({
		url: url,
		dataType: "html"
	}).done(function(responseText) {

		var _element = jQuery.parseHTML( responseText );
		nav.pageTitle = jQuery("<div>").append(_element).find('title');

		jQuery('title').text(jQuery(nav.pageTitle).text());
		nav.html = jQuery("<div>").append(_element).find('#page');
		nav.langMenu = jQuery("<div>").append(_element).find('.my-head');
		jQuery('.my-head').replaceWith(nav.langMenu);

		if (jQuery('.homeheader').length == 0){
			nav.header = jQuery("<div>").append(_element).find('.homeheader');
			jQuery('header').prepend(nav.header);
			nav.replaceImg('header');
		}
		jQuery('.scroll-to-skip').addClass('play');
		nav.replaceImg(nav.html);
		nav.setFirstactive();
	}).complete(function( jqXHR, status ) {
		jQuery('#page').replaceWith(nav.html);
		nav.openLoad();
		nav.reload();
		nav.close();
	});

}
/*
nav.wayLaunch = function(_selector){
	console.log('way')
	jQuery(_selector).each(function(){
		var _offset = jQuery(this).data('offset');
		if (_offset == undefined){
			_offset = '45%';
		}
      jQuery(this).waypoint(function(direction) {
        jQuery('.move').removeClass('move');
        jQuery(this).addClass("go");
        if (jQuery(this).hasClass('parallax')){
        	jQuery(this).addClass("move");
        	jQuery('.parallax', this).addClass("move");
        }


      },{ offset:_offset});
  });
}*/
nav.wayLaunch = function(_selector){
	jQuery(_selector).each(function(){
		var _offset = jQuery(this).data('offset');
		if (_offset == undefined){
			_offset = '45%';
		}
      var item= jQuery(this)
      item.waypoint(function(direction) {
        item.addClass("go");
        this.destroy()
      },{ offset:_offset});
  });
}

nav.scrollTop = function (){
	jQuery('html, body').finish().animate({
		scrollTop:jQuery('body, html').offset().top
	},0);
}


window.onpopstate = function(event){
	nav.back(event);
}

nav.back = function (event){

	if (event.state != null){
		nav.open(event.state.url);
	}else if (!nav.isHomeFirst){
		nav.open(document.url);
	}else
	{
		nav.isHomeFirst = false;
	}
	nav.setFirstactive();
}



nav.openLoad = function(){
	nav.scrollStart = jQuery(window).scrollTop();
	if (nav.scrollStart == 0 && nav.isNotMobile){
		jQuery('#page').css({marginTop : gblVideo.winHeight});
	}
};



nav.replaceImg = function(_element){
	if (nav.isNotMobile){

			jQuery('img',_element).each(function(){
				if (!jQuery(this).hasClass('feedGallery')){
					var _url = jQuery(this).data(nav.isNotMobile);
					if (_url != 'undefined')
						jQuery(this).attr('src', _url);
				}
				/*else{
					jQuery(this).parent().prepend('<div class="loading" style="height: 600px; background-color: #ffcf01;position: absolute;width:100%;"></div>')
				}*/
			});
			jQuery('div.bgi',_element).each(function(){
				if (!jQuery(this).hasClass('feedGallery')){
					var _url = jQuery(this).data(nav.isNotMobile);
					if (_url != 'undefined')
						jQuery(this).css('background-image', 'url(' + _url + ')');
				}
			})

	}
};

nav.centerGif = function(){
/*	var width = jQuery('.modalBg img').width();
	var height = jQuery('.modalBg img').height();
	jQuery('.modalBg img').css('top',(jQuery(window).height() - height)/2 );
	jQuery('.modalBg img').css('left',(jQuery(window).width() - width)/2 );*/
}
nav.changeModalbg = function(){
	nav.modalBg.css('background-color', '#2d2a2b');
	jQuery('img',nav.modalBg).prop('src','/wp-content/themes/gbl-toolbox-2/img/loading.gif')

	jQuery('img',nav.modalBg).css('margin-left',-80).css('margin-top',-90);
}

nav.stickyMenu = function (){
	if (jQuery(window).scrollTop() >= jQuery('#page').offset().top){
		jQuery('header .my-head').addClass('sticky');
		jQuery('body').addClass('nav-collapsed');

	}else{
		jQuery('header .my-head').removeClass('sticky');
		jQuery('body').removeClass('nav-collapsed');
		jQuery('div.toTop').slideUp(450, 'easeOutExpo');
	}
	if (jQuery(window).scrollTop() >= 250){
		jQuery('div.toTop').slideDown(450, 'easeOutExpo');
	}else{
		jQuery('div.toTop').slideUp(450, 'easeOutExpo');
	}
}

nav.initPlayButton = function (){
	if (nav.isNotMobile){
			jQuery('.scroll-to-skip').unbind('click').click(function(event){

			event.preventDefault();
			if (jQuery(this).hasClass('play')){


				gblVideo.openVideo();
			}else{

				gblVideo.closeVideo();
			}
			return false;
		});
	}else{
		jQuery('.scroll-to-skip').remove();
	}

}
jQuery(document).ready(function() {
	nav.init();
	jQuery('div.toTop').hide();
	nav.initPlayButton();
	jQuery(window).scroll(function(){
		nav.stickyMenu();
	});
	if(navigator.appName == 'Microsoft Internet Explorer'){
		jQuery('html').addClass('ie ie10');
	}
	window.addEventListener('reload', function(event){
		if (nav.isNotMobile){
			team.init();
		}
		jQuery('div.toTop').hide()
		nav.initPlayButton();
		if (jQuery('div.wpcf7 > form').length > 0){
	     jQuery.getScript('/wp-content/plugins/contact-form-7/includes/js/scripts.js');
      }
      bind_close_case_study()
	})
});
/* AD CUSTOM EVENT RELOAD*/
function bind_close_case_study(){
   if(jQuery(".closeCS").length > 0){
         jQuery(".closeCS a").click(function(event) {
            jQuery(".menu-item.menu-item-29 a").click();
            jQuery(".menu-item.menu-item-1127 a").click();
            return false;
         });
      }
}

if (navigator.appName != 'Microsoft Internet Explorer' && !navigator.userAgent.match(/Trident\/7\./)){
	nav.eventReload =  new CustomEvent("reload",{ bubbles : true,cancelable : true,detail : {}});

	nav.reload = function(){
		window.dispatchEvent(nav.eventReload);
	};
}else{

	nav.eventReload = document.createEvent('Event');
	nav.eventReload.initEvent('reload', true, true);
	nav.reload = function(){
		window.dispatchEvent(nav.eventReload);
	};
}



nav.setCookie = function(cookieName, value, expire){
	var expirationDate = new Date();
	expirationDate.setDate(expirationDate.getDate() + expire);
	var cookieValue = escape(value) + ((expire==null) ? "" : "; expires="+expirationDate.toUTCString());
	document.cookie = cookieName + "=" + cookieValue;
}

nav.getCookie = function(cookieName)
{
	var cookieValue = document.cookie;
	var cookieStart = cookieValue.indexOf(" " + cookieName + "=");
	if (cookieStart == -1)
	  {
	  cookieStart = cookieValue.indexOf(cookieName + "=");
	  }
	if (cookieStart == -1)
	  {
	  cookieValue = null;
	  }
	else
	  {
	  cookieStart = cookieValue.indexOf("=", cookieStart) + 1;
	  var c_end = cookieValue.indexOf(";", cookieStart);
	  if (c_end == -1)
	  {
	c_end = cookieValue.length;
	}
	cookieValue = unescape(cookieValue.substring(cookieStart,c_end));
	}
	return cookieValue;
}

if (!nav.videoAlreadyPlay){
	var _c = nav.getCookie('v_p_a');
	if (_c === 'true'){
		nav.videoAlreadyPlay = true;
	}
}


jQuery(window).load(function(){
   bind_close_case_study()
	nav.openLoad();
	if (nav.isNotMobile) {
		if(nav.endAnim){
			nav.close();
		}
		nav.endLoad = true;
	}


});



jQuery(document).ready(function($) {

	jQuery(document).on('click',"#open-video-showreel",function(event) {

		event.preventDefault();
		if ( jQuery( "#annualShowreel .container" ).is( ":hidden" ) ) {
			jQuery(this).addClass('close-video').find('.newLogo').text("Close");
			jQuery('#annualShowreel').css('background-color', 'black');
			jQuery( "#annualShowreel .container" ).slideDown({ duration: 650, easing: "easeInOutExpo",start : function(){
		  	jQuery('#annualShowreel').css('background-position', '-525px bottom');
		   } });
		} else {
         $(".showVid iframe").attr("src", $(".showVid iframe").attr("src"))
			jQuery(this).removeClass('close-video').find('.newLogo').text("View Our Showreel 2016")
			jQuery( "#annualShowreel .container" ).slideUp(
				{
					duration: 450,
					easing: "easeInOutExpo",
					start : function(){
						jQuery('#annualShowreel').css('background-position', '-315px bottom');

					}
					, complete : function(){
						jQuery('#annualShowreel').css('background-color', '#ffcf01');
					}
				}
			);
		}
	});
});

