<?php
echo "Punto Numero 2: Mostrar numeros del 1 al 10";
echo "<table border = 1><tr>";
$i = 1;
while($i<=10) {
    if ($i%2==0){
        echo "<td bgcolor=#2bcbba>".$i."</td>";
    } else {
        echo "<td bgcolor=yellow>".$i."</td>";
    }
    
    $i++;
}
echo "</tr></table>";


echo "<br>Punto Numero 3: Mostrar los primeros 100 numeros naturales";
echo "<table border = 1><tr>";
for($i=1; $i<=100; $i++){
    if ($i%2==0){
        echo "<td bgcolor=#2bcbba>".$i."</td>";
    } else {
        echo "<td bgcolor=yellow>".$i."</td>";
    } 
}
echo "</tr></table>";


echo "<br>Punto Numero 4: Primeros 100 numeros naturales de 2 en 2";
echo "<table border = 1><tr>";
for($i=2; $i<=100; $i=$i+2){
        echo "<td bgcolor=#2bcbba>".$i."</td>";
}
echo "</tr></table>";


echo "<br>Punto Numero 5: Mostrar 10 numeros aleatorios positivos";
echo "<table border = 1><tr>";
for($i=0; $i<=10; $i++){
    $numazar=rand(0,100);
    if ($numazar%2==0){
        echo "<td bgcolor=#2bcbba>".$numazar."</td>";
    } else {
        echo "<td bgcolor=yellow>".$numazar."</td>";
    } 
}
echo "</tr></table>";


echo "<br>Punto Numero 6: Mostrar suma de los 100 primeros numeros naturales";
$cont=0;
echo "<table border = 1><tr>";
for($i=1; $i<=100; $i++){
    $cont=$cont+$i;
}
echo "<td bgcolor=#2bcbba>".$cont."</td>";
echo "</tr></table>";


echo "<br>Punto Numero 7: Mostrar los multiplos de tres en la serie del 1 al 100";
echo "<table border = 1><tr>";
for($i=3; $i<=100; $i++){
    if ($i%3==0){
        echo "<td bgcolor=yellow>".$i."</td>";
    } 
}
echo "</tr></table>";


echo "<br>Punto Numero 8: Generar 10 numeros aleatorios positivos y mostrar en tabla";
$cont1=0;
$cont2=0;
echo "<table border = 1><tr>";
for($i=1; $i<=10; $i++){
    $numazar=rand(0,100);
    if ($numazar%2==0){
        echo "<td bgcolor=#2bcbba>".$numazar."</td>";
        $cont1=$cont1+1;
    } else {
        echo "<td bgcolor=yellow>".$numazar."</td>";
        $cont2=$cont2+1;
    } 
}
echo "</tr></table>";

echo "<br><table border = 1><tr bgcolor=#a5b1c2>";
echo "<td>N° Pares</td><td>N° Impares</td>";
echo "</tr>";
echo "<tr bgcolor=#d1d8e0><td><center>".$cont1."</center></td>"."<td><center>".$cont2."</center></td></tr></table>";  


echo "<br>Punto Numero 9: Generar 10 numeros aleatorios positivos y negativos y mostrar en tabla";
$cont1=0;
$cont2=0;
$cont3=0;
$cont4=0;
echo "<table border = 1><tr>";
for($i=1; $i<=10; $i++){
    $numazar=rand(-100,100);
    if ($numazar>=0){
        if ($numazar%2==0){
            echo "<td bgcolor=#2bcbba>".$numazar."</td>";
            $cont1=$cont1+1;
            
        } else {
            echo "<td bgcolor=yellow>".$numazar."</td>";
            $cont2=$cont2+1;
            
        } 
        
    } else {
        if ($numazar%2==0){
            echo "<td bgcolor=#2bcbba>".$numazar."</td>";
            $cont3=$cont3+1;
        } else {
            echo "<td bgcolor=yellow>".$numazar."</td>";
            $cont4=$cont4+1;
        } 
        
    }  
}
echo "</tr></table>";

echo "<br><table border = 1><tr bgcolor=#a5b1c2>";
echo "<td>N° Positivos Pares</td>";
echo "<td>N° Positivos Impares</td>";
echo "<td>N° Negativos Pares</td>";
echo "<td>N° Negativos Impares</td>";
echo "</tr>";

echo "<tr bgcolor=#d1d8e0><td><center>".$cont1."</center></td>";
echo "<td><center>".$cont2."</center></td>";
echo "<td><center>".$cont3."</center></td>";
echo "<td><center>".$cont4."</center></td></tr>";
echo "</table>"; 
?>
