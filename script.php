
<?php 

$categorias = [] ;
$categorias[] = 'infantil';
$categorias[] = 'adoslescente';
$categorias[] = 'jovem';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'] ;
$idade = $_POST['idade'];

if(empty($nome)){
   
  echo "E necessário inserir o nome do competidor";
  return;
}

if(strlen($nome) < 3 || strlen($nome) > 40){

  echo "O nome deve conter mais de 3 cacteres e possuir no maximo 40"; 
  return;
}

if(!is_numeric($idade)){

  
}

if($idade >= 6 && $idade <= 12){
    
  echo "O nadador " .$nome. " tem idade de " .$idade. " anos, sua categoria será ".$categorias[0]. ".";
    
}else if($idade >= 13 && $idade <= 18){
   
  echo "O nadador " .$nome. " tem idade de " .$idade. " anos, sua categoria será ".$categorias[1]. ".";

}else if($idade >= 18 && $idade <= 30){
   
  echo "O nadador " .$nome. " tem idade de " .$idade. " anos, sua categoria será ".$categorias[2]. ".";

}else if($idade >= 31 && $idade <= 50){

  echo "O nadador " .$nome. " tem idade de " .$idade. " anos, sua categoria será ".$categorias[3]. ".";

}else if($idade >= 0 && $idade <= 5){

  echo "O competidor " .$nome. " não poderá competir pois sua idade é menor que 6 anos";

}else {

  echo "O nadador " .$nome. " tem idade de " .$idade. " anos, sua categoria será ".$categorias[4]. ".";

}
    