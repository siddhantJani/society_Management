 <?php

include_once("../model/reg_process.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class control
{

	
	function cont()
	{
		$reg= new m_register();

		$name=$_POST['registerUsername'];
		$email=$_POST['registerEmail'];
		$house=$_POST['registerHouse'];
		$mobile=$_POST['registerMobile'];
		$pass=$_POST['registerPassword'];
		$type=$_POST['registeType'];
		

		//echo $type;
		//$reg->a();
		$apk=$reg->reg_process($name,$email,$house,$mobile,$pass,$type);
		


		require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
		require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
		require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                   
		$mail->Host = 'smtp.gmail.com';             
		$mail->SMTPAuth = true;                              
		$mail->Username = 'siddhant.addweb@gmail.com';              
		$mail->Password = 'AddWEb@2122020';                          
		$mail->SMTPSecure = 'tls';                         
		$mail->Port = 587;                                   

		$mail->From = $email;
		$mail->FromName = 'Siddhant';
		$mail->addAddress($email);             


		$mail->isHTML(true);                                 

		$mail->Subject = 'Here is the subject';
		//$mail->Body    = '<b>Username:-</b>$email</br><b>Password:-</b>$pass';
		$mail->Body = 'Login Details'.'<br>'.'Email'.':'.' '.$email.'<br>'.'Password'.':'.' '.$pass;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		// var_dump($mail);
		if(!$mail->send()) 
		{
		    echo 'Message could not be sent.';
		    // var_dump($mail);
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 
		else 
		{
		    echo 'Message has been sent';
		}


		header("location:../view/admin/index.php");

	}

	function c_listuser()
	{
		include_once("../../model/reg_process.php");
		$r=new m_register();
		$res=$r->listuser();
		/*while($row=$res->fetch_assoc())
		{
			echo $row['r_name']."<br>";
		}*/


		return $res;
	}

	function c_deleteuser()
	{
		include_once("../model/reg_process.php");
		
		$r=new m_register();
		$id=$_REQUEST['id'];

		//$id=5;
		//echo $id;
		$r->deleteuser($id);
		
	}

	function c_updateuser()
	{
		include_once("../model/reg_process.php");
		
		$r=new m_register();
		$id=$_REQUEST['id'];

		//$id=5;
		//echo $id;
		$r->updateuser($id);
		
	}
	

}

$c_obj=new control();
//$c_obj->cont();
//$c_obj->c_deleteuser();

if(isset($_GET['mode'])=='insert')
{
	//echo "hello";
	$a=$c_obj->cont();
}
if(isset($_GET['mod'])=='delete')
{
	//echo "hello";
	$a=$c_obj->c_deleteuser();

}
	
	
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>