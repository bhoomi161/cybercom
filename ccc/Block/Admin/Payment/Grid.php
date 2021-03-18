<?php
namespace Block\Admin\Payment;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{
	protected $template = null;
	protected $payments = null;

	public function __construct()
	{
		$this->setTemplate('View/Admin/payment/grid.php');
	}

	public function setPayments($payments=null){
		if(!$payments){
			$payments = \Mage::getModel('Model\Payment');
			$payments = $payments->fetchAll();

		}
		$this->payments = $payments;
		return $this;
	}

	public function getPayments(){
		if(!$this->payments){
			$this->setPayments();
		}
		return $this->payments;
	}

	
}
?>