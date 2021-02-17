<?php
include('conn.php');

class m_watch_complain
{
	
  	function m_watchcomplain()
	{	


		$sql="call selectcomplain()";
		$con= new connection();
		$c=$con->connectdb();
		
		$select=$c->prepare($sql);
		
		$select->execute();
		$res=$select->get_result();
		
	
		return $res;
		
		//header("location:../view/index.php");
	}

	
	
}


