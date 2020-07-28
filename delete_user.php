<?php
require_once("db.php");
$sql = "DELETE FROM sign_up WHERE id='" . $_GET["id"] . "'";

$rr= "select work_email from sign_up where id= '" . $_GET["id"] . "'";
$stmt = mysqli_query($conn, $rr);
$row = mysqli_fetch_assoc($stmt);

$sql2 = "DELETE FROM document WHERE work_email='" .$row. "'";

mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
header("Location:crud.php");
?>