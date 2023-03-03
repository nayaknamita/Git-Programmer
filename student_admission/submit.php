<?php
include 'connect.php';
session_start();
$cn = mysqli_connect("localhost", "root", "", "db_admission");
echo '<pre>';
print_r($_SESSION);
if(isset($_POST['submit'])){
    $sname=mysqli_real_escape_string($cn,$_POST['sname']);
    $gname=mysqli_real_escape_string($cn,$_POST['gname']);
    $contact=mysqli_real_escape_string($cn,$_POST['contact']);
    $email=mysqli_real_escape_string($cn,$_POST['email']);
    $address=mysqli_real_escape_string($cn,$_POST['address']);
    $class=mysqli_real_escape_string($cn,$_POST['class']);
    $shift=mysqli_real_escape_string($cn,$_POST['shift']);
    $email=mysqli_real_escape_string($cn,$_POST['email']);
    $gender=mysqli_real_escape_string($cn,$_POST['gender']);
    $blgroup=mysqli_real_escape_string($cn,$_POST['blgroup']);
    $division=mysqli_real_escape_string($cn,$_POST['division']);
    $sql_text="insert into student(sname,gname,contact,email,address,class,shift,gender,blgroup,division)
    values('$sname','$gname','$contact','$email','$address','$class','$shift','$gender','$blgroup','$division') ";
    $stmt=mysqli_query($cn,$sql_text);
}
header('location:index.php');

?>