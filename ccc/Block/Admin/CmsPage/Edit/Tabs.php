<?php 
namespace Block\Admin\CmsPage\Edit;
\Mage::getController('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs{

    public function __construct()
    {
        parent::__construct();
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('CmsPage',['label'=>'CMS Page','block'=>'Block\Admin\CmsPage\Edit\Tabs\CmsPage']);

        $this->setDefaultTab('CmsPage');
        return $this;
    }
}

?>