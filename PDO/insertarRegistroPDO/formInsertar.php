<!DOCTYPE html>
<html lang="es">

<head>
    <style>
        table{
            border: 1px solid black;
            background-color: antiquewhite;
            margin: auto;
        }



    </style>

</head>

<body>
<div id="centrarForm">

<form action ="insertaPDO.php" method="post">
    <table>
        <tr>
            <label for="id"><td>ID :</td></label>
            <td>
                <input type="text" name="id">

            </td>
        </tr>
        <tr>
            <label for="id"><td>Código :</td></label>
            <td>
                <input type="text" name="codigo">

            </td>
        </tr>
        <tr>
            <label for="id"><td>Nombre :</td></label>
            <td>
                <input type="text" name="nom">

            </td>
        </tr>
        <tr>
            <label for="id"><td>País :</td></label>
            <td>
                <input type="text" name="pais">

            </td>
        </tr>
        <tr>
            <label for="id"><td>precio :</td></label>
            <td>
                <input type="text" name="precio">

            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"name="boton" value="realizar consulta" </td>
        </tr>
    </table>
</div>
</form>
</body>
</html>



<?php
