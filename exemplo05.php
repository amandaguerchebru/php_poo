<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;
    public $tipoFuncionario;

    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->descontos = $this->calcularDescontos();
        $this->tipoFuncionario = $this->categorizarFuncionarios();
    }

    function calcularDescontos()
    {
        return number_format($this->salario*0.275 + $this->previdencia, 2, ',', '.');
    }

    function categorizarFuncionarios(): string
    {
        $salario = $this->salario;

        if ($salario >= 1000 && $salario < 2000) {
            $tipoFuncionario = "Júnior";
        } else if ($salario >= 2000 && $salario < 3000) {
            $tipoFuncionario = "Pleno";
        } else if ($salario >= 3000) {
            $tipoFuncionario = "Sênior";
        } else {
            $tipoFuncionario = "Estagiário";
        }

        return $tipoFuncionario;
    }
}

$joao = new Funcionario('João Filho', 1000, 100);
$maria = new Funcionario('Maria Rute', 2000, 200);
$jose = new Funcionario('José Salgado', 3000, 300);

echo "O funcionário(a) $joao->nome é $joao->tipoFuncionario e o valor do desconto dele(a) é de R$ $joao->descontos. <br>";
echo "O funcionário(a) $maria->nome é $maria->tipoFuncionario e o valor do desconto dele(a) é de R$ $maria->descontos. <br>";
echo "O funcionário(a) $jose->nome é $jose->tipoFuncionario e o valor do desconto dele(a) é de R$ $jose->descontos. <br>";