
<form action="two.php" method="post">
    <input type="text" name="id" value="">
    <input type="submit" name="sub" value="get">
</form>

<?php
    die;
    print_r($_GET);
    die;
    header("Content-type:text/html;charset=utf-8");    //设置编码
    $time1=strtotime(date("Y-m-d H:i:s"));                              //获取当前时间
    $time2=strtotime("2020-10-1");                              //五一放假时间
    $time3=strtotime("2020-10-10");                              //端午放假时间

    $sub1=ceil(($time2-$time1)/3600);                            //（60秒*60分）秒/小时

    $sub2=ceil(($time3-$time1)/86400);                           //（60秒*60分*24小时）秒/天

    echo "离国庆放假时间还有"." ".$sub1." "."小时！！！";
    echo "<hr/>";
    echo "离新年节放假时间还有"." ".$sub2." "."天！！！";
    echo "<hr/>";
//    die;
    function aa($a){
        $eventDay = strtotime($a);
        $today = time();
        $time = round(($eventDay - $today)/86400);
        echo $time;
    }
    echo aa("2020-10-10 0:0:0");

    die;
    $a = date("Y-m-d H:i:s");
    echo $a;
    echo "<script>location.href='one.php'</script>";




    die;
    $btimr = time();
    $etime = strtotime("2020-12-03 00:00:00");
    $echatime = $etime - $btimr;
    echo $echatime.'<br/>';

    $day = $echatime/3600/24;
    echo $day;

    die;
    echo date("Y-m-d H:i:s");