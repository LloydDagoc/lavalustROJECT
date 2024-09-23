<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	/*public function _construct();
	parent:: _construct();
	$this->call->database();*/


	public function index() {
		$this->call->view('welcome_page');
	}
}
?>