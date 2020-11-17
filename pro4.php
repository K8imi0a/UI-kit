<?php
include_once 'data4.php';
if(isset($_POST['save']))
{
    $first_name = $_POST['name'];
    $last_name = $_POST['email'];
    $city_name = $_POST['pass'];

    $sql = "INSERT INTO userr (name,email,pass)
	 VALUES ('$first_name','$last_name','$city_name')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
