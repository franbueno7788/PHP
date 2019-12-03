<?php


$emailIntroducido = $_POST["email"];
$nombreIntroducido = $_POST["nombre"];
$contrasenaIntroducida = $_POST["pass"];
$contrasenaIntroducida2 = $_POST["pass2"];



if (!filter_var($emailIntroducido, FILTER_VALIDATE_EMAIL)) {
    header("location:formulario.php?errorEmail=true");

    }elseif ($contrasenaIntroducida!=$contrasenaIntroducida2){
    header("location:formulario.php?errorContra=true");
}else {
    $passCifrado = password_hash($contrasenaIntroducida,PASSWORD_DEFAULT);


    try {
        $base = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("set character set utf8");

        $sql = "insert into usuarios_registrados (nombre,email,pass) values (:nom,:email,:pass)";

        $preparaRegistro = $base->prepare($sql);

        $preparaEmail = htmlentities(addslashes($emailIntroducido));
        $preparaNombre = htmlentities(addslashes($nombreIntroducido));
        $preparaContra = htmlentities(addslashes($passCifrado));

        $preparaRegistro->bindValue(":nom", $preparaNombre);
        $preparaRegistro->bindValue(":email", $preparaEmail);
        $preparaRegistro->bindValue(":pass", $preparaContra);

        $preparaRegistro->execute();

        if ($preparaRegistro->rowCount() == 0) {

        } else {
            echo "se ha realizado el registro con éxito";

        }

    } catch (Exception $e) {
        header("location:formulario.php?fallo=true");
        echo "no se ha podido realizar la conexión" . $e->getMessage() . "<br>";
        echo $e->getLine();
    }
}


