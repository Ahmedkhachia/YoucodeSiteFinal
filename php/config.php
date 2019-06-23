
<?php
session_start();

// require_once "classes/DB.php";
// require_once "classes/user.php";
require_once "language.php";

$_SESSION['lang'] = "fr";

if(isset($_GET['lang'])){

    if ($_GET['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
    } else if ($_GET['lang'] == 'ar') {
        $_SESSION['lang'] = 'ar';
    }

}





