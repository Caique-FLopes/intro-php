<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Caique';
$idade = 65;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O atleta ".$nome. " competira na categoria infantil";
        
    }
}

else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescentes')
            echo "O atleta ".$nome. " competira na categoria adolescente";
        
    }
}

else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O atleta ".$nome. " competira na categoria adulta";
        
    }
}