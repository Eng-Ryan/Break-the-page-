<?php


include "connection.php";
extract($_POST);
if(isset($login))
{

	if (empty($_POST) === false) 
	{
		$email=filter_input(INPUT_POST, 'e', FILTER_SANITIZE_STRING); 
		$p=filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING); 
		$stmt=$conn->prepare("select * from regis where email=:email");
		$stmt->execute(array(":email"=>$e));
		$ft=$stmt->fetch(PDO::FETCH_ASSOC);
		if($stmt->rowCount()>0)
			{
				if(md5($p)==$ft['pass'])
					{
						$_SESSION['email']=$e;
						header("location: home.php");
			
					}
				else
					{
						echo "wrong mail or pass!";
					}
			}
	}
}else {
    echo("$email is not a valid email address");
}
$title = "Coffee Shop";
$content = '';
include 'Template.php';


?>