<?php
namespace Block\Admin\Attribute\Edit\Tabs;

\Mage::loadFileByClassName('Block\Core\Template');

class Option extends \Block\Core\Template{
    protected $option = null;

public function __construct ()
{
    parent :: __construct();
    $this->setTemplate('View/Admin/attribute/edit/tabs/option.php');
}

public function setOption($option = null)
{
	if($option){
		$this->option = $option;
		return $this;
	}
	$id = $this->getRequest()->getGet('updateId');
	$option = \Mage::getModel('Model\Attribute\Option');
	$query = "SELECT * FROM `{$option->getTableName()}` WHERE `attributeId` = $id";
	$option = $option->fetchAll($query);
	$this->option = $option;
	return $this;
}

public function getOption()
{
	if(!$this->option){
		$this->setOption();
	}
	return $this->option;
}
   
public function getFormUrl()
{
    return $this->getUrl()->getUrl('save');
}

public function getTitle()
{
	 return 'Option Add/Edit';
}

}
?>