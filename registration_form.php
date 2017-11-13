<?php
	
		echo "Name:         ".$_POST["name"]."<br />";
		echo "Password:     ".$_POST["password"]."<br />";
		echo "Mobile number ".$_POST["mobile"]."<br /";
		echo "Pincode:      ".$_POST["pincode"]."<br />";
		echo "Address:      ".$_POST["address"]."<br />";
		echo "Email ID:     ".$_POST["email"]."<br />";
		echo "Salary:       ".$_POST["salary"]."<br />";

		if(isset($_POST['gendertype'])){
			echo "Gender:       ".$_POST["gendertype"]."<br />";
		}
		
		if (isset($_POST['sports'])) {

			echo "Sport likes: <br />";
			$sportsLikes = $_POST["sports"];
			
			foreach ($sportsLikes as $likes) {
			echo $likes."<br />";
			}
		}
 ?>