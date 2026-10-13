<?php

/*
 Arrays mistos combinam chaves associativas (strings) e índices numéricos no mesmo array.
 O PHP gerencia internamente ambos os tipos na mesma estrutura.
*/

$carros = array(
    'vw'        => "Fusca",
    0           => "Passat",
    'chevrolet' => "Monza",
    1           => "Chevette",
    'fiat'      => "Tempra",
    2           => "Uno"
);

// Acessando por chave string e por índice numérico
echo "Chave string ('vw'): " . $carros['vw'];
echo "Índice numérico (0): " . $carros[0];

// Inserção automática (assume o maior índice inteiro + 1)
$carros[] = "Gol"; // Recebe índice 3 automaticamente

// Iteração percorrendo índices numéricos e chaves strings
foreach ($carros as $chave => $valor) {
    echo "[{$chave}] => {$valor}";
}

/* A função print_r imprime a estrutura mista */
print_r($carros);