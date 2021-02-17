<?php
include('../model/reg_process.php');

class U_member
{
		function edit()
		{
			$id=$_POST['uid'];
			echo $id."__";
			$a=new m_register();


			$ini=$a->edit_data($id);
		}
}

$c_attandance= new U_member();
$c_attandance->edit();

header("location:../view/admin/listuser.php");

?>