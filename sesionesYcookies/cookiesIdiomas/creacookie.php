<?php


setcookie("idioma_selec",$_GET["idioma"],time()+86400);

if(!$_COOKIE["idioma_selec"]){
    header("location:eligeIdioma.php");
}elseif ($_COOKIE["idioma_selec"]=="es"){
    header("location:Spain.php");
}elseif ($_COOKIE["idioma_selec"]=="eng"){
    header("location:english.php");
}
