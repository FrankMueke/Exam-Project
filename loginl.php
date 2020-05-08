<?php

include "db.php";

session_start();

if(isset($_POST["lecLogina"])){
		$email=mysqli_real_escape_string($con,$_POST["userEmail"]);
		$password= md5($_POST["userPasswordl"]);
		$sql = "SELECT * FROM lecturers WHERE email = '$email' AND pass_word ='$password'";
        $run_query = mysqli_query($con,$sql);		
		$count = mysqli_num_rows($run_query);
		if($count == 1){
			$row = mysqli_fetch_array($run_query);
			$_SESSION["uid"] = $row["l_id"];
			$_SESSION["fname"] = $row["first_name"];
			$_SESSION["lecregister_no"] = $row["lecregister_no"];
		
	    }
    }
?>