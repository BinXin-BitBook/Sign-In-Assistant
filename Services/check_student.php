<?php  
    include("conn.php");

    $userid = $_POST['userid']; 

    $sql = "select * from student where openid = '$userid'";  
    $result = mysqli_query($conn, $sql);  
    $result = mysqli_fetch_assoc($result);

    echo json_encode($result);


?>  