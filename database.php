<?php
    $conn=mysqli_connect("localhost",root,root);
    if(!$conn){
        die("数据库链接失败!");
    }

    mysqli_select_db($conn,"liuyan");//设置操作的数据库
    mysqli_query($conn,"set names utf8");//设置操作编码