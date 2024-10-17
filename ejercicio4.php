<?php

// Función que lanza el dado y devuelve el resultado
function lanzarDado()
{
    return rand(1, 6); // Generar número aleatorio entre 1 y 6 y devolverlo
}

function mostrarDado($resultado)
{
    echo "<img src='img/dado{$resultado}.svg' alt='Dado {$resultado}' style='width:50px;height:50px;'>";
}


// Función que lanza 6 dados para un jugador y devuelve los resultados en un array
function tiradaInicial()
{
    $resultados = [];
    for ($i = 0; $i < 6; $i++) {
        $valorDado = lanzarDado(); // Lanzar dado y obtener resultado
        $resultados[] = $valorDado; // Guardar resultado en el array
        mostrarDado($valorDado); // Mostrar imagen del dado
    }
    return $resultados;
}

// Función para eliminar los dados que coincidan con el valor dado
function eliminarDados($tirada, $dadoAEliminar)
{
    $dadosRestantes = [];
    foreach ($tirada as $dado) {
        if ($dado != $dadoAEliminar) {
            $dadosRestantes[] = $dado; // Guardar solo los dados que no coinciden
        }
    }
    return $dadosRestantes;
}

// Mostrar la tirada inicial de 6 dados
echo "<p><strong>Tirada de 6 dados:</strong></p>";
$tirada = tiradaInicial();

// Generar y mostrar un dado al azar que se va a eliminar
$dadoAEliminar = lanzarDado();
echo "<p><strong>Dado a eliminar:</strong></p>";
mostrarDado($dadoAEliminar);

// Eliminar los dados que coincidan con el dado suelto y mostrar los dados restantes
$dadosRestantes = eliminarDados($tirada, $dadoAEliminar);

echo "<p><strong>Dados restantes:</strong></p>";
if (count($dadosRestantes) > 0) {
    foreach ($dadosRestantes as $dado) {
        mostrarDado($dado);
    }
} else {
    echo "<p>No quedan dados restantes.</p>";
}
