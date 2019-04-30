<html>

<head>
    <title>Punto 10</title>
</head>

<body background="imagenes/fondo.jpg">
    <form name="frm1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <center>

            <table width=60%>
                <tr>
                    <td>
                        <center>
                            <font face="Times new roman" size="30" color="#ecf0f1">Entidad XYZ</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="Arial" size="12" color="#bdc3c7">Digite el Valor a retirar</font>
                    </td>
                </tr>
                <tr>
                    <td><input type="number" min="0" name="num1" placeholder="Numero" required style="border-radius:5px"></td>
                    <td>
                        <center><input type="submit" name="enviar" value="Retirar dinero" style="border-radius:8px"><br></center>
                    </td>
                </tr>
                <tr>

                </tr>
            </table>
        </center>
    </form>

</body>

</html>

<?php
   if(isset($_POST['enviar'])){ //Valida si fue enviado los datos del formulario
        $num1=$_POST['num1'];//Guarda el valor digitado en una variable
        if ($num1>=100){  //Comprueba si el valor es mayor a cien para separarlo en monedas
            $entera=$num1/100; //Cantidad de monedas de cien
            $decimal=($num1-intval($entera)*100); //Cantidad de monedas diferentes a cien
            echo "<center><table><tr>";
            for ($i=1; $i <= intval($entera); $i++) {
                echo "<td><img src=\"icons\cien.png\" width='50'></td>"; //Imprime las monedas de cien
            }
            echo "</tr><tr>";
            $num1=$decimal;
            
            if ($num1>=50){  //Comprueba si el valor restante es mayor a cincuenta para seprarlo en monedas
                $entera=$num1/50; //Cantidad de monedas de cincuenta
                $decimal=($num1-intval($entera)*50); //Cantidad de monedas diferentes
                
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\cincuenta.png\" width='50'></td>"; //Imprime las monedas de cincuenta
                }
            }
            
            echo "</tr><tr>";
            $num1=$decimal;
            if ($num1>=20){  //Comprueba si el valor es mayor a veinte para seprarlo en monedas
                $entera=$num1/20; //Cantidad de monedas de 2veinte
                $decimal=($num1-intval($entera)*20); //Cantidad de monedas diferentes de veinte
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"eurov.png\" width='50'></td>"; //Imprime las monedas de veinte
                }
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=10){  //Comprueba si el valor es mayor a 10 para seprarlo en monedas
                $entera=$num1/10; //Cantidad de monedas de 10
                $decimal=($num1-intval($entera)*10); //Cantidad de monedas diferentes de diez
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\diez.png\" width='50'></td>"; //Imprime monedas de Diez
                }
        
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=5){  //Comprueba si el valor es mayor a cinco para seprarlo en monedas
                $entera=$num1/5; //Cantidad de monedas de cinco
                $decimal=($num1-intval($entera)*5); //Cantidad de monedas diferentes de cinco
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\cinco.png\" width='50'></td>"; //Imprime monedas de cinco
                }        
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=1){  //Comprueba si el valor es mayor a uno para seprarlo en monedas
                $entera=$num1/1; //Cantidad de monedas de uno
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\uno.png\" width='50'></td>"; //Imprime monedas de uno
                }
                echo "</tr></table></center>";
            }
        } else if ($num1>=50){  //Se realiza el mismo proceso inicial para las monedas de cincuenta
            $entera=$num1/50; 
            $decimal=($num1-intval($entera)*50);
            echo "<center><table><tr>";
            for ($i=1; $i <= intval($entera); $i++) {
                echo "<td><img src=\"icons\cincuenta.png\" width='50'></td>";
            }
            echo "</tr><tr>";
            $num1=$decimal;
            if ($num1>=20){
                $entera=$num1/20;
                $decimal=($num1-intval($entera)*20);
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"eurov.png\" width='50'></td>";
                }
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=10){ 
                $entera=$num1/10;
                $decimal=($num1-intval($entera)*10);
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\diez.png\" width='50'></td>";
                }
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=5){ 
                $entera=$num1/5; 
                $decimal=($num1-intval($entera)*5);
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\cinco.png\" width='50'></td>";
                }   
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=1){ 
                $entera=$num1/1; 
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\uno.png\" width='50'></td>";
                }
                echo "</tr></table></center>";
            }
        } else if ($num1>=20){ //Se realiza el mismo proceso inicial para las monedas de veinte
            $entera=$num1/20;
            $decimal=($num1-intval($entera)*20);
            echo "<center><table><tr>";
            for ($i=1; $i <= intval($entera); $i++) {
                echo "<td><img src=\"eurov.png\" width='50'></td>";
            }
            
            echo "</tr><tr>";
            $num1=$decimal;
            if ($num1>=10){  
                $entera=$num1/10; 
                $decimal=($num1-intval($entera)*10);
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\diez.png\" width='50'></td>";
                }
            } 
            
            echo "</tr><tr>";
            $num1=$decimal;
            if ($num1>=5){  
                $entera=$num1/5; 
                $decimal=($num1-intval($entera)*5);
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\cinco.png\" width='50'></td>";
                }
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=1){
                $entera=$num1/1; 
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\uno.png\" width='50'></td>";
                }
            }
            echo "</tr></table></center>";
        } else if ($num1>=10){  //Se realiza el mismo proceso inicial para las monedas de diez
            $entera=$num1/10; 
            $decimal=($num1-intval($entera)*10);
            echo "<center><table><tr>";
            for ($i=1; $i <= intval($entera); $i++) {
                echo "<td><img src=\"icons\diez.png\" width='50'></td>";
            }
        
            echo "</tr><tr>";
            $num1=$decimal;
            if ($num1>=5){  
                $entera=$num1/5; 
                $decimal=($num1-intval($entera)*5);
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\cinco.png\" width='50'></td>";
                }
            }
            
            $num1=$decimal;
            echo "</tr><tr>";
            if ($num1>=1){ 
                $entera=$num1/1; 
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\uno.png\" width='50'></td>";
                }
            echo "</tr></table></center>";
            }
        } else if ($num1>=5){  //Se realiza el mismo proceso inicial para las monedas de cinco
            $entera=$num1/5; 
            $decimal=($num1-intval($entera)*5);
            echo "<center><table><tr>";
            for ($i=1; $i <= intval($entera); $i++) {
                echo "<td><img src=\"icons\cinco.png\" width='50'></td>";
            }
        
            echo "</tr><tr>";
            $num1=$decimal;
            if ($num1>=1){ 
                $entera=$num1/1;
                for ($i=1; $i <= intval($entera); $i++) {
                    echo "<td><img src=\"icons\uno.png\" width='50'></td>";
                }
                echo "</tr></table></center>";
            }
        } else if ($num1>=1){  //Se realiza el mismo proceso inicial para las monedas de uno
            $entera=$num1/1; 
            echo "<center><table><tr>";
            for ($i=1; $i <= intval($entera); $i++) {
                echo "<td><img src=\"icons\uno.png\" width='50'></td>";
            }
            echo "</tr></table></center>";
        }
   }
?>