<?php

//car.php

class Car
{
	  /**
	  * @var integer
	  */
	private $nbWheels;
	  /**
      * @return integer
      */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    /**
     * @param integer
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

	  /**
	  * @var integer
	  */
	private $currentSpeed = 0;
      /**
      * @return integer
      */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

	  /**
	  * @var string
	  */
	private $color;
	  /**
      * @return string
      */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

	  /**
	  * @var integer
	  */
	private $nbSeats;
	  /**
      * @return integer
      */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

	  /**
	  * @var string
	  */
	private $energy;
	  /**
      * @return string
      */
    public function getEnergy(): string
    {
        return $this->energy;
    }

	  /**
	  * @var integer
	  */
	private $energyLevel;
	  /**
      * @return integer
      */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    /**
     * @param integer
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        if ($energyLevel >= 0) {
            $this->energyLevel = $energyLevel;
        }
    }

	  /**
	  * @var bool
	  */
	private $engineIsOn = false;

	public function __construct(string $color, int $nbSeats, string $energy)
	{
	    $this->color = $color;
	    $this->nbSeats = $nbSeats;
	    $this->energy = $energy;
	}

	public function start(): string
    {
        $sentence = "";
	    if ($this->energyLevel > 0) {
	       	$this->energyLevel--;
	       	$this->engineIsOn = true;
	        $sentence .= "Wroum!";
    	} else {
    		$sentence .= "no more energy !";
    	}
    	return $sentence;
    }

    public function forward(): string
    {
        $sentence = "";
	    if ($this->energyLevel > 0 && $this->engineIsOn === true) {
	       	$this->energyLevel--;
	       	$this->currentSpeed = 50;
	        $sentence .= "Go!";
    	} else {
    		$sentence .= "stop !";
    		$this->currentSpeed = 0;
    		}
    	return $sentence;
    }

    public function brake(): string
	{
	   $sentence = "";
	   while ($this->currentSpeed > 0) {
	       	$this->currentSpeed -= 10;
	        $sentence .= "Brake !!!";
    	}
    	$sentence .= "I'm stopped !";
    	return $sentence;
	}
}