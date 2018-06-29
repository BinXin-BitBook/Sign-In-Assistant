<?php  
    include("conn.php");

    $userid = $_POST['userid']; 
    $sname = $_POST['sname']; 
    $snum = $_POST['snum'];
    $slesson = $_POST['slesson']; 
    $sclass = $_POST['sclass'];


    if (!empty($sname&&$snum)) {  
            $sql = "select * from student where openid = '$userid'";  
            $result = mysqli_query($conn, $sql);  
            $result = mysqli_fetch_assoc($result);

            if($result==null){
                $sql1 = "insert into student values ('$userid','$sname','$snum')";  
                mysqli_query($conn, $sql1);
                echo json_encode("student");

            }else{
                echo "已经注册过了";
            }  
        }elseif(!empty($slesson&&$sclass)){

            $sql3 = "insert into lesson(openid,slesson,sclass,setTime) values ('$userid','$slesson','$sclass',Now())";  
            mysqli_query($conn, $sql3);
            echo json_encode("lesson");  
        }
?>  