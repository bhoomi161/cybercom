<?php
namespace Block\Admin\CmsPage;
\Mage::loadFileByClassName('Block\Core\Template');

class Grid extends \Block\Core\Template{
	protected $template = null;
	protected $cmsPages = null;

	public function __construct()
	{
		$this->setTemplate('View/Admin/cmspage/grid.php');
	}

	public function setCmsPages($cmsPages=null)
	{
		if(!$cmsPages){
			$cmsPages = \Mage::getModel('Model\CmsPage');
			$cmsPages = $cmsPages->fetchAll();
		}
		$this->cmsPages = $cmsPages;
		return $this;

	}

	public function getCmsPages()
	{
		if(!$this->cmsPages){
			$this->setCmsPages();
		}
		return $this->cmsPages;
	}

	
}
?>