<?php
namespace Block\Admin\Admin;

\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{
	protected $template = null;
	protected $admins = null;

	public function __construct()
	{
		$this->setTemplate('View/Admin/admin/grid.php');
	}

	public function setAdmins($admins=null)
	{
		if(!$admins){
			$admins = \Mage::getModel('Model\Admin');
			$admins = $admins->fetchAll();

		}
		$this->admins = $admins;
		return $this;

	}

	public function getAdmins()
	{
		if(!$this->admins){
			$this->setAdmins();
		}
		return $this->admins;
	}

	
}
?>