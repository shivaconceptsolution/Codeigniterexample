<?php
class Swap extends CI_Controller
{
     function index()
     {
     	$this->load->view('swapview');
     }
     function swapcode()
     {
     	echo "SWAP PROGRAM CODE ";
     	$a = $_POST['t1'];
     	$b = $_POST['t2'];
     	$temp=$a;
     	$a=$b;
     	$b=$temp;
     	echo "a = $a and b=$b";
     }

}




?>