<?php

class produto {
public $nome;
public $cor;
public $tamanho;
public $formato;
public $textura;
public $material;
public $flexibilidade;
public $durabilidade;
public $marca;
public $preco;

public function substituirpeçaantiga(){
    echo "Você adquiriu nossos produtos!";
}
}

$nome = new produto ();

$nome-> substituirpeçaantiga();
$nome->nome = 'nome: kit embreagem';
$nome->cor = 'cor: metálica/preta';
$nome->tamanho = 'tamanho: ----';
$nome->formato = 'formato:circular';
$nome->textura = 'textura: ----';
$nome->material = 'material: metal';
$nome->flexibilidade = 'não flexível';
$nome->durabilidade = 'boa durabilidade';
$nome->marca = 'marca: Mopar';
$nome->preco = 'Valor total: R$4.200,00';

echo "</br>";
echo "</br>";

echo $nome-> nome;
echo "</br>";
echo $nome-> cor;
echo "</br>";
echo $nome-> tamanho;
echo "</br>";
echo $nome-> formato;
echo "</br>";
echo $nome-> textura;
echo "</br>";
echo $nome-> material;
echo "</br>";
echo $nome-> flexibilidade;
echo "</br>";
echo $nome-> durabilidade;
echo "</br>";
echo $nome-> marca;
echo "</br>";
echo $nome-> preco;
echo "</br>";
?>