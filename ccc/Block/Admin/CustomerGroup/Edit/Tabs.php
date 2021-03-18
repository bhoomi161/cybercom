<?php 
namespace Block\Admin\CustomerGroup\Edit;

\Mage::getController('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs{

    protected $tabs = [];
    protected $defaultTab = null;

    public function __construct(){
        parent::__construct();
        $this->prepareTab();
    }

    public function prepareTab(){
        $this->addTab('customergroup',['label'=>'CustomerGroup Form','block'=>'Block\Admin\CustomerGroup\Edit\Tabs\CustomerGroup']);
        
        $this->setDefaultTab('customergroup');
        return $this;
    }

   public function setDefaultTab($defaultTab){
       $this->defaultTab = $defaultTab;
       return $this;
    }

}

?>