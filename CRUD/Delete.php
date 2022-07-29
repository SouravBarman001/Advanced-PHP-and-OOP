<?php

$link = mysqli_connect("localhost", "root", "", "college");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}






$Id = $_REQUEST['Id'];

$sql = "DELETE FROM teacher WHERE id='".$Id."' ";


if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
