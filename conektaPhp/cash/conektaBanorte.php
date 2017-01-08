<?php 
if (isset($_POST['payType']) && $_POST['payType'] == 'banorte') {
	$charge = \Conekta\Charge::create(array(
		'description'=> 'Stogies',
		'reference_id'=> '9839-wolf_pack',
		'amount'=> 20000,
		'currency'=>'MXN',
		'bank'=> array(
			'type'=> 'banorte',
			'expires_at'=> 1484699268
			),
		'details'=> array(
			'name'=> 'Arnulfo Quimare',
			'phone'=> '403-342-0642',
			'email'=> 'logan@x-men.org',
			'customer'=> array(
				'corporation_name'=> 'Conekta Inc.',
				'logged_in'=> true,
				'successful_purchases'=> 14,
				'created_at'=> 1379784950,
				'updated_at'=> 1379784950,
				'offline_payments'=> 4,
				'score'=> 9
				),
			'line_items'=> array(
				array(
					'name'=> 'Box of Cohiba S1s',
					'description'=> 'Imported From Mex.',
					'unit_price'=> 20000,
					'quantity'=> 1,
					'sku'=> 'cohb_s1',
					'type'=> 'food'
					)
				),
			'billing_address'=> array(
				'street1'=>'77 Mystery Lane',
				'street2'=> 'Suite 124',
				'street3'=> null,
				'city'=> 'Darlington',
				'state'=>'NJ',
				'zip'=> '10192',
				'country'=> 'Mexico',
				'phone'=> '77-777-7777',
				'email'=> 'purshasing@x-men.org'
				)
			)
		));

	echo $charge->payment_method->service_name;
	echo $charge->payment_method->service_number;
	echo $charge->payment_method->reference;
	echo $charge->payment_method->type;
}
?>