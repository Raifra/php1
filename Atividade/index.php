<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <pre id="pre12">
        <h1 id=conte>Array Multidimensional</h1>
        
    <?php
    $array = [
        'alunoos' => [
            [
                'id' => 0,
                'nome' => 'Fabio',
                'nota' => 2
            ],
            [
                'id' => 1,
                'nome' => 'Pedro',
                'nota' => 7
            ],
            [
                'id' => 2,
                'nome' => 'Gabriela',
                'nota' => 10
            ],

            [
                'id' => 3,
                'nome' => 'Maria',
                'nota' => 8
            ],

            [
                'id' => 4,
                'nome' => 'Raifran',
                'nota' => 5
            ],
        ]
    ];
    ?>

        <h2>APROVADO</H2>
        <table>
    
    <tr>
        <th>id</th>
        <th>nome</th>
        <th> notas</th>
    </tr>

        <?php
        foreach ($array['alunoos'] as $aluno) {
            echo "<tr>";
            foreach ($aluno as $key => $value) {
                if ($aluno['nota'] >= 7) {
                    echo "<td>"     . $value . "</td>";
                }
            };
            echo "</tr>";
        }

        ?>
        
        
    </table>

    <h2>REPROVADO</H2>
        <table>
    
    <tr>
        <th>id</th>
        <th>nome</th>
        <th> notas</th>
    </tr>

        <?php
        foreach ($array['alunoos'] as $aluno) {
            echo "<tr>";
            foreach ($aluno as $key => $value) {
                if ($aluno['nota'] < 3) {
                    echo "<td>"     . $value . "</td>";
                }
            };
            echo "</tr>";
        }

        ?>
        
        
    </table>

    <h2>FINAL</H2>
        <table>
    
    <tr>
        <th>id</th>
        <th>nome</th>
        <th> notas</th>
    </tr>

        <?php
        foreach ($array['alunoos'] as $aluno) {
            echo "<tr>";
            foreach ($aluno as $key => $value) {
                if ($aluno['nota'] > 3 && $aluno['nota'] < 7) {
                    echo "<td>"     . $value . "</td>";
                }
            };
            echo "</tr>";
        }

        ?>
        
        
    </table>
    
        </pre>

</html>