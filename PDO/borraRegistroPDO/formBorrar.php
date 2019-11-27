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

<form action ="borraPDO.php" method="post">
    <table>
        <tr>
            <label for="id"><td>ID :</td></label>
            <td>
                <input type="text" name="id">

            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit"name="boton" value="borra registro" </td>
        </tr>
    </table>
</div>
</form>
</body>
</html>



<?php
