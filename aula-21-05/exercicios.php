<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

           print_r($array['alunos'] [0] ['nota']);         

           ?>

           <h2>Imprimir apanas alunos aprovados</h2>

           

        </pre>
    
</body>
</html>