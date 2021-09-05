<?php

class ClientModel extends CI_Model{  
    
    public function insertSomething($data) {
    	// Thru ajax
		if($this->db->insert('table_name', $data)) {
			return 1;	
		} else {
			return 0;	
		}
    }

    public function fetchAllClients(){
		$query=$this->db->query("SELECT * FROM clients");
		return $query->result();
	}

    public function fetchClients(){
		$query=$this->db->query("SELECT * FROM client WHERE status='1' ");
		return $query->result();
	}

	public function fetchOneClient($id){
		$query=$this->db->query("SELECT * FROM client WHERE client_id='$id' ");
		return $query->result();
	}

	public function fetchClientsFromLast(){
		$query=$this->db->query("SELECT * FROM client ORDER BY client_id DESC ");
		return $query->result();
	}

    public function fetchClientsDisx(){
		$query=$this->db->query("SELECT * FROM client WHERE status='0' ");
		return $query->result();
	}


	// Not used
	public function disableClient($client){
		$query=$this->db->query("UPDATE client SET status='0' WHERE client_id='$client' ");
		return $query->result();
	}


}
?>