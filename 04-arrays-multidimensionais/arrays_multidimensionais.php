<?php

/*
 Arrays multidimensionais são arrays que contêm outros arrays em seus elementos.
 Funcionam como matrizes ou estruturas de dados em camadas (dimensões).
*/

// Primeira forma (função array aninhada)
$carros = array(
    'vw'        => array("Fusca", "Passat"),
    'chevrolet' => array("Monza", "Chevette"),
    'fiat'      => array("Tempra", "Uno")
);

// Segunda forma (sintaxe curta com colchetes)
$carros = [
    'vw'        => ["Fusca", "Passat"],
    'chevrolet' => ["Monza", "Chevette"],
    'fiat'      => ["Tempra", "Uno"]
];

// Terceira forma (atribuição direta por dimensões)
$carros['vw'][0]        = "Fusca";
$carros['vw'][1]        = "Passat";
$carros['chevrolet'][0] = "Monza";
$carros['chevrolet'][1] = "Chevette";

// Acesso a elementos em diferentes dimensões
echo "Primeiro carro da VW: " . $carros['vw'][0];

// Modificando um valor existente
$carros['vw'][1] = "Golf";

// Adicionando um novo elemento a um sub-array
$carros['fiat'][] = "Palio";

// Adicionando uma nova marca com novo sub-array
$carros['ford'] = ["Ka", "Fiesta"];

// Removendo um elemento específico de uma dimensão
unset($carros['chevrolet'][0]);

// Iteração com foreach aninhado
foreach ($carros as $marca => $modelos) {
    echo "Marca: {$marca}";
    foreach ($modelos as $modelo) {
        echo "- {$modelo}";
    }
}

/* A função print_r imprime a estrutura multidimensional */
print_r($carros);