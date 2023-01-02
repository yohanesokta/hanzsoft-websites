let btnXPopup = document.getElementById("btn-popup");
let popup = document.getElementById('popup');
let btnPopup = document.getElementById('tutor');
popup.style.display = 'none';


if (window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
}

let btn = document.getElementById('btn-warning');
let warning = document.getElementById('warning');

btn.onclick = function(){
	warning.style.display = 'none';
}

// Popup
btnPopup.onclick = function(){
	popup.style.display = 'flex';
	popup.style.opacity = '1';
	popup.style.animation = 'popupon .5s';

}

function onTutor(){
	
	popup.style.display = 'flex';
	popup.style.opacity = '1';
	popup.style.animation = 'popupon .5s';
}

btnXPopup.onclick  = function(){
	popup.style.opacity = '0';
	setTimeout(function(){
		popup.style.display= 'none';
	}, 300);
}
let loading = document.getElementById('loadOverlay');
	window.addEventListener("load", () => {
		loading.style.display = "none";
	})
	function goBack() {
  window.history.back();
}
// ajax
