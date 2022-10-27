<?php

trait RobotTrait{
    private $maxRunningSpeed = 0;
    private $maxWalkingTime;

    public function __construct(int $maxRunningSpeed, $maxWalkingTime)
    {
        $this->maxRunningSpeed = $maxRunningSpeed;
        $this->maxWalkingTime = $maxWalkingTime;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxRunningSpeed;
    }

    public function setMaxSpeed(int $maxRunningSpeed): void
    {
        $this->maxRunningSpeed = $maxRunningSpeed;
    }

    public function getMaxWalkingTime()
    {
        return $this->maxWalkingTime;
    }

    public function setMaxWalkingTime($maxWalkingTime): void
    {
        $this->maxWalkingTime = $maxWalkingTime;
    }
}


class Robot
{
    use RobotTrait;
}