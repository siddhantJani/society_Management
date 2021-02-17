<?php

	include("conn.php");

	class event
	{
		function m_event($ad,$n,$e,$h,$d,$f)
		{
			$sql="call add_event(?,?,?,?,?,?)";
			$con= new connection();
			$c=$con->connectdb();
			$insert=$c->prepare($sql);
			$insert->bind_param("ssssss",$ad,$n,$e,$h,$d,$f);
			$insert->execute();
			
			header("location:../view/admin/event.php");

			

		}
		function m_display_event()
		{	


			$sql="call display_event()";
			$con= new connection();
			$c=$con->connectdb();
			
			$select=$c->prepare($sql);
			
			$select->execute();
			$res=$select->get_result();
			
		
			return $res;
			
			//header("location:../view/index.php");
		}

		function m_event_delete($ev_id)
		{
			$sql="DELETE FROM event WHERE ev_id=$ev_id";
			$con= new connection();
			$c=$con->connectdb();
			$dlt=$c->query($sql);

			header("location:../view/admin/eventactions.php");



		}
		public function select_event($id)
		{
			//echo $id;

			$da=array();

			$con= new connection();
			$c=$con->connectdb();
			$d=$c->query("SELECT * FROM event WHERE ev_id=$id");
			if(mysqli_num_rows($d)>0)
			{
				while($rows=$d->fetch_object())
				{
					$da[]=$rows;
				}
			}
			return $da;
		}
		public function m_event_update($id)
		{

			$con= new connection();
			$c=$con->connectdb();

			$organizer_name=$_POST['UpdateadminName'];
			$event_name=$_POST['UpdateEventName'];
			$event_type=$_POST['UpdateEventType'];
			$event_description=$_POST['UpdateEventDescription'];
			$starting_date=$_POST['UpdateStartDate'];
			$ending_date=$_POST['UpdateEndDate'];

			//echo $type;

			$ins=$c->query("UPDATE event SET ev_admin='$organizer_name',ev_name='$event_name',
			ev_type='$event_type',ev_desc='$event_description',start_date='$starting_date',end_date='$ending_date' WHERE
			ev_id=$id");
			return $ins;
		}

	}


?>

