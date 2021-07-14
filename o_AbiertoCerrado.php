<?php 

interface Forma {
	public function area();
}

class Triangulo implements Forma {
	private $longitud;
	private $altura;

	public function __construct($longitud, $altura) {
		$this->longitud = $longitud;
		$this->altura = $altura;
	}

	public function area() {
		return $this->ancho * $hits->altura / 2;
	}
}

class Cuadrado implements Forma {
	private $longitud;

	public function __construct($longitud) {
		$this->longitud = $longitud;
	}
}

class CalculoArea {
	protected $formas;

	public function __construct($formas = []) {
		$this->formas = $formas;
	}

	public function sum() {
		return array_reduce(
          $this-formas,
          function($total, Forma $forma) {
          	return $total + $forma->area();
          },
          0
		);
	}
}
?>