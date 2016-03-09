$(document).ready(function () {

	$('.show-historic-bill-detail').click(function () {
		$('.list-bill').addClass('animated slideOutLeft').addClass('hide');
		$('.actual-bill-detail').hide();
		$('.hitoric-bill-detail').show();
	});

	$('.show-actual-bill-detail').click(function () {
		$('.list-bill').addClass('animated slideOutLeft');
		// $('.list-bill').hide();
		$('.hitoric-bill-detail').hide();
		$('.actual-bill-detail').show();
	});
})