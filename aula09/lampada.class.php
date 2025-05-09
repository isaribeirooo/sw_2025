<?php
class lampada{
    public $fabricante;
    public $tensao;
    public $potencia;
    public $cor;
    public $status;

    public function ligar(){
        $this->status = true;
    }
    public function desligar(){
        $this->status = false;
    }
    public function MostrarDados(){
        echo"o fabricante é: ". $this-> fabricante . "<br>";
        echo"a tensao é: ". $this-> tensao . "<br>";
        echo"a potencia é: ". $this-> potencia . "<br>";
        echo"a cor é: ". $this-> cor . "<br>";
        if ($this->status == 1){
            echo "o status é: LIGADA! <br>";
        }else {
            echo "o status é: DESLIGADA! <br>";
        }
    
    }

}

?>