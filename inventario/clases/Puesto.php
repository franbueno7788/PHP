<?php
 require_once "Connect.php";
class Puesto{

    private int $idPue;
    private string $nombre;
    private string $ubicacion;
    private int $planta;
    private int $numero;
    


    public function setIdPue($idPue){
        $this->idPue = $idPue;

    }
    public function setNombre($nombre){
        $this->nombre = $nombre;

    }
    public function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;

    }
    public function setPlanta($planta){
        $this->planta = $planta;

    }
    public function setNumero($numero){
        $this->numero = $numero;

    }

    public function getIdPue(){
       return $this->idPue;
    }
    public function getNombre(){
        return $this->nombre;
     }
     public function getUbicacion(){
        return $this->ubicacion;
     }
     public function getPlanta(){
        return $this->planta;
     }
     public function getNumero(){
        return $this->numero;
     }

     


     public function selectAll(){

        $connect =Connect::getInstance();
  
        $result = Connect::query("select * from puestos");
        $array =[];
        while($list = $result->fetchObject("Puesto")){
            $newInstance = new Puesto();
            $newInstance->setIdPue($list->idPue);
            $newInstance->setNombre($list->nombre);
            $newInstance->setUbicacion($list->ubicacion);
            $newInstance->setPlanta($list->planta);
            $newInstance->setNumero($list->numero);
            array_push($array, $newInstance);
            
        }
        $result = null;
        $connect = null;
        return $array;
     }

     public function addPuesto($nombre , $ubi ,$planta, $num){

        $connect =Connect::getInstance();
  
        $result = Connect::query("insert into puestos (nombre, ubicacion, planta, numero)
         values ('$nombre' , '$ubi' ,'$planta', '$num')");
       
         $result = null;
         $connect = null;
     }
}