<?php 

// Create connection
$conn = new mysqli("localhost", "root", "", "contact");
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
#echo "Success!";

// Taking all 4 values from the form data(input)
$fname =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact =  $_REQUEST['contact'];
$message = $_REQUEST['message'];

#echo $fname;
#echo $email;
#echo $contact;
#echo $message;

// Performing insert query execution
// here our table name is photowebcontact
$sql = "INSERT INTO photowebcontact  VALUES ('$fname','$email','$contact','$message')";

    if(mysqli_query($conn, $sql)){
            echo "<center><h3>Your response submit successfully.</center>";
 
            echo nl2br("<center>\n$fname\n $email\n $contact\n $message</center>");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);


?>