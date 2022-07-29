<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>

</head>

<body>
	<center>
		<?php
         //include("./Connection.php");
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "college");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 3 values from the form data(input)
		$Id = $_REQUEST['Id'];
		$Name = $_REQUEST['Name'];
		$Salary = $_REQUEST['Salary'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO teacher VALUES ('$Id',
			'$Name','$Salary')";
		
		if(mysqli_query($conn, $sql)){

			echo nl2br("\n$Id\n"
				. "$Name\n $Salary");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>

</body>

</html>
