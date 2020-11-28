<?php
require "Connect.php";
class Inventario{

    private int $idIte;
    private int $idPue;
    private string $item;
    private int $stock;
    private string $alta;


    public function getIdIte(){

        return $this->idIte;
    }
    public function getIdPue(){

        return $this->idPue;
    }
    public function getItem(){

        return $this->item;
    }
    public function getStock(){

        return $this->stock;
    }
    public function getAlta(){

        return $this->alta;
    }

    


    //
    public function setIdIte($idIte){

       $this->idIte = $idIte;
    }
    public function setIdPue($idPue){

         $this->idPue = $idPue;
    }
    public function setItem($item){

         $this->item = $item;
    }
    public function setStock($stock){

         $this->stock = $stock;
    }
    public function setAlta($alta){

         $this->alta = $alta;
    }


    public function getInventario($idPue){
        require_once "Connect.php";
        $connectItems = Connect::getInstance();
        $resultItems = Connect::query("select * from items where idPue=$idPue");

        $array = [];

        while($list = $resultItems->fetchObject("Inventario")){
            $newInstance = new Inventario();
            
            $newInstance ->setIdIte($list->idIte);
            $newInstance ->setIdPue($list->idPue);
            $newInstance ->setItem($list->item);
            $newInstance ->setStock($list->stock);
            $newInstance ->setAlta($list->alta);
            array_push($array, $newInstance);
        }

        return $array;
    }

    public function addInventario($idPue,$item , $stock ,$alta){

        $connect =Connect::getInstance();
  
        $result = Connect::query("insert into items (idPue, item, stock, alta)
         values ($idPue , '$item' ,$stock, $alta)");
       
         
     }

     public function deleteInventario($idIte){
        $connect =Connect::getInstance();
  
        $result = Connect::query("DELETE from items where idIte = $idIte");
        
     }

     public function updateInventario($idIte , $item , $stock){
/*
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value
*/

    $connect = Connect::GetInstance();
    $result = Connect::query("UPDATE items SET item = '$item' , stock = '$stock' WHERE idIte= $idIte");
        
     }

}