<?php
namespace Block\Admin\Customer;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{
	protected $template = null;
	protected $customers = null;
	
	public function __construct()
	{
		$this->setTemplate('View/Admin/customer/grid.php');
	}

	public function setCustomers($customers=null)
	{
		if(!$customers){
			$customers = \Mage::getModel('Model\Customer');
			$query = "select c.customerId,cg.name as `customerGroup`,c.firstName,c.lastName,c.email,c.status,c.mobile,c.createdDate,c.updatedDate from customer c join customer_group cg on c.customerGroup=cg.groupId";
			$customers = $customers->fetchAll($query);
	}
		$this->customers = $customers;
		return $this;

	}

	public function getCustomers()
	{
		if(!$this->customers){
			$this->setCustomers();
		}

		return $this->customers;
	}

	
}
?>