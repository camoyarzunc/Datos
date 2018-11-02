<?php
$id=$_POST["id_region"];
$cone= mysqli_connect("localhost","root","","misperris") or die("no se pudo");
$reg= mysqli_query($cone,"select * from ciudad where region_id_region=$id") or die("no es posible");
while($row = mysqli_fetch_array($reg)) {
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
