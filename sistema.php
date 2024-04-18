<?php
// Lista con los nombres de las personas
$nombres = ["Emma", "Mathias", "Juan David", "Sofia", "Santiago", "Juan Diego", "Francisco", "Jacqueline", "Alvaro", "Ernesto", "Maria", "Jennifer", "Carlos", "Jenny", "Mirelis"];
// Lista con los turnos
$turnos = [")Emma =>", ")Mathias =>", ")Juan David =>", ")Sofia =>", ")Santiago =>", ")Juan Diego =>", ")Francisco =>", ")Carlos =>", ")Jennifer =>", ")Maria =>", ")Ernesto =>", ")Jenny =>", ")Alvaro =>", ")Jacqueline =>", ")Mirelis =>"];

// Conjunto vacío para guardar los nombres asignados
$asignados = array();

// Mezclar la lista de nombres al azar
shuffle($nombres);

system('clear');

echo "\033[92m" . "\nSISTEMA DE INTERCAMBIO" . "\nDE REGALOS" . "\033[0m" . "\n";
echo "\033[97m";

// Imprimir los pares de turno y nombre
for ($i = 0; $i < count($nombres); $i++) {
    // Verificar si el nombre asignado es el mismo que el turno o ya está en el conjunto de asignados
    while ($nombres[$i] == substr($turnos[$i], 1, -4) || in_array($nombres[$i], $asignados)) {
        // Si es así, volver a mezclar la lista de nombres
        shuffle($nombres);
    }
    // Agregar el nombre asignado al conjunto de asignados
    array_push($asignados, $nombres[$i]);
    // Imprimir el par de turno y nombre
    echo ($i + 1) . $turnos[$i] . $nombres[$i] . "\n";
    readline(); // Esperar a que el usuario presione Enter para continuar
}

?>

