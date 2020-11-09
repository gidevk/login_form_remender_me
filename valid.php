<?php
session_start();
include("db_con.php");

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'itlab');


$pass = $_POST['password'];
$id =$_POST['user_id'];

$q = "select *from itlabexerciseusers where USERNAME ='$id' && PASSWORD = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
       
    $_SESSION['username']=$id;
    $_SESSION['login']=$id;

    if(isset($_POST['rem'])){
        setcookie('user_id', $id,time()+60*60);
        setcookie('password', $pass,time()+60*60);

    }
    header('location:home.php');
}else {
   
    echo "user id/password is not valid";
    header('location:login.php');
}





?>