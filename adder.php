<?php
class adder implements operatorinterface 
{
	public function run($number, $result)
	{
		return $result+$number;
	}
}
?>
	