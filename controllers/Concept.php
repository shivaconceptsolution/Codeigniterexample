<?php

class Concept extends CI_Controller
{
     function __construct()
     {
          parent::__construct();
          $this->load->model('Guest');
     }
     function index()
     {
     	$this->load->view('header');
     	$this->load->view('homeview');
     	$this->load->view('footer');

     }
     function reg()
     {
    $r= $this->Guest->reginsert($_POST['txtemail'],$_POST['txtpass'],$_POST['txtmobile'],$_POST['txtfname']);

    if($r)
     $res= "Data inserted SuccessFully";
    else
      $res= "Data not inserted SuccessFully";
     $data= array('key'=>$res);
     $this->load->view('header');
        $this->load->view('homeview',$data);
        $this->load->view('footer');

     }
     function about()
     {
        $this->load->view('header');
        $res = $this->Guest->viewreg();
        $data = array("key"=>$res);
     	$this->load->view('aboutview',$data);
     	$this->load->view('footer');
     }
     function editreg()
     {
          $res = $this->Guest->findreg($_GET['q']);
          $data = array("key"=>$res);
          $this->load->view('findregview',$data);
          
     }
     function deletereg($e)
     {

     }
     function services()
     {
       $this->load->view('header');
     	$this->load->view('servicesview');
     	$this->load->view('footer');
     }
     function gallery()
     {
     	$this->load->view('header');
     	$this->load->view('galleryview');
     	$this->load->view('footer');

     }
     function contact()
     {
     	$this->load->view('header');
     	$this->load->view('contactview');
     	$this->load->view('footer');

     }
  


}






?>