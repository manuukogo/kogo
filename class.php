<?php
$fullname=$_POST['fname'];
$email=$_POST['email'];
$phonenumber=$_POST['phone'];
$password=$_POST['pass'];
$conn=new mysqli('localhost','root','','class');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect-error);
}
else{
    $stmt=$conn->prepare("insert into student(fullname,email,phonenumber,password)
    values(?,?,?,?)");
    $stmt->bind_param ("ssss",$fullname,$email,$phonenumber,$password);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}
?>
