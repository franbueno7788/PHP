<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        table{
            margin: auto;
            border: 1px solid black;
            background-color: antiquewhite;
        }
        h1{
            text-align: center;
        }
        #enviar{
            display:block;
            margin:auto
        }
        #centrar{
            text-align: center;
        }
    </style>
</head>

<body>
<h1>Introduce tus datos</h1>

<form action ="conexion.php" method="post">
    <table>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name ="nombre"> </td>

        </tr>
        <tr>
            <td>contraseña: </td>
            <td><input type="password" name ="pass"> </td>

        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviar" id ="enviar" value="login" margin ="auto"> </td>
        </tr>
    </table>
</form>

<?php

if(isset($_GET["fallo"])){
    echo "<p style='color:red'id='centrar'>usuario o contraseña incorrectos</p>";
}
if(isset($_GET["cierre"])){
    echo "<p style='color:green'id='centrar'>se ha cerrado la sesión correctamente</p>";
}




?>
</body>
</html>












<?php
