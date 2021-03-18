<?php
namespace Block\Admin\Product;
\Mage::loadFileByClassName('Block\Core\Edit');

class Edit extends \Block\Core\Edit{
	protected $product = null;

	public function __construct()
	{
		parent :: __construct();
		$this->setTabClass(\Mage::getBlock('Block\Admin\Product\Edit\Tabs'));
	}

	
}
?>