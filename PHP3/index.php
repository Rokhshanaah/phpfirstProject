<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <?php
    $name="Ahmad";
    ?>
    <p>hello!<?php echo $name ?>,i learning php</p> -->

<?php
//String Operator
$a="Hello";
$b="World";

$c=$a. " ".$b;

echo  $c;

//Arithmetic Operator
echo 10**3;

echo (1+2)*4;

//assignment operator

$a=2;
$a +=4;
echo $a;


//comparison operator

$a=2;
$b=2;

if($a == $b){
    echo "this statement is true";
}

//logical operator

$aa=2;
$bb=2;
$c=3;
$d=6;
if($aa == $bb && $c == $d ){
    echo "this statement is true";
}

//increment/decrement operator

$s=1;
echo $s++;
 echo $s;


 //conditional statement

 $f=2;
 $g=6;

 if($f===$g){
    echo "they are the same";
 }else{
    echo "they are not the same";

 }

 //Switch

 $h=50;
 switch($h){
    case 25:
        echo "variable is equal to 25";
        break;
        case 50:
        echo "variable is equal to 50";
        break;
        default:
        echo "none were true";
        break;

 }


?>

</body>
</html>