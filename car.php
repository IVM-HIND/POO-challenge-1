<?php

class Car
{
    private int $nbWheels = 4 ;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


public function __construct(string $color, int $nbSeats, string $energy){
    $this->color=$color;
    $this->nbSeats=$nbSeats;
    $this->energy=$energy;
}

    public function forward(int $speed)
    {
        $this->currentSpeed = $speed;
        return 'la voiture '.$this->color.' avance à '.$this->currentSpeed.' km/h';
    }
    public function start(){
        if ($this->energyLevel > 10){
            return 'la voiture '.$this->color.' demarre !!!';
        }else{
            return "Vous n'avez plus de carburant, allez faire le plein !!!";
        }
    }
    public function brake(){
        if($this->currentSpeed > 100){
            return 'la voiture '.$this->color.' a une vitesse de '.$this->currentSpeed.' km/h !!! '.'<br>'.'elle roule trop vite, il faut freiner !!!';
        }else{
            return 'la voiture '.$this->color.' a une vitese de '.$this->currentSpeed.'km/h !!!'.'<br>'.' elle roule à bonne allure !!!';
        }
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }
}
