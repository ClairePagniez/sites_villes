var stopSlider = false;
var reponses = [];

function changeInclus(type) {

	if (type) {

		$("#tab-inclus").addClass("active");	
		$(".tab-inclus").show();	
		$("#tab-noninclus").removeClass("active");	
		$(".tab-noninclus").hide();	
		
	} else {

		$("#tab-inclus").removeClass("active");	
		$(".tab-inclus").hide();	
		$("#tab-noninclus").addClass("active");	
		$(".tab-noninclus").show();	
		
	}

}

function changeSexe(type) {

	$(".mec,.nana").removeClass("current");
	$("." + type).addClass("current");
	$(".image-type-sexe").attr("src", "images/canon-" + type + ".jpg");

}

function displayCreaOfferte() {

	if ($('#creaofferte:not(:visible)').length)
		$('#creaofferte').fadeIn();
	else
		$('#creaofferte').fadeOut();

}

function displaySalarie() {

	if ($('.salarie:not(:visible)').length) {
		
		$('.salarie').fadeIn();
		$('#prix-mensuel').html("139&euro;");
		$('.notice.noir').text("* = prix pour une société avec 1 salarié");

	}
	else {

		$('.salarie').fadeOut();
		$('#prix-mensuel').html("99&euro;");
		$('.notice.noir').text("* = prix pour une société sans salarié");
		
	}

}

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 


function nextStep(courant, prochain, reponse) {

	$(courant).hide();
	$(prochain).fadeIn();
	
	if (reponse)
		reponses[Math.round(reponse / 10)] = reponse % 10;

	if (prochain == ".step-5") {

		var goodnews = 0,
			badnews = 0;
		
		for (i in reponses) {

			$(".reponse" + i).addClass(reponses[i] ? "bleu" : "rose");

			if (reponses[i])
				badnews++;
			else
				goodnews++;

		}

		if (!goodnews || !badnews) {

			$(".liaisonnews").remove();
			
			if (goodnews) {

				$(".badnews").remove();

			} else {

				$(".goodnews").remove();

			}

		}

		$(".badnews").text(badnews + " mauvaises nouvelles");
		$(".goodnews").text(goodnews + " bonnes nouvelles");

	}

}


function zapSlider(wait) {

	if ($(".carre.slider").length) {

		if (!wait) {
			
			if ($(".carre.slider > div:eq(0)").is(":visible")) {

				$(".carre.slider > div:eq(0)").fadeOut("fast", function() {

					$(".carre.slider > div:eq(1)").fadeIn("fast");

				});			

			} else if ($(".carre.slider > div:eq(1)").is(":visible")) {

				$(".carre.slider > div:eq(1)").fadeOut("fast", function() {

					$(".carre.slider > div:eq(2)").fadeIn("fast");

				});			

			} else if ($(".carre.slider > div:eq(2)").is(":visible")) {

				$(".carre.slider > div:eq(2)").fadeOut("fast", function() {

					$(".carre.slider > div:eq(0)").fadeIn("fast");

				});			
		
			}	
			
		}
		
		setTimeout(zapSlider, 3000);
	
	}

}

// remap jQuery to $
(function($){


/* trigger when page is ready */
$(document).ready(function (){

	// your functions go here
	zapSlider(true);

	if ($(".fancy:not(.video)").length)
		$(".fancy:not(.video)").fancybox({'type': 'iframe', 'width': 1000});
	if ($(".fancy.video").length)
		$(".fancy.video").fancybox({'type': 'iframe', 'height': 450});

	$(".formulaire:not(.bis)").each(function(){

		$(this).submit(function(){

			var formOk = true;
			$("#telephone-lead").parent().removeClass("error");
			$("#email-lead").parent().removeClass("error");
			$("#postal-lead").parent().removeClass("error");
			$("#activite-lead").parent().removeClass("error");
			$("#nom-lead").parent().removeClass("error");

			if ($("#telephone-lead").length && $("#telephone-lead").val() < 10) {

				$("#telephone-lead").parent().addClass("error");
				$("#telephone-lead").focus();
				formOk = false;

			}

			if ($("#email-lead").length && !validateEmail($("#email-lead").val())) {


				$("#email-lead").parent().addClass("error");
				$("#email-lead").focus();
				formOk = false;

			}

			if ($("#postal-lead").length && $("#postal-lead").val() < 2) {


				$("#postal-lead").parent().addClass("error");
				$("#postal-lead").focus();
				formOk = false;

			}

			if ($("#activite-lead").length && $("#activite-lead").val() < 2) {


				$("#activite-lead").parent().addClass("error");
				$("#activite-lead").focus();
				formOk = false;

			}

			if ($("#nom-lead").length && $("#nom-lead").val() < 2) {


				$("#nom-lead").parent().addClass("error");
				$("#nom-lead").focus();
				formOk = false;

			}

			return formOk;

		});

	});

	$(".formulaire.bis").each(function(){

		$(this).submit(function(){

			var formOk = true;
			$("#telephone-lead-bis").parent().removeClass("error");
			$("#email-lead-bis").parent().removeClass("error");
			$("#postal-lead-bis").parent().removeClass("error");
			$("#activite-lead-bis").parent().removeClass("error");
			$("#nom-lead-bis").parent().removeClass("error");

			if ($("#telephone-lead-bis").length && $("#telephone-lead-bis").val() < 10) {

				$("#telephone-lead-bis").parent().addClass("error");
				$("#telephone-lead-bis").focus();
				formOk = false;

			}

			if ($("#email-lead-bis").length && !validateEmail($("#email-lead-bis").val())) {


				$("#email-lead-bis").parent().addClass("error");
				$("#email-lead-bis").focus();
				formOk = false;

			}

			if ($("#postal-lead-bis").length && $("#postal-lead-bis").val() < 2) {


				$("#postal-lead-bis").parent().addClass("error");
				$("#postal-lead-bis").focus();
				formOk = false;

			}

			if ($("#activite-lead-bis").length && $("#activite-lead-bis").val() < 2) {


				$("#activite-lead-bis").parent().addClass("error");
				$("#activite-lead-bis").focus();
				formOk = false;

			}

			if ($("#nom-lead-bis").length && $("#nom-lead-bis").val() < 2) {


				$("#nom-lead-bis").parent().addClass("error");
				$("#nom-lead-bis").focus();
				formOk = false;

			}

			return formOk;

		});

	});


	$(".formulaire-footer").each(function(){

		$(this).submit(function(){

			var formOk = true;
			$("#telephone-lead-footer").parent().removeClass("error");
			$("#email-lead-footer").parent().removeClass("error");
			$("#postal-lead-footer").parent().removeClass("error");
			$("#activite-lead-footer").parent().removeClass("error");
			$("#nom-lead-footer").parent().removeClass("error");

			if ($("#telephone-lead-footer").val() < 10) {

				$("#telephone-lead-footer").parent().addClass("error");
				$("#telephone-lead-footer").focus();
				formOk = false;

			}

			if (!validateEmail($("#email-lead-footer").val())) {


				$("#email-lead-footer").parent().addClass("error");
				$("#email-lead-footer").focus();
				formOk = false;

			}

			if ($("#postal-lead-footer").val() < 2) {


				$("#postal-lead-footer").parent().addClass("error");
				$("#postal-lead-footer").focus();
				formOk = false;

			}

			if ($("#activite-lead-footer").val() < 2) {


				$("#activite-lead-footer").parent().addClass("error");
				$("#activite-lead-footer").focus();
				formOk = false;

			}

			if ($("#nom-lead-footer").val() < 2) {


				$("#nom-lead-footer").parent().addClass("error");
				$("#nom-lead-footer").focus();
				formOk = false;

			}

			return formOk;

		});

	});

	$(".foutu-footer li a").each(function(){

		$(this).click(function(){

			var e = this;
			$(e).parent("li").parent("ul").children("li:eq(0)").animate({left:"-5000px"}, 1200);
			setTimeout(function(){ $(e).parent("li").parent("ul").children("li:eq(1)").animate({left:"-5000px"}, 1200); }, 200);
			setTimeout(function(){ $(e).parent("li").parent("ul").children("li:eq(2)").animate({left:"-5000px"}, 1200); }, 400);
			setTimeout(function(){ $(e).parent("li").parent("ul").children("li:eq(3)").animate({left:"-1500px"}, 600, function(){

				var e = $(".foutu-footer");
				$(".foutu-footer").next("form").fadeIn("fast");
				e.remove();
				$("body").animate({scrollTop: $("#under-footer .container").offset().top}, 400);
				$("#nom-lead-footer").focus();

			}); }, 600);
			
		});

	});

	$(".fleche-droite").click(function(){

		if (stopSlider || !$(this).hasClass("active"))
			return false;

		stopSlider = true;

		var left = $(".backgrounds").css("left");

		$(".fleche-gauche").addClass("active");

		if (left == "-1023px")
			$(".fleche-droite").removeClass("active");

		$(".text_arg.active").fadeOut("fast", function(){

			$(this).removeClass("active");
			
			switch (left) {

				case "-5px" :
					$(".text_arg.arg2").fadeIn("fast", function(){

						$(this).addClass("active");

					});
				break;

				case "-514px" :
					$(".text_arg.arg3").fadeIn("fast", function(){

						$(this).addClass("active");

					});
				break;

				case "-1023px" :
					$(".text_arg.arg4").fadeIn("fast", function(){

						$(this).addClass("active");

					});
				break;

			}

		});


		$(".backgrounds").animate({left:$(".backgrounds").css("left").replace("px", "") * 1 - 509}, 500, function(){

			stopSlider = false;

		})	

	});

	$(".fleche-gauche").click(function(){

		if (stopSlider || !$(this).hasClass("active"))
			return false;

		stopSlider = true;

		var left = $(".backgrounds").css("left");
	
		$(".fleche-droite").addClass("active");

		if (left == "-514px")
			$(".fleche-gauche").removeClass("active");

		$(".text_arg.active").fadeOut("fast", function(){

			$(this).removeClass("active");

			switch (left) {

				case "-514px" :
					$(".text_arg.arg1").fadeIn("fast", function(){

						$(this).addClass("active");

					});
				break;

				case "-1023px" :
					$(".text_arg.arg2").fadeIn("fast", function(){

						$(this).addClass("active");

					});
				break;

				case "-1532px" :
					$(".text_arg.arg3").fadeIn("fast", function(){

						$(this).addClass("active");

					});
				break;

			}

		});

		$(".backgrounds").animate({left:$(".backgrounds").css("left").replace("px", "") * 1 + 509}, 500, function(){

			stopSlider = false;

		})	

	});

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/


})(window.jQuery);