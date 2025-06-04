<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        html {
            font-size: 24px;
        }

        main {
            width: 800px;
            padding: 20px;
            margin: 20px auto;
            border: 1px solid #464646;
        }
    </style>
</head>

<body>
    <main>
        <!-- 
        foreach($array as $valor){
            //Código para executar
        }
        $array = é a estrutura qe desejamos percorrer
        $valor = a cada iteração, a variável $valor recebe o valor de um item do array  
        -->
        <section>
            <h3>Foreach com Array Indexado</h3>
            <?php
            $nomes = ['Ana', 'Pedro', 'Maria', 'João'];
            foreach ($nomes as $nome) {
                echo "{$nome}<br>";
            }
            ?>
        </section>
        <section>
            <h3>Foreach com Array Associativo</h3>
            <?php
            $idades = ['Ana' => 25, 'Pedro'  => 18, 'Maria' => 20, 'João' => 30];
            foreach ($idades as $nome => $idade) {
                echo "{$nome} tem {$idade} anos.<br>";
            }
            ?>
        </section>
        <section>
            <h3>Foreach com Array Multidimensional (Matrizes)</h3>
            <?php
            $produtos = [
                ['nome' => 'Camiseta', 'preco' => 49.99],
                ['nome' => 'Calça', 'preco' => 79.99],
                ['nome' => 'Blusa', 'preco' => 99.99],
                ['nome' => 'Chapéu', 'preco' => 129.99],
                ['nome' => 'Tênis', 'preco' => 249.99]
            ];
            foreach ($produtos as $produto) {
                echo "<h4>{$produto['nome']}</h4>";
                echo "<h3>R$ {$produto['preco']}</h3>";
            }
            foreach ($produtos as $id => $produto) {
                echo "Produto: {$id} - ";
                echo "{$produto['nome']} - ";
                echo "R$ {$produto['preco']}<br>";
            }
            ?>
        </section>
    </main>
</body>

</html>