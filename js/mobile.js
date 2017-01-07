function drop() {
	first = $("#tape .first input").val();
	last = $("#tape .last input").val();

	if( first != "" ) {
		stage = 2;
		//$("#footer .links .about").addClass("off");
		
		$("#create").animate({
			opacity: 0
		}, function() {
			$(this).hide();
			
			$("#loading").css("display","block").animate({
				opacity: 1
			}, function() {
				lt = setTimeout(createLabel, getRandomInt(750,2000));
			});
		});	
	}	
}

function createLabel() {
	clearTimeout();

	$("#loading").animate({
		opacity: 0
	}, function() {
		$(this).hide();

		$("#label .djbooth .first").text(first);
		$("#label .djbooth .last").text(last);

		$("#label, #footer").css("display","block").animate({
			opacity: 1
		}, function() {

		});
	});
}

function createLonging() {
	clearTimeout();

	if( pcount < 3 ) {
		pcount++;
	} else {
		pcount = 0;
	}

	var periods = "";
	for( var i = 0; i < pcount; i++ ) {
		periods += ".";
	}

	$("#loading .generating").text("Generating" + periods);

	if( rcount < 8 ) {
		rcount++;
	} else {
		rcount = 0;
	}

	var width = 210 - (rcount * 18);
	$("#loading .loading").css({
		"border-width": width + "px"
	});

	// if( $("#label .djbooth").hasClass("flip") ) {
	// 	$("#label .djbooth").removeClass("flip");
	// } else {
	// 	$("#label .djbooth").addClass("flip");
	// }

	var gt = setTimeout(createLonging, 250);
}

$(window).load(function(){
	$("#wrapper").animate({
		opacity: 1
	});
});

var gt, lt, first, last;
var pcount = 0;
var rcount = 0;
var sfx, bSound = false;
$(document).ready(function() {
	sfx = new Audio();
	if (sfx.canPlayType('audio/mpeg;')) {
		sfx.type= 'audio/mpeg';
		sfx.src = "./sfx/sfx.mp3";
		bSound = true;
	} else if( sfx.canPlayType('audio/mp4') ) {
		sfx.type= 'audio/ogg';
		sfx.src = "./sfx/sfx.ogg";
		bSound = true;
	} else if( sfx.canPlayType('audio/mp4') ) {
		sfx.type= 'audio/mp4';
		sfx.src = "./sfx/sfx.m4a";
		bSound = true;
	}
	
	$("#tape input").on("input", function(){
		first = $("#tape .first input").val();
		if( first != "" ) {
			$("#drop").addClass("on");
		} else {
			$("#drop").removeClass("on");
		}
	});

	$("#drop").click(function() {
		drop();
	});

	var gt = setTimeout(createLonging, 250);

	$("#footer .goback").click(function() {
		location.reload();
	});

	$("#footer .about").click(function() {
		$("#label, #footer .about").hide();
		$("#about").css("display","block");
	});

	$("#about .close").click(function() {
		$("#about").hide();
		$("#label, #footer .about").show();

		return false;
	});

	$("#tape form").submit(function(event) {
		$("#tape form input").blur();
		drop();

		return false;
	});

	$("#footer .social a, #footer .about").click(function(){
		if( bSound ) {
			sfx.currentTime = 0;
			sfx.play();			
		}
	});
});