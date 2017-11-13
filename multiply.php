<?php
class multiply implements operatorinterface 
{
	public function run($number, $result)
	{
		return $result*$number;
	}
}
?>