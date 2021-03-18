<?php
namespace Model; 

\Mage::loadFileByClassName('Model\Core\Adapter');
\Mage::loadFileByClassName('Model\Core\Table');
\Mage::loadFileByClassName('Controller\Core\Admin');

class Attribute extends \Model\Core\Table{
	

	public function __construct()
	{
		parent::__construct();
		$this->setPrimaryKey('attributeId');
		$this->setTableName('attribute');

	}

	public function getInputTypeOptions()
	{
		return [
			'text' => "textbox",
			'checkbox'=>"checkbox",
			'select'=>"select",
			'radio'=>"radiobutton",
			'textarea'=>"textarea",
			'selectmultiple'=>"select Multiple",

		];
	}

	public function getBackendTypeOptions()
	{
		return[
			'text' => "text",
			'varchar(256)' => "varchar",
			'decimal(10,2)'=>'decimal',
			'int(11)'=>'Integer',

		];
	}

	public function getEntityTypeOptions()
	{
		return[
			'product'=>"product",
			'category'=>"category",
			'customer'=>"customer",
		];
	}

	public function getOptions()
    {
        if (!$this->attributeId) {
            return false;
        }
        $attributeOption = \Mage::getModel('Model\Attribute\Option');
        $key = $this->getPrimaryKey();
        $query = "SELECT * FROM `{$attributeOption->getTableName()}` WHERE {$key} = '{$this->$key}'";
        $options = $attributeOption->fetchAll($query);
        return $options;
    }
}