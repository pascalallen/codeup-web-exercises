<?php

require_once "Sensor.php";

class DoorSensor extends Sensor
{
	public function getRandOpenClose()
	{
		$this->state = ["Open", "Close"];

		$arr = array_rand($this->state);
		return $this->state[$arr];
	}

	public function alarmStatus()
	{
		
	}
}