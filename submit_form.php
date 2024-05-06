<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "form_db";


//connect to database
$conn  = new mysqli($host,$username,$password,$database);

//connection check
if ($conn->connect_error){
    die("Connection Failed : " . $conn->connect_error);
}

//Get User Data
$name = $_POST['name'];
$number = $_POST['number'];
$message = $_POST['message'];

//Inserting the data to Database

$sql = "INSERT  INTO details_table (name,number,message) VALUES ('$name','$number','$message')";
if ($conn->query($sql) == TRUE){
    echo "Form Submitted Successfully";
}
else{
    echo "Error : ".$sql."<br>".$conn->error;
}

?>

