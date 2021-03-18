<?php

namespace Block\Core;

\Mage::loadFileByClassName('Block\Core\Template');
\Mage::loadFileByClassName('Block\Core\Layout\Content');
\Mage::loadFileByClassName('Block\Core\Layout\Header');
\Mage::loadFileByClassName('Block\Core\Layout\Footer');
\Mage::loadFileByClassName('Block\Core\Layout\Left');


class Layout extends \Block\Core\Template
{
	public function __construct(\Controller\Core\Admin $controller=null)
	{
		$this->setTemplate('View/core/layout/oneColumn.php');
		$this->prepareChildren();
	}

	public function prepareChildren(){
		$this->addChild(new \Block\Core\Layout\Header(),'header');
		$this->addChild(new \Block\Core\Layout\Left(),'left');
	 	$this->addChild(new \Block\Core\Layout\Content(),'content');
		$this->addChild(new \Block\Core\Layout\Footer(),'footer');

	 }
	public function getContent()
    {
        return $this->getChild('content');
    }
    public function getHeader()
    {
        return $this->getChild('header');
    }
    public function getLeft()
    {
        return $this->getChild('left');
    }

}

?>