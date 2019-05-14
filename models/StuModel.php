<?php
class StuModel extends CI_Model
{
   function __construct()
   {
   	   $this->load->database();
   }
   function AddStudent($rno,$sname,$branch,$fees)
   {
   	$res=$this->db->insert("student",array("Rno"=>$rno,"Sname"=>$sname,"Branch"=>$branch,"Fees"=>$fees));
     return $res;

   }	

   function ViewStudent()
   {
       $res= $this->db->get("student");
       return $res->result_array();

   }

}

?>