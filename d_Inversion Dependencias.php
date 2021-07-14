<?php 
interface ConexionBD {
	public function conectar();
}

class ConexionMySQl implements ConexionBD {
	public function conectar() {
		// Regresa la conexión...
	}
}

class UnaClase {
	private $dbConexion;

	public function __construct(ConexionBD $dbConexion) {
		$this->$dbConexion = $dbConexion;
	}

	// más codigo que incluyamos...
}
?>