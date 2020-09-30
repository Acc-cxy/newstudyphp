
<?php
    //冒泡
    $array = array(1,5,8,4,3,6,42,5,2);

    //    选择循环
    for($i = 0,$len = count($array);$i<$len;$i++){

        $min = $i;

        for($j = $i+1;$j < $len;$j++){
            if($array[$j]<$array[$min]){
                $min = $j;
                echo $array[$min];
            }
        }

        if($min != $i){
            $temo = $array[$i];
            $array[$i] = $array[$min];
            $array[$min] = $temo;
        }
    }
    echo '<pre/>';
    print_r($array);


    echo '<hr/>';
//        For循环
//    取最大值
//    for($i = 0,$len=count($array);$i < $len; $i++){
//    //两两相比
//        for($j=0;$j<$len -1 -$i;$j++){
//            if($array[$j]>$array[$j+1]){
//                $temp = $array[$j];
//                $array[$j] = $array[$j+1];
//                $array[$j+1] = $temp;
//            }
//        }
//    }
//    print_r($array);
?>

<?php
    return false;
    $arr = array(1,3,4,5,6,7,8,9);
    while (list($key,$value) = each($arr)){

        echo 'key='.$key.'==value'.$value.'<hr/>';
    }



    foreach ($arr as $k => $v){
        echo 'key='.$k.'==value'.$v.'<br/>';
    }

    '<br/>';

    $array = array('1',2,'halo');
    var_dump($array,'<br/>');


    $str1 = 'heard';
    $str2 = "heard";
    $str3 =<<< EOD
        Hello
EOD;
    $str4 =<<< 'EOD'
            Hello
EOD;
    echo strlen($str1).'<br/>'.mb_strlen($str2).'<br/>'.$str3.'<br/>'.$str4;


    header('Content-type:text/html;charset=utf-8');
    $a = 0;
    if($a == 0){
        trigger_error('报错报错');
        trigger_error('报错报错',E_USER_ERROR);
    }

    echo $a;

    $t = date("H");
    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>

<?php
    header('Content-type:text/html;charset=utf-8');

    function display($a,&$b){
        $a = $a*$a;
        $b = $b*$b;
        echo $a,'<br/>',$b,'<br/>';
    }
    $a = 5;
    $b = 10;

    display($a,$b);

    echo $a,'<br/>',$b;
        echo date('Y年 m月 d日 '),'<br/>';
        echo time(),'<br/>';
        echo microtime(),'<br/>';
?>

<?php
    $a=1.23;
    $b=1.23e10;

var_dump($a , $b);
?>


<table border=1>
    <?php for ($i=1; $i<=10 ;$i++){?>
        <tr>
            <?php for ($J=1;$J<=$i;$J++):?>
                <td>
                    <?php echo $i.'*'.$J. '=' . $i*$J;?>
                </td>
            <?php endfor;?>
        </tr>
    <?php }?>
</table>

<?php
        $a = 'weekend';
        $b = 'goods';

        var_dump($a == 'weekend' && $b == 'goods');

        var_dump($a == 'weekend' || $b == 'goods');

//        循环
        for ($a = 1; $a <= 10; $a++){
            echo $a ,'<br/>';
        }

        $a = 1 ;
        switch ($a){
            case 1 :
                echo 1;
                $a++;
                break;
            case 2 :
                echo 2;
                $a++;
                break;
            case 3 :
                echo 3;
                $a++;
                break;
        }

        $a = 1 ;
        while ($a <= 10){
            echo $a++,'<br/>';
        }

        $a = 1 ;
        do{
            if($a % 2 != 1){
                echo $a , '<br/>';
            }

            $a++;
        }while($a <= 10);
        ?>