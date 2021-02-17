<?php
include('../model/m_addcomplain.php');
class complain_edit
{


	function edit_complaint()
	{
		$id=$_POST['edit_id_complain'];
		//echo $id."__";
		$a=new Complain();


		$ini=$a->edit_data_complaint($id);
		header('location:../view/user/editcomplaint.php');
	}
}

$asd=new complain_edit();
$asd->edit_complaint();
?>