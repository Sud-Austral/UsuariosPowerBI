<?php
$fichero = 'data_.csv';

// si el fichero lo abrimos para leer correctamente
if (($manejador = fopen ( $fichero, "r" )) !== FALSE) {
 
 echo "Leyendo el fichero: <br>n";
 
 // leemos hasta que se acaba fila a fila
 while ( ($arrayFila = fgetcsv ( $manejador, 1000, "," )) !== FALSE ) {

  // escribimos cada fila por pantalla
  for($i = 0; $i < count ( $arrayFila ); $i ++) {
   echo $arrayFila [$i] . " - ";
  }
  echo "<br>n";
 }
 fclose ( $manejador );
}

if (($manejador = fopen ( $fichero, "w" )) !== FALSE) {
 
 echo "Escribiendo en el fichero: <br>n";
 
 // escribimos 3 filas
 for($i = 0; $i < 3; $i ++) {
  $arrayFila = null;
  // de 10 elementos cada fila
  for($j = 0; $j < 10; $j ++) {
   // llenamos con números aleatorios
   $arrayFila [$j] = rand ( 1, 100 );
  }
  echo var_dump($arrayFila) . "<br>n"; 
  fputcsv ( $manejador, $arrayFila, "," );
 }
 
 fclose ( $manejador );
}

?>