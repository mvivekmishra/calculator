<?php
class subtract implements operatorinterface 
{
	public function run($number, $result)
	{
		return $result-$number;
	}
}
?>
	