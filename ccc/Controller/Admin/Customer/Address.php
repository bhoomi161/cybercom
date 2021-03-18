<?php
namespace Controller\Admin\Customer;
\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Address extends \Controller\Core\Admin{
    protected $shippingAddress= [];
    protected $billingAddress=[];


    public function saveAction() {
        try{
            if (!$this->getRequest()->isPost()) {
                throw new \Exception("Invalid Request");
            }
            $billingAddress = \Mage::getModel('Model\Customer\Address');
            $shippingAddress = \Mage::getModel('Model\Customer\Address');

            if($id = $this->getRequest()->getPost('billingId')){
                $billingAddress->addressId = $id;
            }
            if($id = $this->getRequest()->getPost('shippingId')){
                $shippingAddress->addressId = $id;
            }
            $billingData = $this->getRequest()->getPost('billing');
            $billingAddress->customerId= $this->getRequest()->getGet('updateId');
            $billingAddress->addressType=1;
            $billingAddress->setData($billingData);
            $billingAddress->save();

            $shippingData = $this->getRequest()->getPost('shipping');
            $shippingAddress->customerId= $this->getRequest()->getGet('updateId');
            $shippingAddress->addressType=2;
            $shippingAddress->setData($shippingData);
            $shippingAddress->save();

            $gridHtml = \Mage::getBlock('Block\Admin\Customer\Grid')->toHtml();
			$response = [
				'status'=>'success',
				'element'=>[
					[
						'selector'=>'#contentGrid',
						'html'=>$gridHtml
					]
				]
			];
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($response);
        } catch(\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }   
    }

    
    public function formAction() {
        $formHtml=\Mage::getBlock('Block\Admin\Customer\Edit')->toHtml();
		$tabHtml = \Mage::getBlock('Block\Admin\Customer\Edit\Tabs')->toHtml();
		
		$response=[
			'status'=>'success',
			'message'=>'Hiii',
			'element'=>[
				[	'selector'=>'#contentGrid',
					'html'=>$formHtml
				],
				[
					'selector'=>'#leftHtml',
					'html'=>$tabHtml
				]
			]
		];
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($response);
    }

}

?>