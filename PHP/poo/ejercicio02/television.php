<?php

class Television 

{
    private $marca;
    private $canal;
    private $volumen;

    public function __construct($marca)
    {
        $this->marca = $marca;
        $this->reiniciarTV();
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
	 * @return mixed
	 */
	public function getCanal() {
		return $this->canal;
	}
	
	/**
	 * @param mixed $canal 
	 * @return self
	 */
	public function setCanal($canal): self {
		$this->canal = $canal;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getVolumen() {
		return $this->volumen;
	}
	
	/**
	 * @param mixed $volumen 
	 * @return self
	 */
	public function setVolumen($volumen): self {
		$this->volumen = $volumen;
		return $this;
	}

    public function subirVolumen($vol)
    {
        if ($this->volumen == 100) {
            $this->volumen = 100;
        } else {
            $this->volumen += $vol;
        }

/*         $this->volumen = min(100, $this->volumen + 1);
 */
    }

    public function bajarVolumen($vol)
    {
        if ($this->volumen == 0) {
            $this->volumen= 0;
        } else {
            return $this->volumen -= $vol;
        }

/*         $this->volumen = max(0, $this->volumen - 1);
 */
    }

    public function configurarCanal($numCanal)
    {
        if ($numCanal<= 50 and $numCanal>=1) {
            $this->canal = $numCanal;
        } 
    }

    public function reiniciarTV()
    {
        $this->canal = 1;
        $this->volumen = 50;
    }
    
    public function mostrarTV()
    {
        echo $this->marca . " en el canal " . $this->canal. " volumen ". 
        $this->volumen;
    }
}

$tele = new Television("Samsung");
$tele->bajarVolumen(40);
$tele->configurarCanal(45);
echo $tele->mostrarTV();

?>