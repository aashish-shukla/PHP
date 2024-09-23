<!-- Three types of array in PHP -->
<!-- Type1: Indexed Array -->
<?php
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";

// Type2: Associative Array
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value){
    echo "Key=".$x.", Value=".$x_value;
    echo "<br>";
}
echo "<br>";

// Type3: Multidimensional Array
$cars=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
echo "<br>";
?>


<!-- Arrays Functions -->
 <!-- Array_combine() -->
    <?php
    $a1=array("red","green");
    $a2=array("blue","yellow");
    $a3=array("10","20");
    $a4=array("30","40");
    $newarray=array_combine($a1,$a2);
    print_r($newarray);
    echo "<br>";


// matrix multiplication of 2*2 matrix in php
    $a=array(array(1,2),array(3,4));
    $b=array(array(1,2),array(3,4));
    $m=count($a);
    $n=count($a[0]);
    $p=count($b);
    $q=count($b[0]);
    if($n!=$p){
        echo "Matrices cannot be multiplied";
    }else{
        $result=array();
        for($i=0;$i<$m;$i++){
            for($j=0;$j<$q;$j++){
                $result[$i][$j]=0;
                for($k=0;$k<$n;$k++){
                    $result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
                }
            }
        }
    }
    echo "The result is:<br>";
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$q;$j++){
            echo " ".$result[$i][$j];
        }
        echo "<br>";
    }
    echo "<br>";
    ?>
