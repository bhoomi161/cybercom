<?php
namespace Block\Admin\CustomerGroup;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{
	protected $template = null;
	protected $customerGroups = null;
	
	public function __construct()
	{
		$this->setTemplate('View/Admin/customerGroup/grid.php');
	}

	public function setCustomerGroups($customerGroups =null)
	{
		if(!$customerGroups ){
			$customerGroups = \Mage::getModel('Model\CustomerGroup');
			$customerGroups  = $customerGroups ->fetchAll();

		}
		$this->customerGroups  = $customerGroups ;
		return $this;

	}

	public function getCustomerGroups()
	{
		if(!$this->customerGroups ){
			$this->setCustomerGroups();
		}
		return $this->customerGroups ;
	}

	
}
?>