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
<?php



?>
<h1>Formulario de registro</h1>

<form action ="registro.php" method="post">
    <table>
        <tr>
            <td>Email: </td>
            <td><input type="text" name ="email"> </td>

        </tr>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name ="nombre"> </td>

        </tr>
        <tr>
            <td>Contraseña: </td>
            <td><input type="password" name ="pass"> </td>

        </tr>
        <tr>
            <td>Repite la contraseña: </td>
            <td><input type="password" name ="pass2"> </td>

        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="enviar" id ="enviar" value="registrarse" margin ="auto"> </td>
        </tr>
    </table>
</form>

<?php

if(isset($_GET["fallo"])){
    echo "<p style='color:red'id='centrar'>el email o nombre inicado ya existen </p>";
}
if(isset($_GET["errorEmail"])){
    echo "<p style='color:red'id='centrar'>el email indicado no es correcto<br></p>";
}
if(isset($_GET["errorContra"])){
    echo "<p style='color:red'id='centrar'>las contraseñas no coinciden, vuelva a intentarlo</p>";
}




?>
</body>
</html>












<?php
