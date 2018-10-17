<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

// date du jour : day + jour + mois + année
//echo date('l d F Y, \i\l \e\s\t H:i:s'),'<br>' ; 

echo $seconds = date('s');

echo date('l d F Y'); 
echo 'il est';
echo date('H\hi \e\t');
echo $seconds .'seconds';
echo ($seconds > 1) ? 's' : '';

//date dans 10 jours
var_dump(date(time());
var_dump(strtotime('d/m/Y' , '+ 10 days'));

?>
    
</body>
</html>