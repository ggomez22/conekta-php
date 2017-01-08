<?php 
try{
  $customer = \Conekta\Customer::create(array(
    "name"=> "Lews Therin",
    "email"=> "lews.therin@gmail.com",
    "phone"=> "55-5555-5555",
    "cards"=>  array($_POST['conektaTokenId'])   //"tok_a4Ff0dD2xYZZq82d9"
  ));
}catch (\Conekta\Error $e){
  echo $e->getMessage();
 //el cliente no pudo ser creado
}

$charge = \Conekta\Charge::create(array(
  'description'=> 'Stogies',
  'reference_id'=> '9839-wolf_pack',
  'amount'=> 20000,
  'currency'=>'MXN',
  'card'=> $customer->id,
  'details'=> array(
    'name'=> 'Arnulfo Quimare',
    'phone'=> '403-342-0642',
    'email'=> 'logan@x-men.org',
    'customer'=> array(
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
        'category'=> 'food'
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
      'tax_id'=> 'xmn671212drx',
      'company_name'=>'X-Men Inc.',
      'phone'=> '77-777-7777',
      'email'=> 'purshasing@x-men.org'
    )
  )
));
?>