<section>
<div id="part1">	
<h1>Welcome in HOME PAGE</h1>
<?php
echo print_r($key);
?>
<form action="<?php echo site_url(); ?>/concept/reg"  method="post">
<input type="email" name="txtemail" placeholder="enter emailid">
<br>
<input type="password" name="txtpass" placeholder="enter password">
<br>
<input type="text" name="txtmobile" placeholder="enter mobileno">
<br>
<input type="text" name="txtfname" placeholder="enter fullname">
<br>
<input type="submit" name="btnsubmit" value="Register" />
</form>
<?php
echo @$key;
?>
</div>
<div id="part2">
<img src="<?php echo base_url(); ?>/img/p1.png" id="img2" width="550" height="300" />
</div>


</section>