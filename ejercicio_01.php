<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tarea PHP
    Agustin
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<h1>Cartas crecientes</h1>

	<p>Cada jugador saca 5 cartas. Se compara cada una con la anterior. Si es mayor, se suma su valor. Si es menor, se resta. Si es igual, se descarta. El valor de la primera carta se suma siempre.</p>

	<!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <?php

  $j1 = [rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10)];
  $j2 = [rand(1,10), rand(1,10), rand(1,10), rand(1,10), rand(1,10)];
  $val1;
  $val2;

  function GenerarCartas1($array){
    for ($i = 0; $i < 5; $i++){
      switch ($array[$i]) {
        case 1:
          print '<img src="./cartas/c1.svg" width="150" height="150">';
          break;
  
        case 2:
          print '<img src="./cartas/c2.svg" width="150" height="150">';
          break;
  
        case 3:
          print '<img src="./cartas/c3.svg" width="150" height="150">';
          break;
  
        case 4:
          print '<img src="./cartas/c4.svg" width="150" height="150">';
          break;
  
        case 5:
          print '<img src="./cartas/c5.svg" width="150" height="150">';
          break;
  
        case 6:
          print '<img src="./cartas/c6.svg" width="150" height="150">';
          break;
  
        case 7:
          print '<img src="./cartas/c7.svg" width="150" height="150">';
          break;
  
        case 8:
          print '<img src="./cartas/c8.svg" width="150" height="150">';
          break;
  
        case 9:
          print '<img src="./cartas/c9.svg" width="150" height="150">';
          break;
  
        case 10:
          print '<img src="./cartas/c10.svg" width="150" height="150">';
          break;
  
      }
    }
  }
  
  function GenerarCartas2($array){
    for ($i = 0; $i < 5; $i++){
      switch ($array[$i]) {
        case 1:
          print '<img src="./cartas/p1.svg" width="150" height="150">';
          break;
  
        case 2:
          print '<img src="./cartas/p2.svg" width="150" height="150">';
          break;
  
        case 3:
          print '<img src="./cartas/p3.svg" width="150" height="150">';
          break;
  
        case 4:
          print '<img src="./cartas/p4.svg" width="150" height="150">';
          break;
  
        case 5:
          print '<img src="./cartas/p5.svg" width="150" height="150">';
          break;
  
        case 6:
          print '<img src="./cartas/p6.svg" width="150" height="150">';
          break;
  
        case 7:
          print '<img src="./cartas/p7.svg" width="150" height="150">';
          break;
  
        case 8:
          print '<img src="./cartas/p8.svg" width="150" height="150">';
          break;
  
        case 9:
          print '<img src="./cartas/p9.svg" width="150" height="150">';
          break;
  
        case 10:
          print '<img src="./cartas/p10.svg" width="150" height="150">';
          break;
  
      }
    }
  }
  

  function calcularPuntuaciónJugador (&$val, $array){
    $val = $array[0];
    for ($i = 1; $i < 5; $i++) {
      if ($val < $array[$i]) {
          $val += $array[$i];
      } elseif ($val > $array[$i]) {
          $val -= $array[$i];
      }
    }
    return $val;
  }

    print "<h2>Cartas del jugador 1</h2>";
    print GenerarCartas1($j1);
    print '<br>';
    print "<h2>Cartas del jugador 2</h2>";
    print GenerarCartas2($j2);
    print '<p>El Jugador1 ha conseguido ' .calcularPuntuaciónJugador($val1, $j1) .' puntos. El Jugador2 ha conseguido  ' .calcularPuntuaciónJugador($val2, $j2) .' puntos. El resultado del juego es: ';
    
    if ($val1 > $val2){
      echo 'Jugador1 ha ganado';
    }
    
    if ($val1 < $val2){
      echo 'Jugador12 ha ganado';
    }
    
    if ($val1 == $val2){
      echo 'Han quedado empate';
    }
  
  ?>

  

  <footer>
    <p>Agustin</p>
  </footer>

</body>
</html>