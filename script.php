
<?php 

$categorias = [] ;
$categorias[] = 'infantil';
$categorias[] = 'adoslescente';
$categorias[] = 'adulto';


$nome = 'Igor' ;
$idade = 19;

if($idade >= 6 && $idade <= 12){
    
  echo "O nadador " .$nome. " será da categoria ".$categorias[0]. ".";
    
}else if($idade >= 13 && $idade <= 18){
   
  echo "O nadador " .$nome. " será da categoria ".$categorias[1]. ".";

}else {
   
    echo "O nadador " .$nome. " será da categoria ".$categorias[2]. ".";

}
    