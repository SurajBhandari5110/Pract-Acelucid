Array.prototype.inArray = function(p_val) {
    return(this.indexOf(p_val) > -1);
}
var crops = {
	//'768' : [10,14,11,7,3,0,4,1,5,8,12,15],
	'768' : [7,4,8,5,9,12,16,19,15,18,14,11 ],
	'1200' : [15,10,4,0,5,1,6,11,17,21,16,20 ],
	isOpen : false
};

var team = team || {
	members : [],
	timeOuts : [],
	increment : 15,
	speed : 25,
	size : false,
	images : []

};

team.init = function (){
	crops.isOpen = false;
	jQuery('.member').each(function(){
		 team.members.push(this);
	})
	jQuery('.member a').click(function(event){
		
		if (!crops.isOpen){
			crops.isOpen = true;
			event.preventDefault();
			var element = jQuery(this).parent();
			team.members.sort(function() {return 0.5 - Math.random()});
			team.openCrops(element);
			return false;
		}
	
	});
	jQuery('#full-team .close a').click(function(event){
		event.preventDefault();
		team.closeCrops();
		crops.isOpen = false;
		return false;
	});

	team.loadImg();

}

team.loadImg = function (){
	jQuery.each( team.members, function(index, member){
		var id = jQuery('a', member).prop('class');
		var url = jQuery('span.posture','#'+id).data('768');
		var img =jQuery('<img/>').prop('src',url);
		team.images[id] = img;
	})
}


team.openCrops = function(_element){
	var element = _element;
	team.increment = 15;
	team.size = nav.isNotMobile;
	var profile = team.getInfos(_element);
	jQuery('#full-team').addClass('openHover');
	jQuery.each(team.members, function(index, value){
		if (team.increment < 1500){
			team.increment = 25 + team.increment;
		}
	
		var _class = 'cropHide';
		if (crops[team.size].inArray(jQuery(value).index())){
			_class = 'cropShow';
		}
		var p = this;
		var t =  setTimeout(function(){
			if (_class == 'cropHide'){
				jQuery('img',p).animate({opacity:0 },500, function(){
					jQuery(p).addClass(_class);
					jQuery(p).css('background-color', 'rgba(255,255,255,1)');
					if (team.members.length-1 == index){
						jQuery('#full-team').addClass('open');
						jQuery('.info-team').fadeIn(250);
							var frameSrc = jQuery('iframe',profile).data('src');
						if (frameSrc !=''){
							jQuery('iframe',profile).prop('src', frameSrc);
						}
					}
				});
				
			}else{
				jQuery('img',p).animate({opacity:0 },500, function(){
					jQuery(p).addClass(_class);
					jQuery(p).css('background-color', 'rgba(255,255,255,0)');
					if (team.members.length-1 == index){
						jQuery('#full-team').addClass('open');
						jQuery('.info-team').fadeIn(250);
						
						var frameSrc = jQuery('iframe',profile).data('src');
						if (frameSrc !=''){
							jQuery('iframe',profile).prop('src', frameSrc);
						}

					}
				});
			}
		}, team.increment);
		team.timeOuts.push(t);
		
	});
	team.scrollTop();
	
	
}
team.scrollTop = function (){
	jQuery('body, html').animate({scrollTop : jQuery('#full-team').offset().top -190});
}
team.closeCrops  = function(){
	jQuery('#full-team').css('background-image', '');
	jQuery('.profileOpen').removeClass('profileOpen').fadeOut(250);
	jQuery('.info-team').fadeOut(250);
	jQuery('.member').css('background-color', '');
	jQuery('.member img').animate({opacity:1 },350, function(){
		jQuery('.cropHide').removeClass('cropHide');
		jQuery('.cropShow').removeClass('cropShow');
		jQuery('#full-team').removeClass('open');
		jQuery('#full-team').removeClass('open');
		jQuery('#full-team').removeClass('openHover');
	});
	
	jQuery.each(team.timeOuts, function(){
		 clearTimeout(this);
	});
	team.timeOuts = []; 
}

team.getInfos = function(_element){
	var id = jQuery('a', _element).prop('class');
	
	var profile = jQuery('#'+id);
	var profileImg = jQuery('span.posture',profile).data('768');
	

	jQuery('#full-team').css('background-image', 'url('+team.images[id].prop('src')+')');
		
	
	jQuery(profile).addClass('profileOpen').fadeIn(250);
	return profile;
}

jQuery(document).ready(function() {
	setTimeout(
		function(){
			team.init();
		}, 600
	)
});

