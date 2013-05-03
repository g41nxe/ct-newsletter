/*
 * Use this Objects as a map of #ids (of divs) containing the 
 * job titles to #ids (of divs) containting the portraits 
 * and vice versa
 * 
 */
var job2portrait = {
	"job_1" : "portrait_1",
	"job_2" : "portrait_2",
	"job_3" : "portrait_3",
	"job_4" : "portrait_4",
	"job_5" : "portrait_5",
	"job_6" : "portrait_6",
	"job_7" : "portrait_7",
	"job_8" : "portrait_8"
};

var portrait2job = {};

function scrollTo(id){
	$('html, body').animate( {
		scrollTop : $(id).offset().top
	}, 1500);
}

function solve(){
	$.each(job2portrait, function(key, value) {
		animateDropFade($("#"+value).next(), $("#"+key));
	});
	
	scrollTo("#imex");
	$("#participant_form").hide();
}

/*
 * check if all jobtitles hav been positioned correctly (correctly means: all
 * divs containing the correct job titles contain exactly 1 element beacuse we
 * will append the image via jquery when the user dropped it correctly) if the
 * game is finished successfully: show form and scroll down
 * 
 */
function checkStatus() {
	var success = true;
	$.each(job2portrait, function(key, value) {
		// success: all jobs removed
		if ($("#"+key).length > 0)
			success = false;
	});
	
	gameSuccess(success);
	
	if (success)
		scrollTo("#participant_form");
}

/**
 * 
 * toggle the background image between color and black/white version
 * 
 * @param img
 *            the jquery object of the div containing the portrait
 * @param is_sw
 *            bool indicating if it is already the black/white image
 * @return nothing
 */
function toggleImage(img, is_sw) {
	var bg = img.css("background-image").split("/").pop();

	var filename = bg.substring(0, bg.length - 2);
	var filename = filename.replace(".png", "");

	if (is_sw) {
		filename = "img/polaroids/" + filename + "_sw.png";
		img.css("background-image", 'url("' + filename + '")');
	} else {
		filename = "img/polaroids/" + filename.replace("_sw", "") + ".png";
		img.css("background-image", 'url("' + filename + '")');

	}
}

/**
 * will fade in the dragged image at the new position
 * 
 * @param dropArea
 *            the div to prepend the img at
 * @param dragged
 *            the image being dragged
 */
function animateDropFade(dropArea, dragged) {
	dropArea.hide();
	dropArea.css("background-image", dragged.css("background-image"));
	dropArea.css("background-repeat","no-repeat");
	dropArea.show("fade", {}, 1000);
	dragged.remove();
}

/**
 * will make the element the id job_id a draggable which will be accepted by the
 * element with the id portrait_id
 * 
 * @param job_id
 *            id of the div containing the job image
 * @param portrait_id
 *            id of the div containing the portrait img
 */
function InitDragAndDrop(job_id, portrait_id) {
	job_id = "#" + job_id;
	portrait_id = "#" + portrait_id;

	$(job_id).draggable( {
		addClasses : false,
		revert : true,
		revertDuration : 300,
	});
	
	$(job_id).hover(function(){
		$(job_id).css("cursor", "move");
	});

	$(portrait_id).droppable( {
		addClasses : false,
		accept : "*",
		tolerance : "pointer",
		over : function(event, ui) {
			if (ui.draggable.attr('id') != portrait2job[$(this).attr('id')])
				toggleImage($(this), true);
		},
		out : function(event, ui) {
			toggleImage($(this), false);
		},
		drop : function(event, ui) {
			if (ui.draggable.attr('id') == portrait2job[$(this).attr('id')]) {
				animateDropFade($(this).next(), ui.draggable);
				checkStatus();
			} else {
				  $(this).effect("shake", { times : 1, distance : 5}, 300);
			}
			toggleImage($(this), false);
		}
	});
}

/*
 * this code will be executed at start
 */
$(document).ready(function() {
	// init second map (reversed)
		$.each(job2portrait, function(key, value) {
			portrait2job[value] = key;
		});

		// init the drag and drop elements for each entry in the map
		$.each(job2portrait, function(index, value) {
			InitDragAndDrop(index, value);
		});
	});