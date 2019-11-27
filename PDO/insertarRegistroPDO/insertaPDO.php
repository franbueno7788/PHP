
<?php


$busqueda_id=$_POST["id"];
$busqueda_cod=$_POST["codigo"];
$busqueda_nom=$_POST["nom"];
$busqueda_pais=$_POST["pais"];
$busqueda_precio=$_POST["precio"];

//settype($busqueda_id,"integer");
//settype($busqueda_precio,"integer");



try {

    $base = new PDO('mysql:host =localhost;dbname=productos', 'root', '');
    //$base=new PDO('mysql:host=localhost;dbname=productos', 'root', '');


    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $sql = "insert into productosalimentarios (ID,Código,Nombre,País,precio) values(:id,:cod,:nom,:pais,:prec)";

    $resultado = $base->prepare($sql);

    $resultado->bindParam(":id",$busqueda_id,PDO::PARAM_INT);   //Vincula un parámetro al nombre de variable especificado con bindParam
    $resultado->bindParam(":cod",$busqueda_cod,PDO::PARAM_STR);
    $resultado->bindParam(":nom",$busqueda_nom,PDO::PARAM_STR);
    $resultado->bindParam(":pais",$busqueda_pais,PDO::PARAM_STR);
    $resultado->bindParam(":prec",$busqueda_precio,PDO::PARAM_INT);


    //$resultado->execute(array(":id"=>$busqueda_id,":cod"=>$busqueda_cod,":nom"=>$busqueda_nom,":pais"=>$busqueda_pais,":prec"=>$busqueda_precio));  //Ejecuta una sentencia preparada con un array de valores de inserción (las dos opciones son válidas)


    $resultado->execute();

   echo "se ha creado el registro";

    $resultado->closeCursor();

}

catch (Exception $e){
    echo "error en la consulta :".$e->getCode()."<br>";
    echo $e->getLine()."<br>";
    echo $e->getMessage()."<br>";
}finally{
    $base = null;
}



