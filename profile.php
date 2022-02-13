<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" href="favicon.ico" >
        <title><?php $title = 'Admin Overview'; echo $title; ?></title>
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
				//$_SESSION['email'];



				if (isset($_SESSION['email'])) {
	
				
					$query='select * from regis';
					$data= $conn->query($query);

					echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">

					<tr>
						<th>id</th>
						<th>name</th>
						<th>email</th>
						<th>mob</th>
					</tr>';

					foreach($data as $row)
					{
					echo '<tr>
						<td>'.$row["id"].'</td>
						<td>'.$row["name"].'</td>
						<td>'.$row["email"].'</td>
						<td>'.$row["mob"].'</td>

						</tr>';
					}

					echo '</table>';


					}else {
						("location: index.php");
					}

				

					echo "<br>
					<form action='logout.php' align='right'>
						<button>LOG OUT</button>
					</form>";
	

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
