<?php

// Array vazio
$carros = [];
$carrosLegado = array();

// Declaração com valores (sintaxe curta e tradicional)
$carros = ["Fusca", "Monza", "Passat"];
$carrosLegado = array("Fusca", "Monza", "Passat");

// Atribuição por índice explícito
$carros[0] = "Fusca";
$carros[1] = "Monza";
$carros[2] = "Passat";

// Atribuição automática (próximo índice disponível)
$carros = [];
$carros[] = "Fusca";  // Índice 0
$carros[] = "Monza";  // Índice 1
$carros[] = "Passat"; // Índice 2

// Leitura por índice
echo "Primeiro carro: " . $carros[0];

// Modificação de um valor existente
$carros[1] = "Opala";

// Adicionar no final
$carros[] = "Chevette";
array_push($carros, "Gol", "Brasilia");

// Adicionar no início (reindexa os índices existentes)
array_unshift($carros, "Kombi");

// Remover do final e do início
$ultimo = array_pop($carros);     // Remove "Brasilia"
$primeiro = array_shift($carros);  // Remove "Kombi"

// Remover item específico por índice
unset($carros[1]); // Remove o item, mas mantém os índices restantes inalterados (cria "buraco")

// Reindexar o array para manter sequência numérica contínua (0, 1, 2, ...)
$carros = array_values($carros);

// Quantidade total de elementos
$total = count($carros);
echo "Total de carros: {$total}" . PHP_EOL;

// Ordena valores em ordem alfabética/crescente e reindexa
sort($carros);

// Ordena em ordem decrescente e reindexa
rsort($carros);

/*foreach simples*/

foreach ($carros as $carro) {
    echo "- {$carro}";
}

/*A função “print_r” imprime os elementos de um array.*/
print_r($carros);