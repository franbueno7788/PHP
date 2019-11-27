
<?php


$busqueda_id=$_POST["id"];

try {
    $base = new PDO('mysql:host=localhost;dbname=productos', 'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $sql ="delete from productosalimentarios where ID= :id";

    $resultado = $base->prepare($sql);

    $resultado->execute(array(":id" => $busqueda_id));

    $count=$resultado->rowCount(); //metodo que devuelve el número de filas de la consulta ejecutada

    if($count==0){
        echo "la ID indicada no existe";
    }else{
        echo "se ha borrado el registro";
    }
    $resultado->closeCursor();

}catch (PDOException $e){
    echo "no se ha podido realizar la consulta".$e->getMessage()."<br>";
    echo $e->getLine()."<br>";

}finally{
    $base=null;
}






