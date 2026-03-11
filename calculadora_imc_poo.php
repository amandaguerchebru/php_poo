<?php
class Pessoa {
    public string $nome;
    public float $peso;
    public float $altura;
    public float $imc;

    public function __construct($nome, $peso, $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $this->calcularIMC();
    }

    public function calcularIMC(): float
    {
        return $this->peso / ($this->altura * $this->altura);
    }

    public function exibirIMC(): string
    {
        $imc_formatado = number_format($this->imc, 2, ',', '.');
        return "O IMC de {$this->nome} é {$imc_formatado}";
    }
}

$ana = new Pessoa ("Ana Latorre", 50, 1.63);
echo $ana->exibirIMC();

echo "<br>";

$gustavo = new Pessoa ("Gustavo Almeida", 160, 1.93);
echo $gustavo->exibirIMC();