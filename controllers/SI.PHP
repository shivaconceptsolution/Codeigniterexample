<?php
class SI extends CI_Controller
{
    function index()
    {
        $this->load->view('siview');

    }
     function sicode()
    {
      $p = $_POST['txtp'];
      $r = $_POST['txtr'];
      $t = $_POST['txtt'];
      $si = ($p*$r*$t)/100;
      echo "simple ineterest is ".$si;

    }


}





?>