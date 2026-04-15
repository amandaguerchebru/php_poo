<?php
class Carro {  
    public $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
    {
        return $this->velocidade; 
    }

    public function setVelocidade($novaVelocidade)
    {
        if ($novaVelocidade >= 0 && $novaVelocidade <= 200)
            {
                $this-> velocidade = $novaVelocidade;
            }
            else 
                {
                    echo "Velocidade inválida, a nova velocidade deve ser até 200km/h!";
                }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
{meuCarro->getVelocidade() = 5000}; // Velocidade de foguete?
{$meuCarro->getVelocidade() = -60};   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>