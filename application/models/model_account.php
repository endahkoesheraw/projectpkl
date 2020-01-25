<?php

class Model_account extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database('mysql',true);
	 }


    function daftar($data) {   
    $this->db->insert('users',$data);   
   }  
   
   //Start: method tambahan untuk reset code  
   public function getUserInfo($id)  
   {  
     $q = $this->db->get_where('users', array('id' => $id), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }else{  
       error_log('no user found getUserInfo('.$id.')');  
       return false;  
     }  
   }  
   
   public function getUsersAll(){	  
     $this->db->order_by("name", "asc");
	$query=$this->db->get_where('users', array('roles' => 'REGULAR'));   
	return $query;  	  
   }  
   
  public function getUserInfoByEmail($email){	  
     $q = $this->db->get_where('users', array('email' => $email), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }  
   }  
   
   public function getUserInfoByEmailNonRegular($email){	  
		$q = $this->db->get_where('users', array(  
       'email' => $email,   
       'roles !=' => 'REGULAR'), 1);         
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }  
   }  
   
   public function getUserInfoByEmailAdmin($email){	  
		$q = $this->db->get_where('users', array(  
       'email' => $email,   
       'roles' => 'ADMINISTRATOR'), 1);         
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }  
   }  
   
   public function getUserInfoByEmailReviewer($email){	  
		$q = $this->db->get_where('users', array(  
       'email' => $email,   
       'roles' => 'REVIEWER'), 1);         
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }  
   }  
   
    public function getUserChangePass($user_id,$password_lama){	  
    $q = $this->db->get_where('users', array(  
       'id' => $user_id,   
       'password' => $password_lama), 1);         
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }  
   }  
   
   public function insertToken($user_id)  
   {    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(  
         'token'=> $token,  
         'user_id'=>$user_id,  
         'created'=>$date  
       );  
     $query = $this->db->insert_string('tokens',$string);  
     $this->db->query($query);  
     return $token . $user_id;  
       
   }  
   
   public function isTokenValid($token)  
   {  
     $tkn = substr($token,0,30);  
     $uid = substr($token,30);     
       
     $q = $this->db->get_where('tokens', array(  
       'tokens.token' => $tkn,   
       'tokens.user_id' => $uid), 1);               
           
     if($this->db->affected_rows() > 0){  
       $row = $q->row();         
         
       $created = $row->created;  
       $createdTS = strtotime($created);  
       $today = date('Y-m-d');   
       $todayTS = strtotime($today);  
         
       if($createdTS != $todayTS){  
         return false;  
       }  
         
       $user_info = $this->getUserInfo($row->user_id);  
       return $user_info;  
         
     }else{  
       return false;  
     }  
       
   }   
   
   public function updatePassword($post)  
   {    
     $this->db->where('id', $post['id']);  
     $this->db->update('users', array('password' => $post['password']));      
     return true;  
   }   
   
      public function aktivasiUser($post)  
   {    
     $this->db->where('email', $post);  
     $this->db->update('users', array('status' => 'ACTIVE'));      
     return true;  
   }  
   
    public function delete_users($user_id)
	{
		return $this->db->delete('users', array('id'=>$user_id));
	}
   
   //End
}
