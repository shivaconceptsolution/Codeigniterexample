<?php
class Login extends CI_Controller
{
	 function __construct()
	 {
         parent::__construct();
         $this->load->model('loginmodel');

	 }
      function index()
      {
      	 $this->load->view('loginview');
      }
      function logincode()
      {
         $user= $this->input->post('txtuser');
         $pass=$this->input->post('txtpass');
         $c=$this->loginmodel->loginCode($user,$pass);
         if($c>0)
         {
         	//echo "Login SuccessFully";
         	redirect('student/index');
         }
         else
         {
         	echo "invalid userid and password";
         }


      }



}






?>