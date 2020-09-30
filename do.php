<?php
    header("Content-type:text/html;charset=utf-8");
    $arr = $_POST;

//    include("database.php");
    $conn=mysqli_connect("localhost",root,root);
    if(!$conn){
        die("数据库链接失败!");
    }

    mysqli_select_db($conn,"liuyan");//设置操作的数据库
    mysqli_query($conn,"set names utf8");//设置操作编码

    $sql ="insert into obj_message set name='".$arr['username']."',image='".$arr['face']."',info='".$arr['msg']."',time='".date("Y-m-d H:i:s")."'";
    $rst=mysqli_query($conn,$sql);


    if($rst){
//        echo "留言成功";
        echo "<script>alert('留言成功');location.href='message.php'</script>";
    }else{
        echo "留言失败";
    }