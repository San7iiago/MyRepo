<html>

<head>
    <title></title>
    <link rel="icon" type="image/ico" href="icons/appstore.png" />
</head>

<body background="images/fondo.jpg">
   

    <form name="frm1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
        <center>
            <table width=40%>
                <tr>
                    <td>
                        <center>
                            <font face="Times new roman" size="30" color="#3498db">Orden de tablas</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Digite el numero que desea ordenar</td>
                </tr>
                <tr>
                    <td><input type="number" min="0" name="num1" placeholder="Numero" required style="border-radius:5px"></td>
                    <td>
                        <center><input type="submit" name="enviar" value="Realizar tablas" style="border-radius:8px"><br></center>
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
   if(isset($_POST['enviar'])){
    $num1=$_POST['num1'];
    echo "<center>";
    echo "<br>Tabla 1:";
    echo "<br><table border = 1><tr>";
    for($i=1; $i<=$num1; $i++){
        echo "<td>".$i."</td>";        
    }
    echo "</tr></table>";
    
    echo "<br>Tabla 2:";
    echo "<br><table border = 1><tr>";
    for($i=$num1; $i>=1; $i--){
        echo "<td>".$i."</td>";        
    }
    echo "</tr></table>";
    

    echo "<br>Tabla 3:";
    $cont=$num1;
    echo "<br><table border = 1>";
    for($i=1; $i<=$num1; $i++){
        echo "<tr><td>".$i."</td>";
        echo "<td>".$cont."</td></tr>"; 
        $cont--;
    }
    echo "</tr></table>";
    
    }
    

?>


