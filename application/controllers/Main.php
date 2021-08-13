<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	// Main index
	public function index() {

		// Views
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('admin/home');
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');
	}


}
?>