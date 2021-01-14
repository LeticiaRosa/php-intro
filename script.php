<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return ;
}
if(strlen($nome)<3){
    echo 'O nome deve conter mais de 3 caracteres!';
    return ;
}

if(strlen($nome)>40){
    echo 'O nome é muito extenso!';
    return ;
}
// is_string ou is_numeric
if (!is_numeric($idade )){
    echo "Informe um número na idade";
    return;
}