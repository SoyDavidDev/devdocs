<!-- 
Ejercicio
• Crea la clase Vehículo, así como las clases Bicicleta y 
Coche como subclases de la
primera.
}
     
• Para la clase Vehículo, crea los métodos de clase getVehiculosCreados() y 
getKmTotales(); así como el método getKmRecorridos().
• Crea también algún método específico para cada una delas subclases. 
Prueba las clases creadas mediante una aplicación que realice, al menos, 
las siguientes acciones:
• Anda con la bicicleta
• Haz el caballito con la bicicleta • Anda con el coche
• Quema rueda con el coche
• Ver kilometraje de la bicicleta • Ver kilometraje del coche
• Ver kilometraje total
• Total de vehiculos creados.
 -->
 <?php
 include_once 'bicicleta.php';
 include_once 'coche.php';

class Vehiculo{
    private static $vehiculosCreados= 0;
    private static $kmTotales;
    private $kmRecorridos;

    public function __construct(){
        self::$vehiculosCreados++;
    }

	/**
	 * @return mixed
	 */
	public static function getVehiculosCreados() {
		return self::$vehiculosCreados;
	}
	
	/**
	 * @return mixed
	 */
	public static function getKmTotales() {
		return self::$kmTotales;
	}

	/**
	 * @return mixed
	 */
	public function getKmRecorridos() {
		return $this->kmRecorridos;
	}

	public function andar($km)
	{
		$this->kmRecorridos += $km;
		self::$kmTotales += $km;
	}

	public function mostrarDatos(string $nombreClase) {
		echo "El kilometraje de " . $nombreClase . " es: " . 
		$this->getKmRecorridos() . " km.";
		echo "<br>";
		echo "<br>";
	}

	public static function mostrarTotales ()
	{
		echo "El kilometraje total de todos los vehículos es: " . 
		Vehiculo::getKmTotales() . " km.";
		echo "<br>";
		echo "<br>";
		echo "Total vehículos creados: " . Vehiculo::getVehiculosCreados();
	}
	
}

$coche = new Coche();
$coche->andar(500);
$coche->quemaRueda();
$coche->mostrarDatos("coche");

$bicicleta = new Bicicleta();
$bicicleta->andar(30);
$bicicleta->hacerCaballito();
$bicicleta->mostrarDatos("bicicleta");

Vehiculo::mostrarTotales();

 ?>