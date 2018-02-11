<?php
/**
 * 
 * This file is built on jenkins
 * 
 */
class RoboFile extends \Robo\Tasks
{
	public function build() {
		$this->setup();
		var_dump(phpinfo());	
	}
	private function setup() {
		if(getenv('SETUP')==='true'){
			var_dump("*******************************************");
			var_dump("Starting build ...");
			var_dump("*******************************************");
		}
		else {	
			var_dump("There was an error - from setup()");
		}	
	}
}
