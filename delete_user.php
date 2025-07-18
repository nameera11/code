<?php
$conn = new mysqli('localhost','root','','simple_crud',3307);

//Fetch user based on ID
$id = 2;//Example ID to fetch
$sql ="DELETE *FROM users WHERE id=$id";
$result=$conn->query($sql);

if($result->num_rows>0){
    $row=$result->fetch_assoc();
    echo"ID:".$row['id']."-Name:".
    $row['name']."-Email:".$row['email'];
}else{
    echo"No records found.";
}
$conn->close();
?>
