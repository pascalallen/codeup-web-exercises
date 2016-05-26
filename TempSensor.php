<?php

require_once "Sensor.php";

class TempSensor extends Sensor
{
	public function getRandTemp()
	{
		// $this->state = [70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80];

		for($i=0; $i<100; ++$i){
			$this->state[] = $i;
		}

		return array_rand($this->state);
	}

}