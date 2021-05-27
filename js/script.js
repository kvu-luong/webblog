const btnHamburger = document.querySelector('#js-btnHamburger');
const body = document.querySelector('body');
// const header = document.querySelector('.js-header');
// const overlay = document.querySelector('.js-overlay');
const fadeElems = document.querySelectorAll('.js-has-fade');
const menu = document.querySelector(".js-menu");

btnHamburger.addEventListener('click', function(){
	if(this.classList.contains('open')){
		body.classList.remove('noscroll');
		this.classList.remove('open');
		menu.classList.remove('active');
		fadeElems.forEach(function(element){
			element.classList.add('fade-out');
			element.classList.remove('fade-in');
		})
		
	}else{
		body.classList.add('noscroll');
		this.classList.add('open');
		menu.classList.add('active');
		fadeElems.forEach(function(element){
			element.classList.add('fade-in');
			element.classList.remove('fade-out');
		})
		
	}
})