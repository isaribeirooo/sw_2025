<?php
   class Produto{
     private $Nome;
     private $Preco;
     private $Quantidade;
   

     public function __construct($Nome, $Preco=0, $Quantidade=0){
               $this->Nome = $Nome;
               $this->Preco = $Preco;
               $this->Quantidade = $Quantidade;
    }


     //GETTERS
     public function getNome(){
        return $this->Nome;
    }

     public function getPreco(){
        return $this->Preco;
    }

     public function getQuantidade(){
        return $this->Quantidade;
    }

    //SETTERS
    public function setNome(){
       $this->Nome = $Nome; 
    }
}
?>