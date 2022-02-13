<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="favicon.ico" >
        <title>REG</title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Coffee.php">Coffee</a></li>
					<li><a href="Management.php">Management</a></li>					
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
				

<?php
include "connection.php";
extract($_POST);
if(isset($submit))
{
	
	$p = md5(filter_var($p, FILTER_SANITIZE_STRING));
	$stmt=$conn->query("insert into regis (name, email, mob, pass) values ('$n', '$e', '$nm', '$p')");
	
	if($stmt->rowCount()>0)
	{
		echo "Welcome To Secure World....  ".$n."<br> You Are Successfully Registrated.";
		
		echo "<form action='Home.php' align='right'>
					<button>Admin Panel</button>
				</form>";

		echo "<form action='Management.php' align='right'>
					<button>GO BACK</button>
				</form>";
				
		echo "<form action='logout.php' align='right'>
					<button>LOG OUT</button>
				</form>";		

	}
	else
	{
		echo "not registered";
	}
}

?>
			
                
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>


