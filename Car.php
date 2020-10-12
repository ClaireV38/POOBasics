<?php

//car.php

class Car
{
	  /**
	  * @var integer
	  */
	private $nbWheels;

	  /**
	  * @var integer
	  */
	private $currentSpeed;

	/**
	  * @var string
	  */
	private $color;

	/**
	  * @var integer
	  */
	private $nbSeats;

	 /**
	  * @var string
	  */
	private $energy;

	/**
	  * @var integer
	  */
	private $energyLevel;

	public function __construct(string $color, integer $nbSeats, string $energy)
	{
	    $this->color = $color;
	    $this->nbSeats = $nbSeats;
	    $this->energy = $energy;
	}
}