<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;
    
    public function __construct(string $color)
    {
        $this->color = $color;
    }
    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }

    public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color): void
{
    $this->color = $color;
}
public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
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

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }
}