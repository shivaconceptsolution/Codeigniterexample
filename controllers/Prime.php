<?php

class Prime extends CI_Controller
{
    
   function index()
   {
   	   $this->load->view('primeview');
   }
   function primecode()
   {
   	if(isset($_POST['btnsubmit']))
   	{
   	$num = $_POST['txtnum'];
   	for($i=2;$i<$num;$i++)
   	{
   		if($num%$i==0)
   		{
   			$res= "NOT PRIME";
   			break;
   		}
   	}
   	if($num==$i)
   		$res= "PRIME";
   	$arr = array("result"=>$res);
    $this->load->view('primeview',$arr);
}
else
{
$this->load->view('primeview');
}
   }

    

}




?>