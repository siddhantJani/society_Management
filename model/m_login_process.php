<?php
include('conn.php');

class m_login
{
	
   
	function m_login_process($a,$b,$d)
	{	

		
		$sql="call login(?,?,?)";
		$con= new connection();
		$c=$con->connectdb();
		$select=$c->prepare($sql);
		$select->bind_param("sss",$a,$b,$d);
		$select->execute();
		$res=$select->get_result();
		return $res;
		
		//header("location:../view/index.php");
	}
	
	
}
?>