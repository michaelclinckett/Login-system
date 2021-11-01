<?php
require_once 'connect.php';

$ID = $_REQUEST ['ID'];

$sql = "DELETE FROM users WHERE ID = '" . $ID . "'";

if (mysqli_query ($conn,$sql)){
    print("Your account has been deleted successfully");
}else{
    print("There was an error during your account deletion.");
}
echo "<script>location.href='index.php'</script>";

?>