<?php

	include("conn.php");

	class Complain
	{
		function m_complain($n,$e,$h)
		{
			$sql="call add_complain(?,?,?)";
			$con= new connection();
			$c=$con->connectdb();
			$insert=$c->prepare($sql);
			$insert->bind_param("sss",$n,$e,$h);
			$insert->execute();
			header("location:../view/user/addcomplain.php");

			

		}

		public function update_data_complaint($id)
		{
			//echo $id;

			$da=array();

			$con= new connection();
			$c=$con->connectdb();
			$d=$c->query("SELECT * FROM complain where com_id=$id");
			if(mysqli_num_rows($d)>0)
			{
				while($rows=$d->fetch_object())
				{
					$da[]=$rows;
				}
			}
			return $da;
		}	

		public function edit_data_complaint($id)
		{
			$con= new connection();
			$c=$con->connectdb();

			$name=$_POST['edit_email'];
			$type=$_POST['edit_complain_type'];
			$desc=$_POST['edit_description'];



			//echo $type;

			$ins=$c->query("UPDATE complain SET com_name='$name',com_drpt='$type',
			com_des='$desc' WHERE com_id=$id");
			return $ins;
		}

		function display_total_complaints()
		{
			$em=$_SESSION['email'];
			$sql="SELECT * FROM complain WHERE com_name='$em'";
			$con= new connection();
			$c=$con->connectdb();
			$add=$c->query($sql);


			$count=mysqli_num_rows($add);
			echo $count;

		}

		function delete_complaint($d)
		{

			//include_once("conn.php");
			$sql="DELETE FROM complain WHERE com_id='$d'";
			$con= new connection();
			$c=$con->connectdb();

			$del=$c->query($sql);

			header("location:../view/user/deletecomplaint.php");

		}
	}


?>

