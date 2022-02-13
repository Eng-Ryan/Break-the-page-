<?php
$title = "Admin";

$content = '<h3>User Info</h3>
            <a href="profile.php">All Users Information </a><br/>


			<h3>Coffee</h3>
            <a href="CoffeeAdd.php">Add a new coffee</a><br/>
            <a href="uploadImage.php">Upload Image</a><br/>
            <a href="#">Coffee Overview</a><br/>';

		
		echo "<form action='Management.php' align='right'>
					<button>GO BACK</button>
				</form>";
				
		echo "<form action='logout.php' align='right'>
					<button>LOG OUT</button>
				</form>";		


include './Template.php';
?>
