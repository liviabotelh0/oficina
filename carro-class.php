<?php

class carro {
    public $modelo; //ATRIBUTO
    public $cor; //ATRIBUTO
    public $ano; //ATRIBUTO
    public $placa; //ATRIBUTO
    public $marca; //ATRIBUTO
 
    public function arrumar(){
        echo "Seu veículo foi registrado.";
    }
}
$carro = new carro();

$carro-> arrumar();

$carro->modelo='Modelo: Creta';

$carro->cor='Cor: Preto';

$carro->ano='Ano: 2022';

$carro->placa='Placa: DTZ-5050';

$carro->marca='Marca: Hyundai';

echo "</br>";
echo "</br>";

echo $carro-> modelo;
echo "</br>";
echo $carro-> cor;
echo "</br>";
echo $carro-> ano;
echo "</br>";
echo $carro-> placa;
echo "</br>";
echo $carro-> marca;
echo "</br>";
?>