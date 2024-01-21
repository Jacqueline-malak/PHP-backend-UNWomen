<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_REQUEST['user_name'];
    $email = $_REQUEST['email'];
    $pw = $_REQUEST['password'];

    if(empty($user) || empty($email) || empty($pw)) {
        echo "Please insert your data";
    } else {
        echo "<h2>Welcome $user </h2><br>";
        echo "<p>Your mail is: $email";
    }

}
?>


