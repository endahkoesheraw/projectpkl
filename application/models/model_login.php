<?php

class Model_login extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database('mysql',true);
	 }

    function cek_users($email, $password) {		
		return $this->db->get_where('users',array('email'=>$email,'password'=>$password,'status'=>'ACTIVE'));		
    }
	
	function cek_period() {		
		$sql = "SELECT * FROM period WHERE now()>=start_date and now()<=end_date";
        $result = $this->db->query($sql);
        if($result->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }	
    }

}
