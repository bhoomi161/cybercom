<?php

namespace Model\Product;
\Mage::loadFileByClassName('Model\Core\Adapter');
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Controller\Core\Admin');

class Media extends \Model\Core\Table{
	
	public function __construct()
	{
		parent::__construct();
		$this->setPrimaryKey('imageId');
		$this->setTableName('product_media');

	}
	public function getIMagePath($subPath = null)
	{
		return \Mage :: getBaseDir('Image\Product\\');
	}
}