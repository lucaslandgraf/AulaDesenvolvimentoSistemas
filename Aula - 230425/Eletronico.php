<?php
class Eletronico extends Produto{ // Herança
    private $voltagem;          

    public function __construct($descricao, $valor, $qtdestoque, $voltagem){
        parent::__construct($descricao, $valor, $qtdestoque);
        $this->voltagem = $voltagem;
    }

    public function getVoltagem(){
        return $this->voltagem;
    }

    public function setVoltagem($v){
        return $this->voltagem = $v;
    }

    public function __toString(){
        return parent::__toString()." Eletronico: Voltagem: {$this->voltagem}";
    }
}
?>