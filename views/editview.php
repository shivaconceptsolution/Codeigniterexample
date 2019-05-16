<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	//print_r($key);
	?>
<form action="<?php echo site_url(); ?>/Student/UpdateStudent" method="post">
<p>Enter rollno</p>
<p><input type="text" name="txtrno" value="<?php echo $key[0]['Rno']; ?>" /></p>
<p>Enter name</p>
<p><input type="text" name="txtname" value="<?php echo $key[0]['Sname']; ?>"/></p>
<p>Enter branch</p>
<p><input type="text" name="txtbranch" value="<?php echo $key[0]['Branch']; ?>"/></p>
<p>Enter fees</p>
<p><input type="text" name="txtfees" value="<?php echo $key[0]['Fees']; ?>"/></p>
<p><input type="submit" name="btnsubmit" value="Insert" /> </p>
</form>
<a href="<?php echo site_url(); ?>/student/viewstudent">View Student Record Click Here</a>
<?php
if(isset($res))
	echo $res;

?>
</body>
</html>