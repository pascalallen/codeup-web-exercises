<?php

require_once "Sensor.php";

class SmokeSensor extends Sensor
{
	public function getRandSmoke()
	{
		for($i=0; $i<=100; $i++){
			$this->state[] = $i;
		}

		return array_rand($this->state);
	}

	public function alarmStatus(){
		
	}
}