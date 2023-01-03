if (window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
		}
let rBtn = document.getElementById('rbtn');
let card = document.getElementsByClassName('card');
let image = document.getElementsByClassName('imgSoft');
	for (let lg=0; lg< card.length; lg++){
		card[lg].onmouseover = function(){
			image[lg].style.borderRadius = '50%';
		}
		card[lg].onmouseleave = function(){
			image[lg].style.borderRadius = '';
		}
	}
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