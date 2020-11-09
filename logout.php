<?php
session_start();

if(isset($_SESSION["login"]))
{
    session_unset();
    // unset($_SESSION['login']);
    // unset($_SESSION['username']);
    echo "<script> locatoin.href='login.php'</script>";
    session_destroy();
    header ('location:login.php');
}
else{
    header("Location:login.php");
}

?>