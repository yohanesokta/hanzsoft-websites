if (window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
		}
let rBtn = document.getElementById('rbtn');
let navMobile = document.getElementById('navMobile');
	let body = document.getElementById('Body');
	offsite = body.offsetHeight;
	offsite -= 800;
	window.addEventListener('scroll',function(){
		let Value = window.scrollY;
		if(Value >= 50){
			navMobile.style.height = '50px';
		}
		else{
			navMobile.style.height = '';
		}
		if(Value >= offsite){
			
			navMobile.style.height = '';
		}
	})
let loading = document.getElementById('loadOverlay');
	window.addEventListener("load", () => {
		loading.style.display = "none";
	})
function goBack() {
  window.history.back();
}
rBtn.onclick = function(){
	rBtn.style.opacity = '0';
	loadData();
	rBtn.style.opacity = '1';
}