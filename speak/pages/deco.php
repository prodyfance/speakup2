<?php 
require_once '../../config.php';


session_destroy();
// setcookie($id, $row['id_us'], time() - (86400 * 30 * 12)); //year
$sql = "UPDATE user set status_us=0 WHERE id_us=".$_SESSION['id']."";
             $result = mysqli_query($con, $sql);
header("location:../..");



?>