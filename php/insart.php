<?php
 include'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];

$insert ="INSERT INTO demo(id,username,password) VALUES (1,'$username' , '$password' )";
echo $insert;
$fire = mysqli_query($connection, $insert);

if($fire)
{
    echo 1;

}else{
    echo 0;
}







?>