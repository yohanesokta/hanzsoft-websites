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