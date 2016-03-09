$(document).ready(function () {

	$('.show-historic-bill-detail').click(function () {
		$('.list-bill').hide();
		$('.actual-bill-detail').hide();
		$('.hitoric-bill-detail').show();
	});

	$('.show-actual-bill-detail').click(function () {
		$('.list-bill').hide();
		$('.hitoric-bill-detail').hide();
		$('.actual-bill-detail').show();
	});
})