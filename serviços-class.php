<?php
 class serviço {
    public $descricao; //ATRIBUTO
    public $valor; //ATRIBUTO
    public $data; //ATRIBUTO
    public $forma_de_pagamento; //ATRIBUTO
    public $duracao; //ATRIBUTO

    public function consertar(){
      echo "As alterações do seu veículo foram realizadas!";
    }
 }

 $servico = new serviço();

$servico->consertar();

$servico->descricao='Serviço: Troca de peças';

$servico->valor='Valor: Peça+mão de obra = R$5.000,00';

$servico->data='Data do procedimento: 06/03/2023';

$servico->forma_de_pagamento='Forma de pagamento: Crédito, parcelado em 5x';

$servico->duracao='Duração de procedimento: 2 dias';


echo "</br>";
echo "</br>";

echo $servico-> descricao;
echo "</br>";
echo $servico-> valor;
echo "</br>";
echo $servico-> data;
echo "</br>";
echo $servico-> forma_de_pagamento;
echo "</br>";
echo $servico-> duracao;
echo "</br>";

?>