<?php
namespace Block\Admin\Attribute\Edit\Tabs;

\Mage::loadFileByClassName('Block\Core\Template');

class Attribute extends \Block\Core\Template{
    protected $attribute = null;

    public function __construct()
    {
        parent :: __construct();
        $this->setTemplate('View/Admin/attribute/edit/tabs/form.php');
    }
    public function getFormUrl()
    {
        return $this->getUrl()->getUrl('save');
    }

    public function getTitle()
    {
        return 'Attribute Add/Edit';
    }
}
