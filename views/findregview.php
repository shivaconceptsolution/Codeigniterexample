<?php
//print_r($key);
?>
<form action="<?php echo site_url(); ?>/concept/reg"  method="post">
<input type="email" name="txtemail" placeholder="enter emailid" value="<?php echo $key[0]['email']; ?>" />
<br>
<input type="password" name="txtpass" placeholder="enter password" value="<?php echo $key[0]['pass']; ?>">
<br>
<input type="text" name="txtmobile" placeholder="enter mobileno" value="<?php echo $key[0]['mobile']; ?>">
<br>
<input type="text" name="txtfname" placeholder="enter fullname" value="<?php echo $key[0]['fullname']; ?>">
<br>
<input type="submit" name="btnsubmit" value="Register" />
</form>