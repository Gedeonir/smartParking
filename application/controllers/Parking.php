<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parking extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(['form_validation','session']);
		$this->load->model('ClientModel');
		$this->load->model('ParkingModel');
		$this->load->model('SlotModel');

	}

	public function index() {
		$result['bookingData']= $this->ClientModel->fetchClientsFromLast();

		$this->load->view('templates/header');
		$this->load->view('templates/menus', @$result);
		$this->load->view('admin/booking', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');
	}


	public function bookParking() {

		$client_id=$this->uri->segment(3);
		$result['avSlotData']= $this->SlotModel->getAvailableParkingSlots();
		$result['vehicleData']=$this->ParkingModel->getClientVehicles($client_id);
		$result['clientData']= $this->ClientModel->fetchOneClient($client_id);
		$result['historyCount']= $this->ParkingModel->countBookingHistory($client_id);

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus', @$result);
		$this->load->view('appages/availableslots', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');

		if($this->input->post('saveBooking')) {
			$slot_id = $this->input->post('booked_slot');
			$veh_id  = $this->input->post('veh_id');

			$sql = "SELECT * FROM booking WHERE space_id='$slot_id' AND owner_id='$client_id' ";
			$check= $this->db->query($sql);

			if($check->num_rows()) {
				$this->session->set_flashdata('warning', "You're already booked this!");
				redirect(base_url("parking/arrange/$client_id"));

			} else {
			$query= "INSERT INTO `booking`(`owner_id`, `veh_id`, `space_id`, `bk_status`) VALUES ('$client_id', '$veh_id', '$slot_id', 'Arrival')";
			$this->db->query($query);

			// Update Slots
			$upd_query= "UPDATE `parking_spaces` SET `availability` = '0' WHERE space_id= '$slot_id' ";
			$this->db->query($upd_query);

			$this->session->set_flashdata('message', "Booking is successful!");
			redirect(base_url("parking/arrange/$client_id"));
			}
		}
	}



	public function checkParking() {

		$bookingId=$this->uri->segment(3);
		$result['parkingInfo']=$this->ParkingModel->getParkingInfo($bookingId);

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus', @$result);
		$this->load->view('admin/checkbooking', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');

		if($this->input->post('saveBooking')) {
			$slot_id = $this->input->post('booked_slot');
			$veh_id  = $this->input->post('veh_id');

			$sql = "SELECT * FROM booking WHERE space_id='$slot_id' AND owner_id='$client_id' ";
			$check= $this->db->query($sql);

			if($check->num_rows()) {
				$this->session->set_flashdata('warning', "You're already booked this!");
				redirect(base_url("parking/arrange/$client_id"));

			} else {
			$query= "INSERT INTO `booking`(`owner_id`, `veh_id`, `space_id`, `bk_status`) VALUES ('$client_id', '$veh_id', '$slot_id', 'Arrival')";
			$this->db->query($query);

			// Update Slots
			$upd_query= "UPDATE `parking_spaces` SET `availability` = '0' WHERE space_id= '$slot_id' ";
			$this->db->query($upd_query);

			$this->session->set_flashdata('message', "Booking is successful!");
			redirect(base_url("parking/arrange/$client_id"));
			}
		}
	}


	public function finishParkingDeed() {

		$bookingId=$this->uri->segment(3);

		// Update parking booking
		$upd_query= "UPDATE `booking` SET `bk_status` = 'Paid' WHERE bk_id= '$bookingId' ";
		$this->db->query($upd_query);

		// $query= "INSERT INTO `payment`(`py_amount`, `duration`, `client_id`, `veh_id`, `discount`, `py_date`) VALUES ()";
		// $this->db->query($query);
		$this->session->set_flashdata('message', "Booking action is complete!");
		redirect(base_url("parking/check/$bookingId"));
	}



	public function bookParkingClient() {

		$userc = $this->session->userdata('clogged_in');
		extract($userc);
		$result['avSlotData']= $this->SlotModel->getAvailableParkingSlots();
		$result['vehicleData']=$this->ParkingModel->getClientVehicles($client_id);
		$result['clientData'] =$this->ClientModel->fetchOneClient($client_id);
		$result['historyCount']= $this->ParkingModel->countBookingHistory($client_id);

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus_client', @$result);
		$this->load->view('client/bookparking', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');


		if($this->input->post('saveBooking')) {
			$slot_id = $this->input->post('booked_slot');
			$veh_id  = $this->input->post('veh_id');

			$sql = "SELECT * FROM booking WHERE space_id='$slot_id' AND owner_id='$client_id' ";
			$check= $this->db->query($sql);

			if($check->num_rows()) {
				$this->session->set_flashdata('warning', "You're already booked this!");
				redirect(base_url("client/parking"));
			} else {
			$query= "INSERT INTO `booking`(`owner_id`, `veh_id`, `space_id`, `bk_status`) VALUES ('$client_id', '$veh_id', '$slot_id', 'Arrival')";
			$this->db->query($query);

			// Update Slots
			$upd_query= "UPDATE `parking_spaces` SET `availability` = '0' WHERE space_id= '$slot_id' ";
			$this->db->query($upd_query);



			$this->session->set_flashdata('message', "Booking is successful!");
			redirect(base_url("client/parking"));
			}
		}
	}


		// Parking requests
	public function parkingRequests() {

		$result['reqData']= $this->ParkingModel->getParkingRequests();

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('admin/requests', @$result);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');
		$this->load->view('templates/modals');
	}



}
?>