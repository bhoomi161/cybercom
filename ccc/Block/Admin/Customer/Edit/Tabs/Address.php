<?php
namespace Block\Admin\Customer\Edit\Tabs;
\Mage::loadFileByClassName('Block\Core\Template');

class Address extends \Block\Core\Template{
    protected $billingAddress = null;
    protected $shippingAddress = null;

    public function __construct ()
    {
       parent :: __construct();
       $this->setTemplate('View/Admin/customer/edit/tabs/address.php');
    }

    public function setBillingAddress($billingAddress=null){
		if(!$billingAddress){
            $billingAddress = \Mage::getModel('Model\Customer\Address');
            $id = $this->getTableRow()->customerId;
            $query = "SELECT * FROM `{$billingAddress->getTableName()}` where addressType=1 and `customerId`=$id";
            $billingAddress = $billingAddress->fetchRow($query);
           
        }
        $this->billingAddress = $billingAddress;
        return $this;
        
	}

	public function getBillingAddress(){
		if(!$this->billingAddress){
			$this->setBillingAddress();
		}
		return $this->billingAddress;
	}

    public function setShippingAddress($shippingAddress=null){
		if(!$shippingAddress){
            $shippingAddress = \Mage::getModel('Model\Customer\Address');
            $id = $this->getTableRow()->customerId;
            $query = "SELECT * FROM `{$shippingAddress->getTableName()}` where addressType=2 and  `customerId`=$id";
            $shippingAddress = $shippingAddress->fetchRow($query);
		}
		$this->shippingAddress = $shippingAddress;
		return $this;
	}

	public function getshippingAddress(){
		if(!$this->shippingAddress){
			$this->setShippingAddress();
		}
		return $this->shippingAddress;
	}
	
	public function getFormUrl()
    {
        return $this->getUrl()->getUrl('save');
    }

    public function getTitle()
    {
        return 'Address Add/Edit';
    }

}
?>