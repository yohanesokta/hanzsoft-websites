if (window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
}

let btn = document.getElementById('btn-warning');
let warning = document.getElementById('warning');

btn.onclick = function(){
	warning.style.display = 'none';
}