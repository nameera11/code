<?php
$conn = new mysqli('localhost','root','','simple_crud',3307);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];

    $sql="UPDATE users SET name='$name';
    email ='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE){
    echo "USER updated successfully.";
} else{
 echo "Error:".$conn->error;
}
}
