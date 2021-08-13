<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// Main index
	public function index() {

		// Registration action
		if($this->input->post('saveclient')) {
			$fname= $this->input->post('firstname');
			$lname= $this->input->post('lastname');
			$uname= $this->input->post('username');
			$phone= $this->input->post('phone_no');
			$mail = $this->input->post('email');
			$pass = $this->input->post('password');
			$addr = $this->input->post('address');

			$check= $this->db->query("SELECT * FROM client WHERE username='$uname' OR email='$mail' ");

			if($check->num_rows()){
				$data['message']="This client already exists</h3>";
			} else {
				$sql = "INSERT INTO `client`(`firstname`, `lastname`, `username`, `phone_no`, `email`, `password`, `address`) VALUES ('$fname', '$lname', '$uname','$phone','$mail','$pass','$addr')";
				$this->db->query($sql);
				$data['message']="Customer is registered!</h3>";
			}			
		}


		// Registration action
		if($this->input->post('saveslot')) {
			$code = "PK-".rand(10000, 99999);
			$size = $this->input->post('space_size');
			$level= $this->input->post('space_level');

			$sql = "SELECT * FROM parking_spaces WHERE space_code='$code' ";
			$check= $this->db->query($sql);

			if($check->num_rows()) {
				$code = "PK-".rand(10000, 99999);
			} else {
				$sql = "INSERT INTO `parking_spaces`(`space_code`, `space_size`, `space_level`) VALUES ('$code', '$size', '$level')";
				$this->db->query($sql);
				$data['message']="New parking slot is created!</h3>";
			}			
		}

		// Loading template
		$this->load->view('templates/header');
		$this->load->view('templates/menus');
		$this->load->view('admin/home', @$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/downow');
	}






}
?>