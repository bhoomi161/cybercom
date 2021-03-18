<?php 

namespace Block\Admin\Admin\Edit;

\Mage::getController('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs{
    public function __construct()
    {
        parent::__construct();
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('admin',['label'=>'Admin Form','block'=>'Block\Admin\Admin\Edit\Tabs\Admin']);
        $this->setDefaultTab('admin');
        return $this;
   }


}

?>