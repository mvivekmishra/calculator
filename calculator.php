<?php
class calculator
{
	protected $operation;
	protected $result;
	
	public function setOperation(operatorinterface $operation )
	{
		$this->operation=$operation;
	}
	
	public function calculate()
	{
		foreach(func_get_args() as $number)
		{
			$this->result=$this->operation->run($number, $this->result);
		}
	}
	public function getResult()
	{
		return $this->result;
	}
}
?>