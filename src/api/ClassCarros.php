<?php
include("ClassConexao.php");
class ClassCarros extends ClassConexao{
    #Exibição dos Carros em JSON
    public function exibeCarros(){
        $BFetch=$this->conectaDB()->prepare("select * from carros");
        $BFetch->execute();

        $J=[];
        $I=0;
        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
            $J[$I]=[
                "id"=>$Fetch['id'],
                "marca"=>$Fetch['marca'],
                "modelo"=>$Fetch['modelo'],
                "ano"=>$Fetch['ano']
            ];
            $I++;
        }
        header("Access-Control-Allow-Origin:*");
        header("Content-Type:application/json");
        echo json_encode($J);
    }
}
?>