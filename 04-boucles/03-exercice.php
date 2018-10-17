<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
 <!-- 
    <table>

        <thead>

            <tr>
                <th> X </th>
                <th> 1 </th>
                <th> 2 </th>
                <th> 3 </th>
                <th> 4 </th>
                <th> 5 </th>
                <th> 6 </th>
                <th> 7 </th>
                <th> 8 </th>
                <th> 9 </th>
                <th> 10 </th>
            </tr>
        </thead>

        <tbody>

        </tbody>

    </table> --> 

    <?php


/* $tab1 = [0,1,2,3,4,5,6,7,8,9,10]; */


echo ('<table>'); //balise table

// Légende 1ere ligne
echo ('<tr> <td> x');
for ($z = 0 ; $z <= 10 ; $z++){
    echo '<td>'. $z .'</td>';
}
    
echo('<tr>');

for ($i = 0 ; $i <= 10 ; $i++){
    
    echo '<tr>'$i; // mettre l'index en premier

    for($k = 0; $k <=10; $k++){

        echo $k * $i;
    }
    
    echo('<br>');
}


echo ('</table>'); 

?>


    <table>




    </table>


</body>

</html>