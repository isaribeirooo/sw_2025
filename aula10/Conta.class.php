<?php
    class conta{

        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor>$this->Saldo){
                return "SALDO INSUFICIENTE";
            }else{
                $this->Saldo = $this->Saldo - $valor;
                $resultado = "Seu saldo atual é de R$".$this->Saldo;
                //$this->Saldo -= $valor;
                return $resultado;
            }
        
        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $resultado = "Seu saldo atual é de R$".$this->Saldo;
            //$this->Saldo -= $valor;
            return $resultado;
        }

        public function ConsultarSaldo(){
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "SALDO: " . $this->Saldo . "<br>";
        }
    }



?>