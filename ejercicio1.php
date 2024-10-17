<?php
// Función para generar un dado aleatorio entre 1 y 6 y devolver su imagen
function lanzarDado()
{
    $resultado = rand(1, 6); // Generar número aleatorio entre 1 y 6
    echo "<img src='img/dado{$resultado}.svg' alt='Dado {$resultado}' style='width:50px;height:50px;'>"; // Mostrar imagen del dado
    return $resultado;
}

// Generar el número de dados a lanzar (entre 1 y 10)
$numDados = rand(1, 10);

// Contadores para valores pares e impares
$pares = 0;
$impares = 0;

echo "<h3>$numDados dados</h3>";

// Lanzar cada dado y contar pares e impares
for ($i = 0; $i < $numDados; $i++) {
    $valorDado = lanzarDado(); // Lanzar dado y obtener resultado

    if ($valorDado % 2 == 0) {
        $pares++; // Contador de pares
    } else {
        $impares++; // Contador de impares
    }
}

//Esto es para ver si es uno solo y ha salido más de uno para el texto de abajo,simplemente para que quede "más bonito"

if ($pares == 0) {
    $textoPar = "No ha salido ningún número par";
} else if ($pares > 0 && $pares < 2) {
    $textoPar = "Ha salido 1 número par";
} else {
    $textoPar = "Han salido " . $pares . " números pares";
}

if ($impares == 0) {
    $textoImpar = "ningún número impar";
} else if ($impares > 0 && $impares < 2) {
    $textoImpar = "1 número impar";
} else {
    $textoImpar = $impares . " números impares";
}


// Mostrar resultados de pares e impares
echo "<p>" . $textoPar . " y " .  $textoImpar . "</p>";
