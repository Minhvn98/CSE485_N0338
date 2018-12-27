document.addEventListener("DOMContentLoaded", function(event) {
	
	window.addEventListener('scroll', function(){
		var backToTop = window.pageYOffset;
		var buttonTop = document.querySelector('.back-to-top');
		if (backToTop >= 700) {
			buttonTop.classList.add('show-back-to-top');
		} else {
			buttonTop.classList.remove('show-back-to-top');
		}

		buttonTop.addEventListener('click', function(){
			document.querySelector('html').scrollTop = 0;

		});
	});
	$('.btn-add-course').click(function(event) {
        $('.contain-add-course').addClass('show');
        console.log("hihi");
      });
	$('.btn-exit').click(function(event) {
		$('.contain-add-course').removeClass('show');
	});
  });