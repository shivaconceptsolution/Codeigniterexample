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

   function UpdateStudent($rno,$sname,$branch,$fees)
   {
     $this->db->where('Rno',$rno);
    $res= $this->db->update("Student",array("Sname"=>$sname,"Branch"=>$branch,"Fees"=>$fees));
    return $res;
   }
    function DeleteStudent($rno)
   {
    
    $res= $this->db->delete("Student",array("Rno"=>$rno));
    return $res;
   }
   function ViewStudent()
   {
       $res= $this->db->get("student");
       return $res->result_array();

   }
   function EditStudent($rno)
   {
      $res= $this->db->get_where('Student',array("Rno"=>$rno));
      return $res->result_array();

   }

}

?>