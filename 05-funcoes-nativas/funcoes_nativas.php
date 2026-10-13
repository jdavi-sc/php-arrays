<?php

/*
 O PHP oferece diversas funções nativas para manipular, buscar, ordenar
 e inspecionar arrays de forma prática e otimizada.
*/

$carros = ["Fusca", "Monza", "Passat", "Fusca"];

// count: retorna a quantidade de elementos
echo "Total de itens: " . count($carros);

// is_array: verifica se a variável é um array
if (is_array($carros)) {
    echo "É um array válido.";
}

// in_array: verifica se determinado valor existe no array
if (in_array("Monza", $carros)) {
    echo "Monza foi encontrado.";
}

// array_search: busca o valor e retorna sua chave ou índice
$indice = array_search("Passat", $carros);
echo "Passat está no índice: " . $indice;

// array_unique: remove valores duplicados
$carrosUnicos = array_unique($carros);

// array_push e array_pop: insere e remove do final
array_push($carros, "Gol");
$ultimoRemovido = array_pop($carros);

// array_unshift e array_shift: insere e remove do início
array_unshift($carros, "Kombi");
$primeiroRemovido = array_shift($carros);

// unset: remove um elemento pela chave ou índice
unset($carros[1]);

// array_values: reindexa os índices numéricos
$carros = array_values($carros);

// array_splice: remove e/ou substitui uma fatia do array (índice inicial, quantidade, substitutos)
array_splice($carros, 1, 1, ["Opala"]);

// array_merge: une dois ou mais arrays
$novosCarros = ["Chevette", "Uno"];
$todosCarros = array_merge($carros, $novosCarros);

// Funções para arrays associativos
$ficha = [
    'marca'  => "VW",
    'modelo' => "Fusca",
    'ano'    => 1974
];

// array_key_exists: verifica se uma chave específica existe
if (array_key_exists('modelo', $ficha)) {
    echo "A chave modelo existe.";
}

// array_keys e array_values: extrai apenas chaves ou apenas valores
$chaves  = array_keys($ficha);
$valores = array_values($ficha);

// sort e rsort: ordenação crescente e decrescente
sort($todosCarros);
rsort($todosCarros);

/* A função print_r imprime a estrutura do array */
print_r($todosCarros);