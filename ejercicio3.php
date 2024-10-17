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


// Función que lanza 4 dados para un jugador y devuelve los resultados en un array
function tiradaJugador()
{
    $resultados = [];
    for ($i = 0; $i < 4; $i++) {
        $valorDado = lanzarDado(); // Lanzar dado y obtener resultado
        $resultados[] = $valorDado; // Guardar resultado en el array
        mostrarDado($valorDado); // Mostrar imagen del dado
    }
    return $resultados;
}

// Variables para contar las victorias y empates
$jugador1Gana = 0;
$jugador2Gana = 0;
$empates = 0;

echo "<p><strong>Jugador 1</strong></p>";
$tirada1 = tiradaJugador();

echo "<p><strong>Jugador 2</strong></p>";
$tirada2 = tiradaJugador();

// Comparar los resultados de cada jugador
for ($i = 0; $i < 4; $i++) {
    if ($tirada1[$i] > $tirada2[$i]) {
        $jugador1Gana++;
    } elseif ($tirada1[$i] < $tirada2[$i]) {
        $jugador2Gana++;
    } else {
        $empates++;
    }
}

// Mostrar el resultado final
echo "<p>El jugador 1 ha ganado $jugador1Gana veces, el jugador 2 ha ganado $jugador2Gana veces y los jugadores han empatado $empates veces.</p>";

// Determinar el resultado general segun los enfrentamientos directos
if ($jugador1Gana == $jugador2Gana) {
    echo "<p><strong>Han empatado siempre.</strong></p>";
} else if ($jugador1Gana > $jugador2Gana) {
    echo "<p><strong>El jugador 1 es el ganador.</strong></p>";
} else {
    echo "<p><strong>El jugador 2 es el ganador.</strong></p>";
}
