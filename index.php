<!DOCTYPE html>
<html>
	<head>
		<title>Test API de Conekta</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.5.0/js/conekta.js"></script>
		<script type="text/javascript" src="js/tokenization.js"></script>
	</head>
	<body>
		<form action="" method="POST" id="card-form">
			<span class="card-errors"></span>
			<div class="form-row">
				<label>
					<span>Nombre del tarjetahabiente</span>
					<input type="text" size="20" data-conekta="card[name]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Número de tarjeta de crédito</span>
					<input type="text" size="20" data-conekta="card[number]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>CVC</span>
					<input type="text" size="4" data-conekta="card[cvc]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Fecha de expiración (MM/AAAA)</span>
					<input type="text" size="2" data-conekta="card[exp_month]"/>
				</label>
				<span>/</span>
				<input type="text" size="4" data-conekta="card[exp_year]"/>
			</div>
			<!-- Información recomendada para sistema antifraude -->
			<div class="form-row">
				<label>
					<span>Calle</span>
					<input type="text" size="25" data-conekta="card[address][street1]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Colonia</span>
					<input type="text" size="25" data-conekta="card[address][street2]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Ciudad</span>
					<input type="text" size="25" data-conekta="card[address][city]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>Estado</span>
					<input type="text" size="25" data-conekta="card[address][state]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>CP</span>
					<input type="text" size="5" data-conekta="card[address][zip]"/>
				</label>
			</div>
			<div class="form-row">
				<label>
					<span>País</span>
					<input type="text" size="25" data-conekta="card[address][country]"/>
				</label>
			</div>
			<button type="submit">¡Pagar ahora!</button>
		</form>
	</body>
</html>

<?php require_once 'conektaPhp/conektaCharge.php'; ?>