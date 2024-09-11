<?php 

require_once "dbconfig.php";

session_start();


if(isset($_POST['login'])){
  $email =  $_POST['email'];
   $password = $_POST['password'];
   $password = md5($password);
   $usertype =  $_POST['usertype'];
}


if($usertype==1){
$sql = $dbf->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

if($sql->num_rows){
$_SESSION['email'] =  $email;
$_SESSION['usertype'] =  $usertype;
//redirect
header("Location:admin_dashboard.php");
}


}


if($usertype==2){
    $sql = $dbf->query("SELECT * FROM doctors WHERE email = '$email' AND password = '$password'");
    if($sql->num_rows){
        $_SESSION['email'] =  $email;
        $_SESSION['usertype'] =  $usertype;
        //redirect
header("Location:doctor_dashboard.php");
        }
}

if($usertype==3){
    $sql = $dbf->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if($sql->num_rows){
        $_SESSION['email'] =  $email;
        $_SESSION['usertype'] =  $usertype;
        //redirect
header("Location:patient_dashboard.php");
        }
}

?>