<?php
	
	//$conn=new mysqli("localhost","root","root","society");
	class connection
	{
		public $conn;
	
		function connectdb()
		{
			
			$this->conn= new  mysqli('localhost', 'root', 'root','society');
			if(!$this->conn)
			{
				echo "not";	
			}
			return $this->conn;
		}
	}
	
	
	
?>