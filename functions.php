<!-- Advantages of function in PHP 
        Code Reusability 
        Code Optimization 
        Modularity
        Abstraction
        Code Readability
        Code Maintainability
        Code Testing
        Code Organisation -->




<!-- <?php
function cse($course,$credit){
    echo "Course: $course, Credit: $credit <br>";

}
cse("CSE 110",3);
cse("CSE 111",1.5);
cse("CSE 220",3);
cse("CSE 221",1.5);
cse("CSE 230",3);

?> -->

<!-- <?php
function result($subject,$marks)
{
    echo "Subject: $subject, Marks: $marks <br>";
}
result("Maths",85);
result("Physics",90);
result("Chemistry",88);
result("Biology",95);
result("English",80);
?> -->

<!-- //product of two 3*3 matrices using 2D array -->
<!-- <?php

function matrixmultiplication($a,$b){
    $m=count($a);
    $n=count($a[0]);
    $p=count($b);
    $q=count($b[0]);
    $result=array();
    if($n!=$p){
        echo "Matrices cannot be multiplied";
    }
    else{
        for($i=0;$i<$m;$i++){
            for($j=0;$j<$q;$j++){
                $result[$i][$j]=0;
                for($k=0;$k<$n;$k++){
                    $result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
                }
            }
        }
    }
    return $result; ;
}
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(1,2,3),array(4,5,6),array(7,8,9));
$result=matrixmultiplication($a,$b);
for($i=0;$i<count($result);$i++){
    for($j=0;$j<count($result[0]);$j++){
        echo $result[$i][$j]." ";
    }
    echo "<br>";
}
?> -->


<!-- <?php
function TV($string){
    echo "TV Series: $string <br>";
    function b(){
        echo "I am here to spoil the code <br>";
    }
}
    function b1(){
        echo "I am here to spoil the code <br>";
    }
    b() ;
    TV("Breaking Bad");

?> -->

<?php
function CalcAll($a,$b){
    echo "Hello";
    echo "Sum: ".($a+$b)."<br>";
    echo "Difference: ".($a-$b)."<br>";
    echo "Product: ".($a*$b)."<br>";
    echo "Division: ".($a/$b)."<br>";
    echo "Modulus: ".($a%$b)."<br>";
}
$a=10;
$b=6;
CalcAll( $a,$b);
?>

<!-- static variable-->
 //static variable: A static variable exists only in a local function scope, but it does not lose its value when program execution leaves this scope.



<?php
function test(){
    static $x=0;
    $y=0;
    echo $x;
    $x++;
    $y++;
    echo "<br>";

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

}
test();
test();
test();
?>


