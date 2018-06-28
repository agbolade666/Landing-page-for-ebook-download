<!DOCTYPE html>
<html>
    
<head>
<meta http-equiv="Refresh" content="1;url=http://kennisplace.com/ebook/five_costly_mistakes_entertainers%20_make.pdf">
</head>

<body>

<?php

$servername = "localhost";
$username = "kennispl_root2";
$password = "Root@wdp";
$dbname = "kennispl_ebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_names     =   $_POST["full_names"];
$email_address  =   $_POST["email_address"];

$sql = "INSERT INTO `five_costly_mistakes` (`id`, `full_names`, `email_address`) VALUES (NULL, '$full_names', '$email_address')";

if ($conn->query($sql) === TRUE) {
    echo "fetching data...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$to = $email_address;
$subject = "Kehinde Ajose";

$txt = "Thank you ".$full_names. " (" .$email_address.  ") for requesting a copy of my book. Get the ebook here: https://goo.gl/mgjgjb";

$headers = "From: kehinde@kennisplace.com" . "\r\n" .
"CC: ajose.kehinde@gmail.com";

mail($to,$subject,$txt,$headers);

?> 

</body>

</html>