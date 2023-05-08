
<?php

class cliente {
    public $nome;
    public $idade;
    public $endereço;
    public $número;
    public $sexo;
    public $nacionalidade;
    public $CPF;
    public $estado_civil;
    public $escolaridade;
    public $profissao;
    public $renda_mensal;

    public function cadastrar(){
        echo "Você está cadastrado em nosso sistema!";
    }
}

$pessoa = new cliente ();

$pessoa-> cadastrar();
$pessoa-> nome= 'Nome: Rodrigo Bittencourt';
$pessoa-> idade= 'Idade: 48 anos';
$pessoa-> endereço= 'Endereço: R. Santos Dummont, nº458';
$pessoa-> número= 'Contato: (18) 997874204';
$pessoa-> sexo= 'Sexo: Masculino';
$pessoa-> nacionalidade= 'Nacionalidade: brasileiro';
$pessoa-> CPF= 'CPF: 245655319-69';
$pessoa-> estado_civil= 'Estado civil: casado';
$pessoa-> escolaridade= 'Escolaridade: ensino superior';
$pessoa-> profissao= 'Profissão: Médico';
$pessoa-> renda_mensal= 'Renda mensal: R$19.450,00';

echo "</br>";
echo "</br>";

echo $pessoa-> nome;
echo "</br>";
echo $pessoa-> idade;
echo "</br>";
echo $pessoa-> endereço;
echo "</br>";
echo $pessoa-> número;
echo "</br>";
echo $pessoa-> sexo;
echo "</br>";
echo $pessoa-> nacionalidade;
echo "</br>";
echo $pessoa-> CPF;
echo "</br>";
echo $pessoa-> estado_civil;
echo "</br>";
echo $pessoa-> escolaridade;
echo "</br>";
echo $pessoa-> profissao;
echo "</br>";
echo $pessoa-> renda_mensal;
echo "</br>";

?>