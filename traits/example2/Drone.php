<?php

trait DroneTrait{
    private $maxFlyingSpeed = 0;
    private $maxFlyingTime;

    public function __construct(int $maxFlyingSpeed, $maxFlyingTime)
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
        $this->maxFlyingTime = $maxFlyingTime;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxFlyingSpeed;
    }


    public function setMaxSpeed(int $maxFlyingSpeed): void
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
    }

    public function getMaxFlyingTime()
    {
        return $this->maxFlyingTime;
    }

    public function setMaxFlyingTime($maxFlyingTime): void
    {
        $this->maxFlyingTime = $maxFlyingTime;
    }
}


class Drone
{
    use DroneTrait;

    public $cameraResolution;

    public function __construct($cameraResolution, int $maxFlyingSpeed, $maxFlyingTime)
    {
        $this->cameraResolution = $cameraResolution;
        $this->maxFlyingSpeed = $maxFlyingSpeed;
        $this->maxFlyingTime = $maxFlyingTime;
    }

    public function getCameraResolution()
    {
        return $this->cameraResolution;
    }

    public function setCameraResolution($cameraResolution): void
    {
        $this->cameraResolution = $cameraResolution;
    }

}