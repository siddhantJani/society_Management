 <?php

	include('conn.php');


class m_register
{
	function reg_process($n,$e,$h,$m,$p,$r)
	{

		$img="../upload/1.jpg";

		$sql="INSERT INTO register
    (r_name,r_email,r_house_no,r_mobile_no,r_password,r_type,r_img)
    VALUES('$n','$e',$h,$m,'$p','$r','$img');";
		$con= new connection();
		$c=$con->connectdb();
		
		$ins=$c->query($sql);
		

		

		
		/*$sql="call register(?,?,?,?,?,?)";
		$con= new connection();
		$c=$con->connectdb();
		$ins=$c->prepare($sql);
		$ins->bind_param("ssssss",$n,$e,$h,$m,$p,$r);
		$ins->execute();*/

		
		







		
	}

	function listuser()
	{

		$sql="call listuser()";
		$con= new connection();
		$c=$con->connectdb();
		
		$select=$c->prepare($sql);
		
		$select->execute();
		$res=$select->get_result();	
	
		return $res;
	}

	function deleteuser($d)
	{
		

		$sql="call deleteuser(?)";
		$con= new connection();
		$c=$con->connectdb();
		
		$del=$c->prepare($sql);
		$del->bind_param("s",$d);
		$del->execute();
		header("location:../view/admin/listuser.php");
	
	}

	function updateuser($u)
	{
		

		$sql="UPDATE register SET r_name= WHERE id=2";
		
		$con= new connection();
		$c=$con->connectdb();
		$del=$c->prepare($sql);
		$del->bind_param("s",$d);
		$del->execute();
		header("location:../view/admin/listuser.php");
	
	}

	public function update_data($id)
	{
		//echo $id;
		
		$da=array();

		$con= new connection();
		$c=$con->connectdb();
		$d=$c->query("SELECT * FROM register where r_id=$id");
		if(mysqli_num_rows($d)>0)
		{
			while($rows=$d->fetch_object())
			{
				$da[]=$rows;
			}
		}
		return $da;
	}
	

	public function edit_data($id)
	{
		$con= new connection();
		$c=$con->connectdb();
		
		$name=$_POST['updateName'];
		$email=$_POST['updateEmail'];
		$house=$_POST['updateHouseNo'];
		$mobile=$_POST['updateMobile'];
		$pass=$_POST['updatePassword'];
		$type=$_POST['updateType'];
		
		//echo $type;			

		$ins=$c->query("UPDATE register SET r_name='$name',r_email='$email',
			r_house_no='$house',r_mobile_no='$mobile',r_password='$pass',r_type='$type' WHERE r_id=$id");
		return $ins;
	}
	
}
	$a=new m_register();
	//$a->reg_process("shivay","a@gmail.com","102","8200","asd","Admin");
	

?>