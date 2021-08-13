<?php

class AdminModel extends CI_Model{  
    
    public function insertSomething($data) {
    	// Thru ajax
		if($this->db->insert('table_name', $data)) {
			return 1;	
		} else {
			return 0;	
		}
    }

    function fetchClients(){
		$query=$this->db->query("SELECT * FROM clients");
		return $query->result();
	}



}
?>