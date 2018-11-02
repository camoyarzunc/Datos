<?php
session_start();
$user=$_POST["txtUser"];
$pass=$_POST["txtPass"];

$cone= mysqli_connect("localhost", "root", "", "misperris");
$sql="select * from login where user='$user' and pass='$pass'";
$reg= mysqli_query($cone, $sql);
while ($row = mysqli_fetch_array($reg)) {
    $_SESSION["user"]=$user;
    header("location:index.html");
    return;
}
echo '<script>alert("Usuario Invalido");'
. 'document.location.href="login.html"</script>';

