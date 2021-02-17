<?php
	
session_start();
	include("../model/m_watch_complain.php");

class control
{
	 

	
	function cont()
	{
		
		$obj_m=new m_watch_complain();

		$email=$_POST['loginUsername'];
		$pass=$_POST['loginPassword'];
		$type=$_POST['logintype'];
		$res=$obj_m->m_watchcomplain();
//echo mysqli_num_rows($res);
		
		if(mysqli_num_rows($res) >0)
		{

			while($row=$res->fetch_assoc())
			{

					/*$_SESSION['email']=$row['r_email'];
					$_SESSION['password'] =$row['r_password'];*/
					
					$semail=$row['r_email'];
					$stype=$row['r_type'];

					//echo $stype;

					$_SESSION['email'] = $semail;

					$_SESSION['type'] = $stype;

					header("location:../view/index.php");
			}

		}
		else
		{
			header("location:../view/login.php");
		}




		
		//$reg->m_login_process($email,$pass,$type);

			/*if(!isset($_POST['submit']))
			{
				header("location:login.php");
				exit();
			}*/

			
	}
}

$c_obj=new control();
$c_obj->cont();
	
	
	

?>