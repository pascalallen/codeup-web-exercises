<?php

require_once "Sensor.php";

class GlassSensor extends Sensor
{
	public function getRandGlassBreak()
	{
		for($i=0; $i<10000; ++$i){
			$this->state[] = $i;
		}

		return array_rand($this->state);
	}

	public function alarmStatus(){
		
	}
}