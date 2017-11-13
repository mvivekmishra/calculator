<?php
class divide implements operatorinterface 
{
	public function run($number, $result)
	{
		return $result/$number;
	}
}
?>