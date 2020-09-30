<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
  <link href="css/style.css" type="text/css" rel="stylesheet">
	<style type="text/css">
	   .table img{
        width:50px;
	   }
     input[name=username],textarea{
       width:400px;
       border:1px solid #ccc;
     }
     textarea{
     	 height:150px;
     }
     h3{
       text-align:center;
       cursor:pointer;
     }
     #detail{
       margin:auto;
       height:auto;
       margin-bottom:20px;
       width:80%;
     }
     #detail .msg{
       clear:both;
       padding:10px; 
       height:100px;
       border-bottom:1px solid #ccc;
       margin-top:10px;
     }
     .username{
        width:15%;
        float: left;
        color:#00f;
     }
     .username img{
     	 width:50px;
     }
     .content{
     	 width:60%;
     	 float:left;
       word-break:break-all;
     }
     .date{
     	 width:23%;
       text-align:center;
     	 float:right;
     }
     .date div{
       color:red;
       width:100px;
       padding:4px;
       background: #ccc;
       margin-left:70px;
       display:none;
     }
     .date div:hover{
       cursor:pointer;
     }
   
	</style>
</head>
<body>
    <form name="form_msg" method="post" action="do.php">
    <h3>留下您最宝贵的留言</h3>
    <table class="table">
        <tr>
            <td width="30%">昵称</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td width="30%">头像</td>
            <td>
                <input type="radio" name="face" value="1" checked><img src="images/01.jpg">
                <input type="radio" name="face" value="2"><img src="images/02.jpg">
                <input type="radio" name="face" value="3"><img src="images/03.jpg">
                <input type="radio" name="face" value="4"><img src="images/04.jpg">
                <input type="radio" name="face" value="5"><img src="images/05.jpg">
                <input type="radio" name="face" value="6"><img src="images/06.jpg">
            </td>
        </tr>
        <tr>
            <td>内容</td>
            <td><textarea name="msg"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="写好了"></td>
        </tr>
    </table>
</form>
    <div id="detail">
        <?php
        include("database.php");
        $sql ="select * from obj_message";
        $rst=mysqli_query($conn,$sql);
        while($arr = mysqli_fetch_assoc($rst)){

        ?>
        <div class="msg">
            <div class="username">
                <img src="images/0<?php echo $arr['image']?>.jpg"><br>
                <?php echo $arr['name'];?>
            </div>
            <div class="content"><?php echo $arr['info'];?></div>
            <div class="date">
                <?php echo $arr['time'];?> <br>
                <div>删除</div>
            </div>
        </div>
        <?php }
            echo '<p style="text-align: center">'.mysqli_num_rows($rst).'</p>';
        ?>
	</div>



</body>
</html>