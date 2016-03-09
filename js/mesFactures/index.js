$(document).ready(function () {

	function backToMainBillListActual() {
		$('.btn-back-list-bill-actual').click(function () {
			$('.actual-bill-detail').slideToggle('fast', function() {
				$('.list-bill').slideToggle('fast');
			});
		})
	}

	function backToMainBillListHistoric() {
		$('.btn-back-list-bill-historic').click(function () {
			console.log('ici');
			$('.historic-bill-detail').slideToggle('fast', function() {
				$('.list-bill').slideToggle('fast');
			});
		})
	}

	backToMainBillListActual();
	backToMainBillListHistoric();

	$('.show-historic-bill-detail').click(function () {
		$('.list-bill').slideToggle('fast', function() {
			$('.actual-bill-detail').hide();
			$('.historic-bill-detail').slideToggle("fast");
		});
	});

	$('.show-actual-bill-detail').click(function () {
		$('.list-bill').slideToggle('fast', function() {
			$('.historic-bill-detail').hide();
			$('.actual-bill-detail').slideToggle("fast");
			
		});
	});

	
})