<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        html,body{
            background: linear-gradient(white,slategrey);
            height: 100%;
            margin: 0;
        }
        table{
            margin:auto;
            text-align: center;
            mso-cellspacing: 3px;
        }
    </style>

</head>
<body>
<?php

if(isset($_COOKIE["idioma_selec"])) {
    if ($_COOKIE["idioma_selec"] == "es") {
        header("location:Spain.php");
    } elseif ($_COOKIE["idioma_selec"] == "eng") {
        header("location:english.php");
    }
}
?>
<table>
    <tr>
        <td colspan="2"><h1>Elige idioma</h1></td>
    </tr>
    <tr>
        <td><a href="creacookie.php?idioma=es" ><img src="espana.png"></a></td>
        <td><a href="creacookie.php?idioma=eng"><img src="inglaterra.png"></a></td>
    </tr>


</table>
</body>
</html>


















<?php
