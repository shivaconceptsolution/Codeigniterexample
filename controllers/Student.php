<?php
class Student extends CI_Controller
{
	  function __construct()
	  {
	  	parent::__construct();
	  	$this->load->model('stumodel');
	  }
    
     function index()
     {
     	$this->load->view('studentview');
     }
     function AddStudent()
     {
       $res=$this->stumodel->AddStudent($this->input->post('txtrno'),$this->input->post('txtname'),$this->input->post('txtbranch'),$this->input->post('txtfees'));
       if($res)
       	$data= array("res"=> "Student Information Added SuccessFully");
       //	echo "Student Information Added SuccessFully";
       else
       	$data= array("res"=> "Student Information not Added SuccessFully");
       	//echo "Student Information not Added SuccessFully";
       $this->load->view('studentview',$data);
     }
     function viewstudent()
     {
     	$res=$this->stumodel->ViewStudent();
     	$data = array("key"=>$res);
     	$this->load->view('sview',$data);
     }


}




?>