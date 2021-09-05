<?php

class SlotModel extends CI_Model{
    

	public function fetchParkingSlots(){
		$query=$this->db->query("SELECT * FROM parking_spaces");
		return $query->result();
	}

	public function getAvailableParkingSlots(){
		$query=$this->db->query("SELECT * FROM parking_spaces WHERE availability='1' ");
		return $query->result();
	}

	public function fetchParkingSlot($space){
		$query=$this->db->query("SELECT * FROM parking_spaces WHERE space_id='$space' ");
		return $query->result();
	}




}
?>