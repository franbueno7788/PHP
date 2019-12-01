
<?php

    $nombreIntroducido = $_POST["nombre"];
    $contraIntroducida = $_POST["pass"];

    try {
        $base = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("set character set utf8");

        $sql ="select* from tabla_usuarios where Nombre =:nom and pass=:contra";

        $preparaConsulta = $base->prepare($sql);

        $parametroNombre = htmlentities(addslashes($nombreIntroducido));
        $parametroContra = htmlentities(addslashes($contraIntroducida));

        $preparaConsulta->bindValue(":nom",$parametroNombre);
        $preparaConsulta->bindValue(":contra",$parametroContra);

        $preparaConsulta->execute();

        if($preparaConsulta->rowCount()==0){
            header("location:formulario.php?fallo=true");
        }else{
            session_start();
            $_SESSION["usuario"] = $nombreIntroducido;
            header("location:usuariosRegistrados.php");
        }

    }catch (Exception $e){

        echo "no se ha podido establecer conexión".$e->getMessage()."<br>";
        echo $e->getLine();
    }finally{
        $base=null;
    }
