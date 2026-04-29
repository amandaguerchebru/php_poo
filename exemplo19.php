<?php

abstract class FiguraGeometrica{
    private $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function printCaracteristicas()
    {
        $areaTemp = $this->area();
        $perimetroTemp = $this->perimetro();
        echo "Tipo: $this->tipo, Àrea: $areaTemp, Perímetro: $perimetroTemp"; 
    }

    public abstract function area();

    public abstract function perimetro();
}

class Circunferencia extends FiguraGeometrica{
    private $raio;

    public function __construct($tipo, $raio)
    {
        // executa o construct do meu pai
        parent:: __construct($tipo);
        // :: = operador de função de escopo
        $this->raio = $raio;
    }

    public function area()
    {
        return 3.14 * $this->raio * $this->raio;
    }

    public function perimetro()
    {
        return 2 * 3.14 * $this->raio;
    }
}