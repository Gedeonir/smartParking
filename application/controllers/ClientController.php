<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

     public function __construct() {
          
          parent::__construct();
         
          // Loading models manually
          $this->load->model('ClientModel');
     }


	public function displayClients() {
		$result['clientData']= $this->ClientModel->fetchClients();

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('client/clients', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');

	}

	public function displayClientsDisx() {
		$result['clientData']= $this->ClientModel->fetchClientsDisx();

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('client/clients_disabled', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');

	}


	public function disableClient() {

		$client_id=$this->uri->segment(3);
		// $data['clientData']=$this->ClientModel->disableClient($client_id);

		$sql = "UPDATE `client` SET `status`='0' WHERE client_id='$client_id' ";
		$this->db->query($sql);
		$this->session->set_flashdata('message', "Client's disabled!");
		redirect(base_url("index.php/clients"));
	}

	public function enableClient() {

		$client_id=$this->uri->segment(3);

		$sql = "UPDATE `client` SET `status`='1' WHERE client_id='$client_id' ";
		$this->db->query($sql);
		$this->session->set_flashdata('message', "Client's enabled!");
		redirect(base_url("index.php/clients/inactive"));
	}




	// Slots
	public function displaySlots() {
		$result['clientData']= $this->ClientModel->fetchParkingSlots();

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('admin/slots', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');

	}



}
?>