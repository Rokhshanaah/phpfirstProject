<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   /* for($i=1;$i<=10;$i++){
        echo "this is the itretion number".$i."<br>";
    }*/

   /* $test = 5;
    while($test<10){
        echo $test;
        $test++;
    }*/

/*      $test = 5;
  do{
        echo $test;
        $test++;
    } while($test<10);
*/

$fruits=array("apple"=>"red","banana"=>"yellow","orang"=>"orang");
foreach($fruits as $fruit=>$color){
    echo "this is a ".$fruit.",that has color of ".$color."<br>";
}

    ?>
</body>
</html>