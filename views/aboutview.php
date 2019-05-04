<section>
	
<h1>Welcome in ABOUT PAGE</h1>
<table border="1">
<tr><th>Emailid</th><th>Password</th><th>Mobileno</th><th>Fullname</th></tr>

<?php
foreach($key as $r)
{

    echo "<tr>";
	foreach ($r as $k => $v) {
		echo "<td>$v </td>";
	}?>
<td><a href="<?php echo site_url(); ?>/concept/editreg?q=<?php echo $r['email'] ?>">EDIT</a>||<a href="deletereg.php?q=">Delete</a></td>

	<?php

	echo "</tr>";
}
?>
</table>
</section>