$(document).ready(function() {
	$('#card').click(function(event) {
		$('#card-form').toggle('slow');
		$('#payment-type').hide('slow');
		$('#aqui').hide('slow');
	});
	$('#cash').click(function(event) {
		$('#payment-type').toggle('slow');
		$('#card-form').hide('slow');
		$('#aqui').hide('slow');
	});
	$('#refund').click(function(event) {
		$('#aqui').toggle('slow');
		$('#card-form').hide('slow');
		$('#payment-type').hide('slow');
	});
});