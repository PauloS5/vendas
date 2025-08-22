<?php
    $products = json_decode(file_get_contents("products.json"));
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>lista deprodutos</title>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Lista de produtos</h1>
        <table border>
            <tr>
                <th colspan="4">PRODUTOS</th>
            </tr>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>preço</th>
                <th>estoque</th>
            </tr>
            <?php
                foreach ($products as $p) {
                    echo "
                        <tr>
                            <td>{$p->id}</td>
                            <td>{$p->name}</td>
                            <td>{$p->price}</td>
                            <td>{$p->count}</td>
                        </tr>
                    ";
                }
            ?>
        </table>
    </body>
</html>