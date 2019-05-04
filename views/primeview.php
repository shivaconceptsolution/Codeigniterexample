<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
      input[type="text"]
      {
      	width:200px;
      	height: 30px;
      	background-color: blue;
      	color:white;
      }
      .part
      {
      	width:500px;
      	height: 200px;
      	border:2px solid red;
      	margin-top: 50px;
      	margin-left: 100px;
      	border-radius: 10px;
      }

	</style>
</head>
<body>
<div class="part">	
<h1>PRIME NUMBER PROGRAM</h1>

<form action="<?php echo site_url(); ?>/prime/primecode" method="post">
<input type="text" placeholder="enter number" name="txtnum" />
<br>
<br>
<input type="submit" value="btnsubmit" name="btnsubmit" />
<br>
<?php
if(isset($result))
{
	echo $result;
}
?>
</form>
</div>
</body>
</html>