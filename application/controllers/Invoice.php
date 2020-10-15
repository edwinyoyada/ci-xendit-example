<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Xendit\Xendit;

class Invoice extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('invoice');
	}

	public function submit()
	{
		$extId = $this->input->post("external_id");
		$email = $this->input->post("payer_email");
		$description = $this->input->post("description");
		$amount = $this->input->post("amount");

		// https://github.com/xendit/xendit-php/blob/master/examples/InvoiceExample.php
		Xendit::setApiKey('xnd_production_21uAYY7p2te4yLC8AFPKpw7ZcQQ3KL9JULvqEupsdRNEJD8zlMh2NwJnNg5xhk');

		$params = [
			"external_id" => $extId,
			"payer_email" => $email,
			"description" => $description,
			"amount" => $amount,

			// redirect url if the payment is successful
			"success_redirect_url"=> "http://localhost:8888/ci-xendit-example/index.php/invoice/success",

			// redirect url if the payment is failed
			"failure_redirect_url"=> "http://localhost:8888/ci-xendit-example/index.php/invoice/failure",
		];

		$invoice = \Xendit\Invoice::create($params);

		// this will automatically redirect to invoice url
		header("Location: ".$invoice["invoice_url"]);		
	}

	public function success()
	{
		echo("success");
	}

	public function failure()
	{
		echo("failure");
	}
}
