<?php 

$categorias = [2] ;
$categorias[] = 'infantil';
$categorias[] = 'adoslescente';
$categorias[] = 'adulto';


$nome = 'Igor' ;
$idade = 7;

if($idade >= 6 && $idade <=12){

   for($i = 0; $i <= count($categorias); $i++){

       if($categorias[$i] == 'infantil'){
           echo "O nadador". $nome. " compete na categoria infantil";
       }
   }
}
else if($idade >=13 && $idade <= 18){

    for($i =0; $i <= count($categorias); $i++){
        if($categorias[$i] =='adoslescente'){
            echo "O nadador". $nome. " compete na categoria adolescente";
        }
    }
}else{
    for($i =0; $i <= count($categorias); $i++){

        if($categorias[$i] =='adulto'){
            echo "O nadador ". $nome. " compete na categoria adulto";
        }
    }
}


?>