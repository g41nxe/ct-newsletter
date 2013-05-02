// global var for function "jumpTo()"
var last_hook = "";

// function to jump to a given hook
function jumpTo(hook) {
	if (last_hook !== hook && hook !== "") {
		// deklare global var last_hook so it jumps just once
		last_hook = hook;
		// Jump to the hook
		window.location.hash = hook;
	}

	// return always true
	return true;
}

// function to load the form an the congratulation container
function gameSuccess(succ) {
	if (succ === true) {
		// get the div-objektks
		var container1 = document.getElementById("on_success");
		var container2 = document.getElementById("participant_form");

		// change the display (css) values from "none" to "block"
		container1.style.display = "block";
		container2.style.display = "block";
	}

	// return always true
	return true;
}

// calling this function while developing
window.onload = function() {
	//gameSuccess(true);
};
