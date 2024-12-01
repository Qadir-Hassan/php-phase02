<?php
 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uemail = $_POST['uemail'];

    $upass = md5($_POST['password']);

    // Validate and sanitize input here

   

    $fullname = $fname . " " . $lname;

    echo "Your full name is, $fullname";

    echo "your password is : $upass";
}
else{
    echo "error";
}

    ?>