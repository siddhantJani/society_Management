<?php
session_start();
class update_member
{
		public function model()
		{
			include_once('../model/reg_process.php');

			$dta=new m_register();
			return $dta;
		}
		function u_member()
		{
			$ini=array();
			include_once('../model/reg_process.php');
			//$dta=self::model();
			$id=$_SESSION['editId'];
			//echo $id;
			$ini=$a->update_data($id);
			//print_r($ini);
			return $ini;
		}
}

$h= new update_member();
$data=$h->u_member();
//print_r($data);
?>