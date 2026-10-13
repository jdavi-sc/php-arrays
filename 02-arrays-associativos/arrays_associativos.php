<?php

/*
 Arrays associativos utilizam chaves nomeadas (strings) definidas pelo desenvolvedor
 em vez de índices numéricos sequenciais para associar e acessar valores (chave => valor).
*/

// Primeira forma (função array)
$carros = array(
    'vw'        => "Fusca",
    'chevrolet' => "Monza",
    'fiat'      => "Tempra"
);

// Segunda forma (sintaxe curta com colchetes)
$carros = [
    'vw'        => "Fusca",
    'chevrolet' => "Monza",
    'fiat'      => "Tempra"
];

// Terceira forma (atribuição direta por chave)
$carros['vw']        = "Fusca";
$carros['chevrolet'] = "Monza";
$carros['fiat']      = "Tempra";

// Leitura de um valor pela chave
echo "Modelo da VW: " . $carros['vw'];

// Modificando um valor existente
$carros['vw'] = "Golf";

// Adicionando um novo par chave => valor
$carros['ford'] = "Ka";

// Removendo um elemento pela chave
unset($carros['chevrolet']);

// Iteração com foreach (obtendo chave e valor)
foreach ($carros as $marca => $modelo) {
    echo "Marca: {$marca} | Modelo: {$modelo}";
}

// Obtendo lista apenas de chaves ou apenas de valores
$marcas = array_keys($carros);
$modelos = array_values($carros);

/* A função print_r imprime os elementos do array */
print_r($carros);