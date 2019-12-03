
<?php



    session_start();
    setcookie("activaCheck",$_POST["nombre"],time()-1);
    session_destroy();
    header("location:formulario.php?cierre=true");
