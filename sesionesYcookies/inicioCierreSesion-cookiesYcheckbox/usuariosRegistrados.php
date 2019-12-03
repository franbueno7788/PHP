 <!DOCTYPE html>
<html lang="es">
<head>
    <style>
        h1{
            text-decoration: underline;
            font-weight: bold;
            text-align: center;
        }
        p{
            text-align: center;
        }
        table{
            border: 1px solid black;
            margin: auto;
            border-spacing: 3px;

        }
        td{
            border:1px solid black;
        }

    </style>


</head>

<body>
<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:formulario");
}
?>


<h1>Panel de usuarios</h1>
<?php
echo "<p>Bienvenido/a <b>".$_SESSION["usuario"].",</b> ha iniciado sesión satisfactoriamente</p>";
?>
<p>información para usuarios</p>
<table>
    <tr>

        <td>
            <a href ='cierraSesion.php'>cerrar la sesión</a>
        </td>
    </tr>

</table>


<p></p>
</body>
</html>





