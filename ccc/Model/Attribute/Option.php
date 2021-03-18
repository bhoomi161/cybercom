<?php
namespace Model\Attribute;
\Mage::loadFileByClassName('Model\Core\Adapter');
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Controller\Core\Admin');


class Option extends \Model\Core\Table{
	
	const STATUS_ENABLED = 1;
	const STATUS_DISABLED = 0;

	public function __construct()
	{
		parent::__construct();
		$this->setPrimaryKey('optionId');
		$this->setTableName('attribute_option');

	}
}