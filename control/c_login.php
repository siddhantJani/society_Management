<?php
	
session_start();
	include("../model/m_login_process.php");

class control
{
	 

	
	function cont()
	{

		//$reg= new m_login();
		$obj_m=new m_login();

		$email=$_POST['loginUsername'];
		$pass=$_POST['loginPassword'];
		$type=$_POST['logintype'];
		$res=$obj_m->m_login_process($email,$pass,$type);
//echo mysqli_num_rows($res);
		
		if(mysqli_num_rows($res) >0)
		{

			while($row=$res->fetch_assoc())
			{

					/*$_SESSION['email']=$row['r_email'];
					$_SESSION['password'] =$row['r_password'];*/
					$id=$row['r_id'];
					$name=$row['r_name'];
					$semail=$row['r_email'];
					$stype=$row['r_type'];
					$img=$row['r_img'];
					//echo $id;
					//echo $stype;
					$_SESSION['id']= $id;
					$_SESSION['name']=$name;
					$_SESSION['email'] = $semail;
					$_SESSION['image']=$img;
					$_SESSION['type'] = $stype;

					if($_SESSION['type']=='Admin')
					{
						header("location:../view/admin/index.php");	
					}
					elseif($_SESSION['type']=='User')  
					{
						header("location:../view/user/uindex.php");	
					}

					
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