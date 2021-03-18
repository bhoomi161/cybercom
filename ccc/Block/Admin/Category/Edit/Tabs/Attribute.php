<?php
namespace Block\Admin\Category\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class Attribute extends \Block\Core\Template{
    protected $attribute = null;
    protected $options = null;
    public function __construct ()
    {
        parent :: __construct();
        $this->setTemplate('View/Admin/category/edit/tabs/attributeform.php');
    }

	public function getAttributes()
	{
		$attribute = \Mage::getModel('Model\Attribute');
		$query = "SELECT * FROM `{$attribute->getTableName()}` where entityTypeId='category'";
		
		$attribute = $attribute->fetchAll($query);
		return $attribute;
	}

	public function setAttribute($attribute = null)
	{
		if ($attribute) {
			$this->attribute = $attribute;
			return $this;
		}
		$attribute = \Mage::getModel('Model\Attribute');
		$id = $this->getTableRow()->categoryId;
		$query = "SELECT * FROM `category` WHERE categoryId = '$id' ";
		$attribute1 = $attribute->fetchRow($query);
		$this->attribute = $attribute1;
		return $this;
	}
	public function getAttribute()
	{
		if (!$this->attribute) {
			$this->setAttribute();
		}
		return $this->attribute;
	}

	
	public function getFormUrl()
	{
		return $this->getUrl()->getUrl('save');
	}

	public function getTitle()
	{
		return 'Attribute Add/Edit';
	}


}