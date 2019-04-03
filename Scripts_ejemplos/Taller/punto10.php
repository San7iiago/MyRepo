<html>

<head>
    <title>Punto 10</title>
</head>

<body>
    <form name="frm1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <center>

            <table width=40%>
                <tr>
                    <td>
                        <center>
                            <font face="Times new roman" size="30" color="#3498db">Tablas de multiplicar</font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Digite el numero de la tabla</td>
                </tr>
                <tr>
                    <td><input type="number" min="0" name="num1" placeholder="Numero" required style="border-radius:5px"></td>
                    <td>
                        <center><input type="submit" name="enviar" value="Realizar tabla" style="border-radius:8px"><br></center>
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
       echo 
        $num1=$_POST['num1'];
        echo "<center><table border = 1 >";
        echo "<tr>Tabla del numero ".$num1."</tr>";
        for($i=1; $i<=10; $i++){
            echo "<tr><td>".$num1."</td>"."<td> X </td>"."<td>".$i."</td>"."<td> = </td>"."<td>".($num1*$i)."</td></tr>";        
        }
        echo "</table></center>";
    }
?>
