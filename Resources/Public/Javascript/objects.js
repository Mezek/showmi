// objects.js
// Version: 1.00
// (c) 2019 Erik Bartoš

/**
 * Change element class
 *
 * @param uid Element class 'th'+uid
 * @return void
 */
function changeClass(uid)
{
	//var c = 'th' + uid;
	var c = 'th1';
	var plus = 'thema-toggle-plus';
	var minus = 'thema-toggle-minus';
	var x = document.getElementById(c);
	if (x.classList.contains(plus)) {
		x.classList.replace(plus, minus);
	} else {
		x.classList.replace(minus, plus);
	}
}

/**
 * Toggle show/hide element
 *
 * @param uid Element id
 * @return void
 */
function toggleShowHide(uid)
{
	var x = document.getElementById(uid);
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}