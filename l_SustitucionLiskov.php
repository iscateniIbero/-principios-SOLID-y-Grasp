<?php 
interface Vehiculo {
	public function conseguirVelocidad(): int;
	public function mover(int $segundos): int;
}

class Carro implements Vehiculo {
	const private VELOCIDAD = 50;

	public function mover(int $segundos): int {
		return self::VELOCIDAD * segundos;
	}

	protected function conseguirVelocidad () int {
		return self::VELOCIDAD;
	}
}

class Bicicleta implements Vehiculo {
	const private VELOCIDAD = 15;

	public function mover(int $segundos): int {
		return self:: VELOCIDAD * segundos;
	}

	protected function conseguirVelocidad(): int {
		return self::VELOCIDAD;
	}
}

function conseguirVelocidad(Usuario $usuario) {
	if ($usuario->moverseRapido()) {
		return new Carro();
	} else {
		return new Bicicleta();
	}
}

function movimientoUsuario(Usuario $usuario, int $segundos): int {
	$vehiculo = conseguirVelocidad($usuario);
	// Aqui no importaria el vehiculo elegido
	return $vehiculo->mover($segundos);
}
?>