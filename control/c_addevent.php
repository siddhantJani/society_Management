<?php
	
	include("../model/m_addevent.php");
	//$callmethod=$_GET["m"];
class c_addevent
{
	
	function addevent()
	{

		$eve= new event();

		$e_admin=$_POST['adminName'];
		$e_name=$_POST['eventName'];

		$e_tp=$_POST['eventtype'];
		$e_desc=$_POST['eventDescription'];
		$e_sdate=$_POST['startDate'];
		$e_edate=$_POST['endDate'];
		
		//$reg->a();
		$eve->m_event($e_admin,$e_name,$e_tp,$e_desc,$e_sdate,$e_edate);
		
	}
	function deleteevent()
	{

		$eve= new event();			
		$ev_id=$_GET['id'];

			//$reg->a();
		$eve->m_event_delete($ev_id);

	}
	function editevent()
	{
		
		include_once("../model/m_addevent.php");

		$eve= new event();
		$id=$_POST['UpdateEventId'];

		//$id=5;


		$eve->m_event_update($id);
		header("location:../view/admin/eventactions.php");
	}
	
}

$c_obj=new c_addevent();

	
if(isset($_GET['mode'])=='insertevent')
{
	//echo "hello";
	$c_obj->addevent();
}
if(isset($_GET['mod'])=='dltevent')
{
	//echo "hello";
	$c_obj->deleteevent();
}
if(isset($_GET['m'])=='editevent')
{
	//echo "hello";
	$c_obj->editevent();
}
	
?>