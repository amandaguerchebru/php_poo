<?php
class Pessoa {
    public $nome;
    public $peso;
    public $altura;
    public $imc;

    function __construct($nome, $peso, $altura)
    {
        $this->nome=$nome;
        $this->peso=$peso;
        $this->altura=$altura;
        $this->imc = $this->calcularImc();
    }

    function calcularImc()
    {
        return number_format($this->peso / ($this->altura*$this->altura), 2, ",", ".");
    }
}

$paulo = new Pessoa('Paulo Ferraz', 89, 1.90);
echo "$paulo->nome seu IMC é $paulo->imc. <br>";

// $gestrudes = new Pessoa('Gertrudes', 67, 1.60);
// echo "$gertrudes->nome seu IMC é $gertrudes->imc. <br>";