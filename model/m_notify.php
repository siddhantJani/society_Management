<?php
include_once('conn.php');

class m_fetch_complain
{
	
	
  	function m_fetchcomplain()
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


		?>

