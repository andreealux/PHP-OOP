<?php

require_once 'Robot.php';
require_once 'Drone.php';

class FlyingRobot{
    use DroneTrait, RobotTrait{
        DroneTrait::setMaxSpeed insteadof RobotTrait;
        DroneTrait::getMaxSpeed insteadof RobotTrait;
        DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
        DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
        DroneTrait::setMaxSpeed as setRunningMaxSpeed;
        DroneTrait::getMaxSpeed as getRunningMaxSpeed;
    }


    public function __construct($maxRunningSpeed, $maxWalkingTime, $maxFlyingSpeed, $maxFlyingTime){
        $this->maxWalkingTime = $maxWalkingTime;
        $this->maxFlyingTime = $maxFlyingTime;
        $this->setFlyingMaxSpeed($maxFlyingSpeed);
        $this->setRunningMaxSpeed($maxRunningSpeed);
    }

}

$flyimgRobot = new FlyingRobot(40,120,60,30);
echo $flyimgRobot->getMaxSpeed() . '<br>';
echo $flyimgRobot->getRunningMaxSpeed();