let txName = document.getElementById('hanz-name');
let edit = document.getElementById('trans');
let edit2 = document.getElementById('trans2');
let edit3 = document.getElementById('trans3');
let edit4 = document.getElementById('trans4');
let edit5 = document.getElementById('trans5');
let edit6 = document.getElementById('trans6');
let navEvent = 1;
let slideEvent = 1;
let edit7 = document.getElementById('trans7');


window.addEventListener("scroll",function(){
	let Value = window.scrollY;
	let navbar = document.getElementById('navbar');
	if (navEvent == 1){
		navbar.classList.add('navbar-go');
		navEvent = 0;
	}
	if(Value <= 10 || Value >= 1288){
		navbar.classList.remove('navbar-go');
		navEvent = 1;
	}

	if (Value >= 467) {
		edit.style.color = "white";
		edit2.style.color = "white";
		edit3.style.color = "white";
		edit4.style.color = "white";
		edit5.style.color = "white";
		edit6.style.color = "white";
		edit7.style.color = "white";
		slideEvent = 1;
	}
	else if(slideEvent == 1){
		edit.style.color = "";
		edit2.style.color = "";
		edit3.style.color = "";
		edit4.style.color = "";
		edit5.style.color = "";
		edit6.style.color = "";
		edit7.style.color = "";
		slideEvent = 0;
	}
	if (Value >= 355){
		document.getElementById("mod1").style.color = "rgba(255,255,255,1)";
		document.getElementById("mod2").style.color = "rgba(255,255,255,1)";
	}
	else{

		document.getElementById("mod1").style.color = "rgba(255,255,255,0)";
		document.getElementById("mod2").style.color = "rgba(255,255,255,0)";
	}
	if (Value >= 600){
		document.getElementById('mod3').style.opacity = '1';
	}
	else{
		document.getElementById('mod3').style.opacity = '0';
	}
	if (Value >= 150){
		document.getElementById('hanz-name').style.opacity = '0';
		document.getElementById('hanz-tag').style.opacity = '0';
		document.getElementById('explore').style.transition = '2.2s ease';
		document.getElementById('explore').style.opacity = '0';
	}else{	document.getElementById('hanz-name').style.opacity = '1';
		document.getElementById('hanz-tag').style.opacity = '1';
		document.getElementById('explore').style.opacity = '1';
		document.getElementById('explore').style.transition = '0.3s ease';
	}
})