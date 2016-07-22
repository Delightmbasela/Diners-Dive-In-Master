<?php
$business_name = $_POST['BusinessName'];
$business_type = $_POST['BusinessType'];
$country = $_POST['Country'];
$city = $_POST['City'];
$street_address = $_POST['StreetAddress'];
$email = $_POST['Email'];
$phone_number = $_POST['PhoneNumber'];

//Need to be changed
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //'MyGuests' (Table Name) firstname,etc (columns)  Need to be changed
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$business_name', '$business_type', '$country', '$city', '$street_address', $email, $phone_number)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
