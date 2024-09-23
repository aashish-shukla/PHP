<?php
$x=25;
$y=35;
$z="25";
var_dump($x==$z); // Outputs: boolean true
echo"<br>";
var_dump($x===$z); // Outputs: boolean false
echo"<br>";
var_dump($x!=$z); // Outputs: boolean false
echo"<br>";
var_dump($x!==$z); // Outputs: boolean true
echo"<br>";
var_dump($x<$y); // Outputs: boolean true
echo"<br>";
var_dump($x>$y); // Outputs: boolean false
echo"<br>";
?>

<html>
<body>
    <pre>
        <?php
        $a1=array("red","green");
        $a2=array("blue","yellow");
        print_r(array_merge($a1,$a2));
        echo "<br>";
        ?>
    </pre>
</body>
</html>
<html>
<body>
    
        <?php
        $a1=array("red","green");
        $a2=array("blue","yellow");
        print_r(array_merge($a1,$a2));
        echo "<br>";
        echo "<br>";

        ?>
</body>
</html>

<!-- Looping in PHP -->
<!-- Type1 -->
<?php
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";
?>
<!-- Type2 -->
<?php
$colors=array("red","green","blue","yellow");
for($x=0;$x<count($colors);$x++){
    echo $colors[$x];
    echo "<br>";
}
echo "<br>";
?>


<!-- Quadratic equation in PHP -->
<?php
function solveQuad($a,$b,$c){
    $d=$b*$b-4*$a*$c;
    if($d>0){
        $r1=(-$b+sqrt($d))/(2*$a);
        $r2=(-$b-sqrt($d))/(2*$a);
        return[$r1,$r2];
    }
    else if($d==0){
        $r1=-$b/(2*$a);
        return[$r1];
    }
    else{
        $realPart=-$b/(2*$a);
        $imaginaryPart=sqrt(-$d)/(2*$a);
        return[$realPart,$imaginaryPart];
    }
}
$a=1;
$b=-3;
$c=2;
$result=solveQuad($a,$b,$c);
echo "Roots: ".implode(",",$result);

