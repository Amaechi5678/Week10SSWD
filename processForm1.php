<?php
session_start();

$_SESSION['passengerFN'] = $_POST['firstname'];
$_SESSION['passengerSN'] = $_POST['surname'];



if(isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1;
}
else { 
        $_SESSION['luggage'] = 0;
}

if($_SESSION['luggage'] == 1) {
 header("Location: processForm2.php");
}
else {
 header("Location: processForm3.php");

}