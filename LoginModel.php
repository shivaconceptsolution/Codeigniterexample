<?php
class LoginModel extends CI_Model
{
   function __construct()
   {
   	parent::__construct();
   	$this->load->database();
   }
   function loginCode($user,$pass)
   {
      $res = $this->db->get_where('register',array('email'=>$user,'pass'=>$pass));
      return $res->num_rows();
   }

}

?>