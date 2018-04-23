jQuery(document).ready(function($) {
	let scrollGaleria = $('main').offset().top
	$('.more').on('click', function(e) {
		e.preventDefault()
		$('html, body').animate({
			scrollTop: scrollGaleria
		}, 700)
	})
	$("#modal").iziModal();
    $('#image-modal1').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal2').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal3').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal4').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal5').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal6').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal7').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal8').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
    $('#image-modal9').iziModal({
    	width: '90vw',
    	headerColor: '#1846be',
    });
	$('#checkterms').on('click', '.trigger', function (event) {
    event.preventDefault();
    // $('#modal').iziModal('setZindex', 99999);
    // $('#modal').iziModal('open', { zindex: 99999 });
    $('#modal').iziModal('open');
	});
    $('.galeria-container').slick({
        infinite: true,
        dots: true,
        autoplay: true
    });


})      