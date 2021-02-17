<?php
	
	include("../model/m_addcomplain.php");
	//$callmethod=$_GET["m"];
class control
{
	
	function cont()
	{
		$reg= new Complain();

		$com_email=$_POST['com_email'];
		$com_select=$_POST['select_complain'];
		$com_des=$_POST['com_description'];
		
		//$reg->a();
		$reg->m_complain($com_email,$com_select,$com_des);
	}
}
$c_obj=new control();
$c_obj->cont();
	
	
	
?>