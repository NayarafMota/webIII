<?php

/*
$nome = "Nay Linda" ;
$NOME = "Nick";
$idade = 23 ;
$altura = 1.53;



echo 'Olá mundo! Eu sou a' .$nome. 'tenho' .$idade. 'anos e' .$altura. 'altura';


$a = "10"; 
$b = 19; //float ou inteiro pra calcular

var_dump($a); //mostra o que ta rolando 


$nomes = array("nay","nick","carol");
var_dump($nomes);

for($i=0;$i<=2;$i++){
    echo $nomes[$i];
    echo "<br>";
}


$funcionario = array("nome"=> "alex","idade"=>21,"salario"=>12000.27,"ativo"=>true);
foreach($funcionario as $chave => $valor){  
echo "$chave: $valor ";
echo "<br>";
}
*/


//EXERCICIO 1 

/*
$a=11;
$b=40;
$c=20;
$d=22;
  */

  $numeros = [26, 55, 31, 23, 7];

  // Array para armazenar os quadrados
  $quadrados = [];
  
  // Itera sobre cada número na lista
  foreach ($numeros as $numero) {
      // Calcula o quadrado do número e adiciona ao array de quadrados
      $quadrados[] = $numero * $numero;
  }
  
  // Exibe o resultado
  foreach ($quadrados as $indice => $quadrado) {
      echo "O quadrado de " . $numeros[$indice] . " é " . $quadrado . "<br>";
  }

  // EXERCICIO 2 
?>