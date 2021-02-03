<!doctype html>
<html>
<head>

</head>
<body>
<?php
$sex="male";
$weight= 55;
$height=170;
$age=25;

if($sex== "male"){
    $male_calori=  (10 * $weight) +( 6.25 * $height) - (5 * $age) + 5;
    echo "Günlük almanız gereken kalori miktarı: ".$male_calori;
}
else{
    $female_calori=(10 * $weight) +( 6.25 * $height) - (5 * $age) - 161;
    echo  "Günlük almanız gereken kalori miktarı: ".$female_calori;
}
?>
</body>
</html>
