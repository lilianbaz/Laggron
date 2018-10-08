<?php
class Route {
	private $_destination;
	private $_gateway;
	private $_interface;
	private $_direct;

	public function getDestination()	{
		return $this->_destination;
	}
	public function getGateway()	{
		return $this->_gateway;
	}
	public function getInterface()	{
		return $this->_interface;
	}
	public function getDirect()	{
		return $this->_direct;
	}

	public function setDestination($_destination)	{
		$this->_destination = $_destination;
	}
	public function setGateway($_gateway)	{
		$this->_gateway = $_gateway;
	}
	public function setInterface($_interface)	{
		$this->_interface = $_interface;
	}
	public function setDirect($_direct)	{
		if($_direct)	{
			$this->_direct = true;
		}
		else {
			$this->_direct = false;
		}
	}

	public function __construct($_destination = "",$_gateway = "",$_interface = "",$_direct = false)	{
		$this->setDestination($_destination);
		$this->setGateway($_gateway);
		$this->setInterface($_interface);
		$this->setDirect($_direct);
	}
}
 ?>
