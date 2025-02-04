var gblVideo = gblVideo || {
	winHeight : 720,
	winWidth : 1280,
	video : {w:1280 , h: 720} ,
	img : {w:1400 , h: 513},
	waiting : 0,
	canBePlay : true
};
var isiPad = navigator.userAgent.match(/iPad/i) != null;
var player = '<video id="launcher_video" style="position: absolute; top : -1000px;" >\
<source src="/wp-content/uploads/videos/Montage-FINAL-720P.mp4.mp4" type="video/mp4" />\
<source src="/wp-content/uploads/videos/Montage-FINAL-720P.webmhd.webm" type="video/webm" />\
<source src="/wp-content/uploads/videos/Montage-FINAL-720P.oggtheora.ogv" type="video/ogg" />\
</video>';
var playerIpad = '<video id="launcher_video" controls class="" >\
<source src="/wp-content/uploads/videos/Montage-FINAL-720P.mp4.mp4" type="video/mp4" />\
<source src="/wp-content/uploads/videos/Montage-FINAL-720P.webmhd.webm" type="video/webm" />\
<source src="/wp-content/uploads/videos/Montage-FINAL-720P.oggtheora.ogv" type="video/ogg" />\
</video>';


var video = null;
gblVideo.init = function (){

	if (nav.isNotMobile){
		/* CHARGE UNIQUEMENT LA VIDEO SUR LA HOME */

		if (nav.isHomePage()){
			video = document.getElementById("launcher_video");
			if (!nav.videoAlreadyPlay) {
				gblVideo.loadVideo(true);
			}
		}
		gblVideo.winHeight = jQuery(window).height() - 35;
		gblVideo.winWidth = jQuery(window).width();
		jQuery('.homeheader').css('overflow', 'hidden').css('position', 'relative');

		jQuery('.homeheader > div')
			.css('background-size', 'cover')
			.css('background-position', 'center center')
			.css('position', 'absolute')
			.height(0);

		if (isiPad){
			gblVideo.closeIpadVideo();
			jQuery('.scroll-to-skip').remove();
		}else{
			gblVideo.setVideoSize();
			jQuery(video).unbind('timeupdate').bind('timeupdate', function (event) {
				if (video.currentTime >= 19.8){
					gblVideo.closeVideo();
				}
			});


			jQuery(window).scroll(function (event){
				if (!isiPad && nav.isHomePage() && nav.isPlaying && nav.endAnim  && nav.scrollStart == 0){
					gblVideo.closeVideo();
					jQuery('.scroll-to-skip').addClass('play');
				}
			})
			jQuery(window).resize(function (event){
				nav.chekMq();
				nav.centerGif();
				if (nav.isNotMobile && nav.isPlaying){
					gblVideo.setVideoSize();
				}
			})
		}
	}
}

gblVideo.loadVideo = function(display){

	if (video == null){
		jQuery('.homeheader').prepend(player);
		video = document.getElementById("launcher_video");
		gblVideo.setVideoSize();
		if (!display){
			jQuery('.homeheader video').css('top', -jQuery(window).height()- 500);
		}
		video.addEventListener('loadeddata', function() {
			gblVideo.canBePlay = true;
		}, false);
	}





}

gblVideo.closeVideo = function (){
	// jQuery('.scroll-to-skip').hide();
	if (nav.isNotMobile && nav.isPlaying){

		nav.isPlaying = false;
		jQuery('.homeheader div.newLogo').css('margin-top', 500);

		nav.modalBg.css('background-color', '#2d2a2b');
		jQuery('.bgi','.homeheader').height(gblVideo.img.h).css('top', gblVideo.img.h);
		video.pause();
		jQuery(video).finish().animate({top : -(gblVideo.video.h)}, 1500,'easeOutExpo', function (){
			if (video && video.readyState === 4 && video.currentTime != 0)
				video.currentTime = 0;
		});
		jQuery('.bgi','.homeheader').finish().animate({top : 0}, 1500,'easeOutExpo');
		jQuery('.homeheader').finish().animate({height : gblVideo.img.h}, 300,'easeOutExpo', function(){

		})
		setTimeout(function(){
			jQuery('.homeheader div.newLogo').finish().animate({marginTop : 150}, 1000,'easeOutExpo', function(){

			});
			jQuery('.scroll-to-skip').addClass('play');
		},100);
	}
}

gblVideo.closeIpadVideo = function (){

	if (nav.isNotMobile){
		nav.isPlaying = false;
		jQuery('.homeheader div.newLogo').css('margin-top', 150);
		jQuery('.bgi','.homeheader').height(gblVideo.img.h);

		jQuery(video).finish().css('top' , -(gblVideo.video.h));
		jQuery('.homeheader').css('height',gblVideo.img.h);

	}
}


gblVideo.closeOnChangeVideo = function (){
	if (nav.isNotMobile){
		nav.isPlaying = false;
		video.pause();
		jQuery(video).finish().animate({top : -(gblVideo.video.h)}, 3000,'easeOutExpo', function (){
			if (video && video.readyState === 4 && video.currentTime != 0)
				video.currentTime = 0;
		});
	}
}

gblVideo.openVideo = function (){
	if (nav.isNotMobile && !nav.isPlaying){
		nav.scrollTop();

		jQuery(video).finish().animate({top : 0}, 1500,'easeOutExpo');
		jQuery('.bgi','.homeheader').finish().animate({top :gblVideo.video.h}, 1200,'easeOutExpo');
		jQuery('.homeheader').finish().animate({height : gblVideo.video.h-35}, 300,'easeOutExpo');
		setTimeout(function(){
			jQuery('.homeheader div.newLogo').finish().animate({marginTop : 500}, 1000,'easeOutExpo');
		},100);
		if (video && video.readyState === 4 && video.currentTime != 0)
			video.currentTime = 0;

		gblVideo.waiting = setInterval(function(){
			nav.isPlaying = true;
			gblVideo.play();
			jQuery('.scroll-to-skip').removeClass('play');
		}, 400)

	}
}

gblVideo.play = function(){

	/*if (video.readyState == video.HAVE_ENOUGH_DATA && gblVideo.canBePlay){*/
	if (gblVideo.canBePlay){

		gblVideo.setVideoSize();
		window.clearInterval(gblVideo.waiting);

		video.play();
	}
}




gblVideo.setVideoSize = function (){
	if (nav.isNotMobile){
		gblVideo.winHeight = jQuery(window).height() - 35;
		gblVideo.winWidth = jQuery(window).width();
		var ratioH = gblVideo.winWidth / 16 *9;
		var ratioW = gblVideo.winHeight / 9 *16;
		var _width = 0;
		var _height = 0;
		if (ratioH <= gblVideo.winHeight) {
			var left = (ratioW - gblVideo.winWidth)/ 2;
			jQuery(video).width(Math.round(ratioW)).css('left',-left);
			jQuery(video).height(gblVideo.winHeight);

		}else if (ratioW <= gblVideo.winWidth) {
			var left = (ratioW - gblVideo.winWidth)/2;
			var top = (ratioH - gblVideo.winHeight)/2;

			jQuery(video).width(gblVideo.winWidth).css('left',0).css('top', -top);
			jQuery(video).height(ratioH);

		}


		gblVideo.video.h = jQuery(video).height();
		gblVideo.video.w = jQuery(video).width();
		jQuery('.homeheader').height(gblVideo.winHeight);
	}
}


jQuery(document).ready(function() {
	gblVideo.init();


	window.addEventListener('reload', function(event){
		if (nav.isHomePage()){
			gblVideo.init();
		}

		if (jQuery('#page').hasClass('error404'))
			$(".theVidYT").fitVids({ customSelector: "iframe[src^='http://www.youtube.com']" });
	})
});
