<?php

class Visibilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        //seleciona os atributos da classe e atraibui valor
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }

    public function publicFunc() {
        echo "Método Público<br>";
    }

    protected function protectedFunc() {
        echo "Método Protegido<br>";
    }

    // protege os filhos mas também priva de tudo 
    private function privateFunc() {
        echo "Método Privado<br>";
    }
}

$teste = new Visibilidade(1, 2, 3);

echo "Atributo Public = $teste->varPublic";
// echo "Atributo Protected = $teste->varProtected";
// echo "Atributo Private = $teste->varPrivate";

echo "<br>";

$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();