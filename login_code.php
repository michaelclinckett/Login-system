<?php
/*
require_once "connect.php";
require_once "session.php";


$query = "SELECT * FROM users WHERE email = ?";
$result = $conn->query($query);

if($result->rows > 0){
    while($row = $result->fetch_assoc()){
        if ($password === $row['password']){
            $_SESSION["userid"] = $row['id'];
            $_SESSION["user"] = $row;
            echo "<script>location.href='welcome.php'</script>";
            header("location: welcome.php");
    
}else{
    echo"Error:" . $sql . "<br>" . $conn->error;
        }
}
}*/
?>
