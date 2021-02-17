<?php

include ('conn.php');



	class displayuser
	{
		function displayuser1()
		{
			$sql="SELECT * FROM register";
			$con= new connection();
			$c=$con->connectdb();
			$add=$c->query($sql);
			

			$count=mysqli_num_rows($add);
			echo $count;

		}
		function displaycomplaints()
		{
			$sql="SELECT * FROM complain";
			$con= new connection();
			$c=$con->connectdb();
			$add=$c->query($sql);
			

			$count=mysqli_num_rows($add);
			echo $count;

		}
	}
$ad=new displayuser();

?>