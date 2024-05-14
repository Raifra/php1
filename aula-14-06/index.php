<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raifran Lindo</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h1> Array-laços</h1>
    <h2>Exemplo 01</h2>

    <pre>
    <?php     
    $A1=array("Raifran ","luis ","Deus ");
    echo "   ";
    echo $A1[0];
    echo $A1[1];
    echo $A1[2];
       ?>  
    </pre>

    <h2> Array com for<h2>
        <pre>
        <?php 
        $A2= array(10,9,8,7);
        echo"<br>";  
        echo $A2[0];
        echo"<br>";
        echo $A2[1]; 
        echo"<br>"; 
        echo $A2[2]; 
        echo"<br>";
        echo $A2[3]; 
        ?>           
        </pre>

<h2>Impressão com for</h2>
<pre>
    <?php
    for($x=0; $x<3; $x++){
        echo "posicao $x o valor é $A1[$x]";
        }
    ?>
</pre>

<h2>Impressão com  foreach</h2>
<pre>
    <?php
    foreach ($A1 as $dados)
    echo $dados
    ?>
</pre>

<h2>Array Definição Explicita (com chave)</h2>
<pre>
   <?php 
   $var= array("Raifran " => 25,
            "luis " => 44,
            "Deus " => 12,

    );

    foreach ($var as $chave => $valor)
        echo  "$chave: tem $valor anos "  
   ?>
</pre> 

<h2>Print var faz o que ?</h2>
<p>print_r mostra o que tem armazendo no array</p>

<pre>
    <?php
    print_r($var);
    ?>
</pre>

<h2>Array multidimensional: Definição Explicita <br></h2>
<pre>
    <?php
     $alunos= array("Maria" =>
                           
                                array("endereco" => "Rua Chile",
                                      "bairro" =>   "Reubouças",
                                      "cidade" =>   "Urandi"),
                    "João" =>
                                 array("endereco" => "Rua Calderão",
                                       "bairro" =>   "Preto Alegre",
                                       "cidade" =>   "Rio de Janeiro"),
                    "Zeca" => 
                                 array("endereco" => "Rua sete de setembro",
                                       "bairro" =>   "Pesqueiro",
                                       "cidade" =>   "Rio Grande")   
                                          
);


?>
 
<pre>

<h2>Impressão com foreach com array dentro do array</h2>
<pre>
<?php

foreach($alunos as $chave => $valor2){
    echo $chave.":<br>";

foreach($valor2 as $chave => $valor){
    echo " -$valor<br>";
}
echo"<br>";
}
?>
    </pre>


    

</body>
</html>