var front = document.querySelector('.face-front');
var back = document.querySelector('.face-back');
var flip = document.querySelector('.book-content');
var uno = document.querySelectorAll('.book');
var portada = document.querySelectorAll('#portada');

var contZindex = 2;
var customZindex = 1;

for (var i = 0; i < uno.length; i++) {
	uno[i].style.zIndex = customZindex;
	customZindex--;

	uno[i].addEventListener('click', function(e){

		var tgt = e.target;
		var unoThis = this;
		unoThis.style.zIndex = contZindex;
		contZindex++;

		if (tgt.getAttribute('class') == 'face-front') {
			unoThis.style.zIndex = contZindex;
			contZindex +=20;
			setTimeout(function(){
				unoThis.style.transform = 'rotateY(-180deg)';
			}, 500);
		}
		if (tgt.getAttribute("class") == 'face-back') {
			unoThis.style.zIndex = contZindex;
			contZindex +=20;

			setTimeout(function(){
				unoThis.style.transform = 'rotateY(0deg)';
			}, 500);
		}

		if (tgt.getAttribute('id') == 'portada') {
			flip.classList.remove("trnsf-reset");
			flip.classList.add("trnsf");	
		}
		if (tgt.getAttribute('id') == 'g0002') {
			flip.classList.remove("trnsf");
			flip.classList.add("trnsf-reset");
		}
        if(tgt.getAttribute('id') == 'g0034'){
            flip.style.boxShadow="none";

        }
        if (tgt.getAttribute('id') == 'portada-back') {
            setTimeout(function(){
                flip.style.boxShadow="-50px 50px 50px rgba(0, 0, 0, 0.5)"
            },500)

		}
        

	});
}

var book = document.getElementById('thebook');
var view = document.getElementById('page');
var intro =document.getElementById('Book__intro');
	view.onclick = function(){
		setTimeout(function(){
            book.style.display="flex";
            intro.style.display="none";
		}, 1000);	
}; 
