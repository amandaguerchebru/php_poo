<?php
class Carro
{
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade)
    {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function setVelocidade($novaVelocidade)
    {
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200) {
            $this->velocidade = $novaVelocidade;
        } else {
            echo "Velocidade inválida: $novaVelocidade. A nova velocidade deve ser até 200km/h! <br>";
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
{
    $meuCarro->setVelocidade(100);
} // Velocidade de foguete?
{
    $meuCarro->setVelocidade(5000);
}   // Carro andando no tempo?
{
    $meuCarro->setVelocidade(-60);
}   

echo "Modelo: " . $meuCarro->getModelo(). "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
