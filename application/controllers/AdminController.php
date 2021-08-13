<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function displayClients() {
		$result['clientData']= $this->AdminModel->fetchClients();

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('admin/view', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');

	}


}
?>