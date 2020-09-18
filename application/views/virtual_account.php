<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Virtual Account</title>
</head>
<body>
<div id="container">
	<h1>Virtual Account</h1>

	<div id="body">
		<form action="virtualaccount/submit" method="post">

		<p>Input External ID: <input type="text" id="external_id" name="external_id"></p>
		<p>
			Select bank:
			<select name="bank_code" id="bank_code">
				<option value="MANDIRI">MANDIRI</option>
				<option value="BNI">BNI</option>
				<option value="BRI">BRI</option>
			</select>
		</p>
		<p>Input VA Name: <input type="text" id="name" name="name"></p>
		
		<input type="submit" value="Submit">

		</form>
	</div>
</div>

</body>
</html>

