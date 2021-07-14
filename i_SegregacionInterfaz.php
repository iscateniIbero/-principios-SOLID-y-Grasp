<?php 

interface Bebida {
	// Aqui algun código 
}

interface MaquinaDeBebidas {
	public function prepararBebida(): Bebida;
}

class MaquinaDeCafe implements MaquinaDeBebidas {

	public function prepararBebida(): Bebida {
		// El código para preparar cafe
	}
}

class MaquinaDeTe implements MaquinaDeBebidas {
	public function prepararBebida(): Bebida {
		// El códifo para preparar te 
	}
}
?>