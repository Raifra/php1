<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrey</title>
    <link rel="stylesheet" href="sayles.css">
</head>
<body>    

<pre>

    <?php
   
   $array = [
       'alunos' => [
           [
               'id' => 1,
               'nome' => 'Raifran',
               'endereco' => 'Pesqueiro',
               'idade' => '18',
               'cpf' => '000000001',
               'nota' => '10'

               
           ],
           [
               'id' => 2,
               'nome' => 'João',
               'endereco' => 'Rua sete de setembro',
               'idade' => '20',
               'cpf' => '000000002',
               'nota' => '5'
           ],

           [
               'id' => 2,
               'nome' => 'Vaca',
               'endereco' => 'Pasto',
               'idade' => '39',
               'cpf' => '000000003',
               'nota' => '7'
           ]
       ]

   
           ];

           
           print_r($array);

           print_r($array['alunos'] [0] ['nome']);

           print_r($array['alunos'][0]['endereco']);

           ?>
           
           >
<table>
  <tr>
    <th>nome</th>
    <th>endereco</th>
    <th>idade</th>
  </tr>

  <tr>
    <td> <?php print_r($array['alunos'] [0] ['nome']);?> </td>
    <td> <?php print_r($array['alunos'] [0] ['endereco']);?> </td>
    <td> <?php print_r($array['alunos'] [0] ['idade']);?> </td>
  </tr>
  <tr>
    <td> <?php print_r($array['alunos'] [1] ['nome']);?> </td>
    <td> <?php print_r($array['alunos'] [1] ['endereco']);?> </td>
    <td> <?php print_r($array['alunos'] [1] ['idade']);?> </td>
  </tr>

  <tr>
    <td> <?php print_r($array['alunos'] [2] ['nome']);?> </td>
    <td> <?php print_r($array['alunos'] [2] ['endereco']);?> </td>
    <td><?php print_r($array['alunos'] [2] ['idade']);?></td>
  </tr>
</table>


<h2>Impressão com for</h2>

<table>
<tr>
    <th>nome</th>
    <th>endereco</th>
    <th>idade</th>
  </tr>




<?php

for($i=0; $i<count($array['alunos']); $i++) { ?>
    <tr>
    <td> <?php print_r($array['alunos'] [$i] ['nome'])?> </td>
    <td> <?php print_r($array['alunos'] [$i] ['endereco'])?> </td>
    <td> <?php print_r($array['alunos'] [$i] ['idade'])?> </td>  
  </tr>

<?php }?>


</table>

    </pre>
    


            
        

        
    
    
    
    
    
</body>
</html>