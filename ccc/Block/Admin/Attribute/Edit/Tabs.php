<?php 
namespace Block\Admin\Attribute\Edit;

\Mage::getController('Block\Core\Edit\Tabs');

class Tabs extends \Block\Core\Edit\Tabs{

    public function __construct()
    {
          parent::__construct();
         $this->prepareTab();
    }

    public function prepareTab()
    {
        $this->addTab('AttributeForm',['label'=>'Attribute Form','block'=>'Block\Admin\Attribute\Edit\Tabs\Attribute']);

        if($id=$this->getRequest()->getGet('updateId')){
            $obj = \Mage::getModel('Model\Attribute');
            $data = $obj->load($id);
           
            if($data->inputType!='text' && $data->inputType!='textarea'){
                $this->addTab('options',['label'=>'Option','block'=>'Block\Admin\Attribute\Edit\Tabs\Option']);
            }

        }
        $this->setDefaultTab('AttributeForm');
        return $this;
   }

  
}

?>