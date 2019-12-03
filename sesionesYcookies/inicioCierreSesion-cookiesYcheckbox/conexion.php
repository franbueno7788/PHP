<?php

$nombreIntroducido = $_POST["nombre"];
$contraIntroducida = $_POST["pass"];


try {

    $base = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("set character set utf8");

    $sql = "select* from tabla_usuarios where Nombre = :nom and pass =:con";
    $preparaConsulta = $base->prepare($sql);
    $parametroNombre = htmlentities(addslashes($nombreIntroducido));
    $parametroContra = htmlentities(addslashes($contraIntroducida));

    $preparaConsulta->bindValue(":nom",$parametroNombre);
    $preparaConsulta->bindValue(":con",$parametroContra);

    $preparaConsulta->execute();

    if($preparaConsulta->rowCount()==0){
        header("location:formulario.php?fallo=true");
    }else{
        session_start();
        $_SESSION["usuario"]=$nombreIntroducido;


        if(isset($_POST["recordar"])){
            setcookie("activaCheck",$nombreIntroducido,time()+30);
        }
        header("location:usuariosRegistrados.php");
    }


}catch (Exception $e){
    echo"no se ha podido conectar con la base de datos ".$e->getMessage();
    echo $e->getLine();
}finally{
    $base = null;
}