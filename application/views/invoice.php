<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Invoice</title>
</head>
<body>
<div id="container">
	<h1>Invoice</h1>

	<div id="body">
		<form action="invoice/submit" method="post">

		<p>Input External ID: <input type="text" id="external_id" name="external_id"></p>
		<p>Input Payer Email: <input type="text" id="payer_email" name="payer_email"></p>
		<p>Input Description: <input type="text" id="description" name="description"></p>
		<p>Input Amount: <input type="text" id="amount" name="amount"></p>
		
		<input type="submit" value="Submit">

		</form>
	</div>
</div>

</body>
</html>

