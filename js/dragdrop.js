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
	"job_8" : "portrait_8",
	"job_9" : "portrait_9",
	"job_10" : "portrait_10",
	"job_11" : "portrait_11",
	"job_12" : "portrait_12",
	"job_13" : "portrait_13",
	"job_14" : "portrait_14",
	"job_15" : "portrait_15",
	"job_16" : "portrait_16",
	"job_17" : "portrait_17",
	"job_18" : "portrait_18",
	"job_19" : "portrait_19",
	"job_20" : "portrait_20"
	
	
	
};

/**
 * path to polaroids folder 
 * used by toggleImage function 
 * 
 * DE: var path_to_polaroids = "img/polaroids/";
 */
var path_to_polaroids = "img/polaroids_uk/";

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
	$("#on_success").show();
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
		scrollTo("#on_success");
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

	var filename = bg.substring(0, bg.length);
	var filename = filename.replace(".png", "");
	var filename = filename.replace('"', "");
	var filename = filename.replace(")", "");

	if (is_sw) {
		filename = path_to_polaroids + filename + "_sw.png";
		img.css("background-image", 'url("' + filename + '")');
	} else {
		filename = path_to_polaroids + filename.replace("_sw", "") + ".png";
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
	dropArea.css("background-repeat", "no-repeat");
	dragged.remove();
	
	dropArea.prev().fadeTo('medium', 0.5, function(){
		toggleImage(dropArea.prev(), false);
		dropArea.show("drop", {direction: "right", mode: "show"}, 500);
	}).delay(0).fadeTo('medium', 1);
	
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
				  toggleImage($(this), false);
			}
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
