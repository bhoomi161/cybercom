<?php 
namespace Block\Admin\Category\Edit;
\Mage::getController('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs{

    
    public function __construct()
    {
        parent::__construct();
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('category',['label'=>'Category Form','block'=>'Block\Admin\Category\Edit\Tabs\Category']);
        $this->addTab('attribute',['label'=>'Attribute','block'=>'Block\Admin\Category\Edit\Tabs\Attribute']);

        $this->setDefaultTab('category');
        return $this;
   }

  
}

?>