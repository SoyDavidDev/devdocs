 <?php
class Vehiculo{
    private static $vehiculosCreados;
    private static $kmsTotales;
    private $kmsRecorridos;
	private $marca;

    public function  __construct($marca){
		self::$vehiculosCreados++;
		$this->marca = $marca;
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
	public static function getKmsTotales() {
		return self::$kmsTotales;
	}

	/**
	 * @return mixed
	 */
	public function getKmsRecorridos() {
		return $this->kmsRecorridos;
	}

	public function andar($km)
	{
		$this->kmsRecorridos += $km;
		self::$kmsTotales += $km;
	}

	public function mostrarDatos() {
		echo "El kilometraje de " . $this->getMarca() . " es: " . 
		$this->getKmsRecorridos() . " km.";
		echo "<br>";
		echo "<br>";
	}

	public static function mostrarTotales ()
	{	
		echo "El kilometraje total de todos los vehículos es: " . 
		self::getKmsTotales() . " km.";
		echo "<br>";
		echo "<br>";
		echo "Total vehículos creados: " . self::getVehiculosCreados();
	}
	

	/**
	 * @return mixed
	 */
	public function getMarca() {
		return $this->marca;
	}
	
	/**
	 * @param mixed $marca 
	 * @return self
	 */
	public function setMarca($marca): self {
		$this->marca = $marca;
		return $this;
	}

	/**
	 * @param mixed $vehiculosCreados 
	 */
	public static function setVehiculosCreados($vehiculosCreados) {
		self::$vehiculosCreados = $vehiculosCreados;
		return;
	}
	
	/**
	 * @param mixed $kmsTotales 
	 */
	public static function setKmsTotales($kmsTotales) {
		self::$kmsTotales = $kmsTotales;
		return;
	}
}
 ?>