<?php
class Guest extends CI_Model
{
	function __construct()
	{
	   parent::__construct();
	   $this->load->database();

	}

	function reginsert($e,$p,$m,$f)
	{
       $res= $this->db->insert('Register',array("email"=>$e,"pass"=>$p,"mobile"=>$m,"fullname"=>$f));
       return $res;

	}
	function viewreg()
	{
       $res = $this->db->get('Register');
       return $res->result_array();

	}
	function findreg($e)
	{
		$res = $this->db->get_where('Register',array("email"=>$e));
		return $res->result_array();
	}


}




?>