<?php 
namespace Block\Admin\Shipment\Edit;
\Mage::getController('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs{

    public function __construct()
    {
        parent::__construct();
        $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('shipment',['label'=>'Shipment Form','block'=>'Block\Admin\Shipment\Edit\Tabs\Shipment']);

        $this->setDefaultTab('shipment');
        return $this;
    }

  
}

?>