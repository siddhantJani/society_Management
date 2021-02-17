<?php
	
	include("../model/m_addcomplain.php");
	//$callmethod=$_GET["m"];
class control
{
	
	function c_deletecomplaint()
	{
		//include_once("../model/reg_process.php");
		
		$r=new complain();
		$id=$_REQUEST['id'];

		//$id=5;
		//echo $id;
		$r->delete_complaint($id);
		
	}
}
$c_obj=new control();

if(isset($_GET['mod'])=='delete')
{
	//echo "hello";

	$c_obj->c_deletecomplaint();


}

	
	
?>