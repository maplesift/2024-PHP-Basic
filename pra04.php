<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<h2>正三角形</h2>
<?php

for($i=0;$i<5;$i++){
    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
echo"<hr>";
echo'倒直角三角形'.'<br>';
for($i=5;$i>0;$i--){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";
}

echo"<hr>";
echo'正三角形'.'<br>';
for($i=0;$i<5;$i++){
    for($k=0;$k<4-$i;$k++){
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
// echo"<hr>";
// echo'倒正三角形'.'<br>';
// for($i=5;$i>0;$i--){
//     for($j=0;$j<($i);$j++){
//         echo "*";
//     }
//     echo "<br>";
// }
echo"<hr>";
echo'倒正三角形'.'<br>';
for($i=0;$i<5;$i++){
    for($k=0;$k<$i;$k++){ //打印空白 第一行需要0 所以第一迴圈為:$k(0)<$i(0)
        echo "&nbsp;";
    }
    for($j=0;$j<(2*(4-$i)+1);$j++){ //打印* 第一行需要9 所以第一迴圈為:$j(0)<(2*(4-$i(0))+1)=9*
        echo "*";
    }
    echo "<br>";
}
echo"<hr>";
echo'倒正三角形'.'<br>';
for($i=4;$i>=0;$i--){
    for($k=0;$k<(4-$i);$k++){ //打印空白 第一行需要0 所以第一迴圈為:$k<(4-4)
        echo "&nbsp;";
    }
    for($j=0;$j<(2*$i+1);$j++){ ////打印* 第一行需要9 所以第一迴圈為$j(0)<(2*$i(4)+1)=9*
        echo "*";
    }
    echo "<br>";
}
?>
<h2>菱形</h2>
 <?php 
for($i=0;$i<21;$i++){
    if($i>10){
        $k1=$i-10;
        $j1=2*($i-(2*($i-10)))+1;
    }else{
        $k1=10-$i;
        $j1=(2*$i+1);
    }

    for($k=0;$k<$k1;$k++){
        echo "&nbsp;";
    }

    for($j=0;$j<$j1;$j++){
        echo "*";
    }
    echo "<br>";

}
?>
<h2>菱形</h2>
 <?php 
for($i=0;$i<21;$i++){
    if($i>10){
        /* $t=$i-4;
        $i-4     => 1,2,3,4
        2*($i-4) => 2,4,6,8
        $i       => 5,6,7,8
        2*($i-(2*($i-4)))+1 => 7, 5 , 3,1
        2*($i-(2$i-8))+1
        2*(8-$i)+1
        17-2$i */
        
        for($k=0;$k<$i-10;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<2*($i-(2*($i-10)))+1;$j++){
            echo "*";
        }
        echo "<br>";

    }else{

        for($k=0;$k<10-$i;$k++){
            echo "&nbsp;";
        }
    
        for($j=0;$j<(2*$i+1);$j++){
            echo "*";
        }
        echo "<br>";
    }

}
?>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</body>
</html>