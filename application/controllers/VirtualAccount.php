<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Xendit\Xendit;

class VirtualAccount extends CI_Controller {

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
		$this->load->view('virtual_account');
	}

	public function submit()
	{
		$extId = $this->input->post("external_id");
		$bankCode = $this->input->post("bank_code");
		$name = $this->input->post("name");

		// https://github.com/xendit/xendit-php/blob/master/examples/VirtualAccountExample.php
		Xendit::setApiKey('');

		$params = [
			"external_id" => $extId,
			"bank_code" => $bankCode,
			"name" => $name
		];

		$createVA = \Xendit\VirtualAccounts::create($params);
		var_dump($createVA);
	}
}
