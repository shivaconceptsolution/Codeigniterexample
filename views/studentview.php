<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo site_url(); ?>/Student/AddStudent" method="post">
<p>Enter rollno</p>
<p><input type="text" name="txtrno" /></p>
<p>Enter name</p>
<p><input type="text" name="txtname" /></p>
<p>Enter branch</p>
<p><input type="text" name="txtbranch" /></p>
<p>Enter fees</p>
<p><input type="text" name="txtfees" /></p>
<p><input type="submit" name="btnsubmit" value="Insert" /> </p>
</form>
<a href="<?php echo site_url(); ?>/student/viewstudent">View Student Record Click Here</a>
<?php
if(isset($res))
	echo $res;

?>
</body>
</html>