<?php
  $capacidadeTotal = 40 * 6;
  $lugaresOcupados = 0;
  $mesasReservadas = 0;
  $reservas = ''; 

  echo "Sistema de Reservas de Mesas\n";

  function mesaEstaOcupada($mesa, $reservas): bool {
    $listaReservas = explode(';', $reservas);
    foreach ($listaReservas as $reserva) {
      if ($reserva != '') {
        $dadosReserva = explode(',', $reserva);
        if ($dadosReserva[0] == $mesa) {
          return true;
        }
      }
    }
    return false;
  }

  function adicionarReserva($mesa, $lugares, &$reservas) {
    $reservaString = $mesa . ',' . $lugares . ';';
    $reservas .= $reservaString;
  }

  function getLugaresOcupadosNaMesa($mesa, $reservas): int {
    $listaReservas = explode(';', $reservas);
    foreach ($listaReservas as $reserva) {
      if ($reserva != '') {
        $dadosReserva = explode(',', $reserva);
        if ($dadosReserva[0] == $mesa) {
          return (int) $dadosReserva[1];
        }
      }
    }
    return 0;
  }

  while ($lugaresOcupados < $capacidadeTotal) {
    $mesaDesejada = rand(0, 40); 
    $lugaresDesejados = rand(1, 6);

    echo "\nMesa desejada: " . $mesaDesejada . "\n";
    echo "Lugares desejados: " . $lugaresDesejados . "\n";

    if ($mesaDesejada == 0) {
      echo "Saindo do sistema.\n";
      break;
    }

    if ($mesaDesejada < 1 || $mesaDesejada > 40) {
      echo "Mesa inválida. Escolha uma mesa entre 1 e 40.\n";
      continue; 
    }

    if (mesaEstaOcupada($mesaDesejada, $reservas)) {
      echo "Mesa " . $mesaDesejada . " já está reservada.\n";
      continue;
    }

    $lugaresDisponiveisNaMesa = 6;

    if ($lugaresDesejados > $lugaresDisponiveisNaMesa) {
      echo "Não há lugares suficientes na mesa " . $mesaDesejada .
        ". Lugares disponíveis: " . $lugaresDisponiveisNaMesa . "\n";
      continue; 
    }

    adicionarReserva($mesaDesejada, $lugaresDesejados, $reservas);
    $lugaresOcupados += $lugaresDesejados;
    $mesasReservadas++;

    echo "Reserva realizada com sucesso na mesa " . $mesaDesejada .
      " para " . $lugaresDesejados . " lugares.\n";
    echo "Total de lugares ocupados: " . $lugaresOcupados . "\n";

    if ($lugaresOcupados >= $capacidadeTotal) {
      echo "A casa está lotada. Não é possível fazer mais reservas.\n";
      break;
    }
  }

  echo "Fim do programa.\n";
?>
