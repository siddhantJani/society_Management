<?php

include_once('../model/m_notify.php');

class c_fetch_complain
{
	public $count;

	function c_fetch()
	{

		$a=new m_fetch_complain();
		
		$res=$a->m_fetchcomplain();
//echo "hello";
		
	/*while($row=$res->fetch_assoc())
			{
				echo $row['com_id']."<br>";
				
			}
*/
			if(mysqli_num_rows($res)>1)
				{
					
					$this->count++;
					$_SESSION['count']=$count;
					
					//echo $this->count."<br>";

				}
				return $this->count;


	}

}
			

?>