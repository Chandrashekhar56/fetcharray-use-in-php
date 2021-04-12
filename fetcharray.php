<?php
		$a=mysqli_connect("localhost","root","","fetchdb");	
		$b="select * from student";
		$e=mysqli_query($a,$b);

		echo "<center><table border=10 bordercolor=red cellspacing=10 cellpadding=10>";
		echo "<tr><th>Rollno</th><th>sname</th><th>course</th><th>age</th></tr>";

		while($d=mysqli_fetch_array($e))
		{
			echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td></<tr>";
		}
		echo "</table></center>";
?>