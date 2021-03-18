<?php
namespace Model\Customer;
\Mage::loadFileByClassName('Model\Core\Adapter');
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Controller\Core\Admin');

class Address extends \Model\Core\Table{
	
	const BILLING_ADDRESS = 1;
	const SHIPPING_ADDRESS = 0;

	public function __construct()
	{
		parent::__construct();
		$this->setPrimaryKey('addressId');
		$this->setTableName('customer_address');

	}

	public function getAddressOptions()
	{
		return [
			self :: BILLING_ADDRESS => "Billing",
			self :: SHIPPING_ADDRESS => "Shipping"
		];
	}
}
?>