<?php
namespace Block\Admin\Category;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{
	protected $template = null;
	protected $categories = null;
	protected $categoriesOptions =[];

	public function __construct(){
		$this->setTemplate('View/Admin/category/grid.php');
	}
	public function setCategories($categories=null)
	{
		if(!$categories){
			$categories = \Mage::getModel('Model\Category');
			$categories = $categories->fetchAll();
		}
		$this->categories = $categories;
		return $this;
	}

	public function getCategories()
	{
		if(!$this->categories){
			$this->setCategories();
		}
		return $this->categories;
	}
	
public function getName($category)
{
	$categoryModel = \Mage::getModel('Model\Category');
	if(!$this->categoriesOptions){
		$query = "SELECT `categoryId`,`categoryName` from `{$categoryModel->getTableName()}`";
		$this->categoriesOptions = $categoryModel->getAdapter()->fetchPairs($query);
	}
	$pathIds = explode('=', $category->pathId);
	
	foreach ($pathIds as $key => &$id) {
		if (array_key_exists($id, $this->categoriesOptions)) {
			$id = $this->categoriesOptions[$id];
		}
	}
	return implode('=>', $pathIds);
}


	
}
?>