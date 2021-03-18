<?php

namespace Controller\Core;

\Mage::loadFileByClassName('Model\Core\Request');
\Mage::loadFileByClassName('Model\Admin\Message');
\Mage::loadFileByClassName('Controller\Core\Abstracts');

class Admin extends Abstracts
{
    public function __construct()
    {
        parent::__construct();
        $this->setLayout();
        $this->setMessage();
    }

    public function setLayout(\Block\Admin\Layout $layout = null)
    {
        if(!$layout){
            $layout =\Mage::getBlock('Block\Admin\Layout');
        }
        $this->layout = $layout;
        return $this;

    }

    public function setMessage()
    {
        $this->message = \Mage::getModel('Model\Admin\Message');
        return $this;
    }

   
    
}

