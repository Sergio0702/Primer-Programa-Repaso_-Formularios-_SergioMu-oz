<?php

// Función que lanza el dado y devuelve el resultado
function lanzarDado()
{
    return rand(1, 6); // Generar número aleatorio entre 1 y 6 y devolverlo
}

//Recogemos en una variable el resultado del dado
$resultado = lanzarDado();


//Creamos una función en la que le pasamos como parámetro el resultado de la tirada
//que hemos almacenado en una variable la cuál llama a la función que nos devuelve el numero 
//que ha salido en la tirada
function mostrarDado($resultado)
{
    echo "<img src='img/dado{$resultado}.svg' alt='Dado {$resultado}' style='width:50px;height:50px;'>";
}


//recogemos la tirada del jugador 1 en una variable,ya que después la tendremos que
//comprobar con la del jugador 2
$tiradaJugador_1 = lanzarDado();

$tiradaJugador_2 = lanzarDado();

//Mostramos lo que ha sacado el jugador 1 en la tirada pasándole lo que ha sacado
//en su tirada para que nos pinte el dado
echo "<p><strong>Jugador 1:</strong></p>";
mostrarDado($tiradaJugador_1);

//Lo mismo pero con el jugador 2
echo "<p><strong>Jugador 2:</strong></p>";
mostrarDado($tiradaJugador_2);

//Hacemos las comparaciones y mostramos quien ha ganado o si ha habido empate

if($tiradaJugador_1 == $tiradaJugador_2){
    echo "<p>Empate entre ambos jugadores</p>";
}else if($tiradaJugador_1 > $tiradaJugador_2){
    echo "<p>Ha ganado el jugador 1</p>";
}else{
    echo "<p>Ha ganado el jugador 2</p>";
}



