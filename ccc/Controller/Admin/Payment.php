<?php
namespace Controller\Admin;

\Mage::loadFileByClassName('Controller\Core\Admin');

class Payment extends \Controller\Core\Admin{
	protected $payment = null;

	public function indexAction()
	{
		$layout = \Mage::getBlock('Block\Core\Layout');
		$content=$layout->getChild('content');
		echo $layout->toHtml();
	
	}
	public function gridHtmlAction()
	{
		$gridHtml= \Mage::getBlock('Block\Admin\Payment\Grid')->toHtml();
		$response = [
			'status' => 'success',
			 'message' => ' U r great',
			'element' =>[
				[
					'selector'=>'#contentGrid',
					'html' => $gridHtml
				],
				[
					'selector'=>'#leftHtml',
					'html' => null
				]
			]
		];
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($response);
	}

	public function saveAction(){
		try{
			if(!$this->getRequest()->isPost()){
				throw new \Exception("Invalid Request");
			}
			$payment = \Mage::getModel('Model\Payment');
			date_default_timezone_set('Asia/Kolkata');
			if($id = $this->getRequest()->getGet('updateId')){
				$paymentData = $payment->load($id);
				if(!$paymentData){
					$this->getMessage()->setFailure('Record not found');
					$this->redirect('gridHtml','Payment',null,true);
				}
			} 
			function random_strings() { 
                $subString =  substr(md5(time()), 0, 10); 
                return $subString;
            } 
            $subString =  random_strings();
           	$arr = ['1','2','3','4','5','6','7','8','9','0'];
            $str = str_replace($arr,'_',$subString);
            $code = $str;
            $payment->code = $code;
			$payment->createdDate = date("Y/m/d h:i:sa");
			$paymentData = $this->getRequest()->getPost('payment');
			$payment->setData($paymentData);
			if($payment->save()){
				if($id = $this->getRequest()->getGet('updateId')){
					$this->getMessage()->setSuccess('Record successfully updated');
				}else {
					$this->getMessage()->setSuccess('Record successfully inserted');
				}
			}else {
					if($id = $this->getRequest()->getGet('updateId')){
						$this->getMessage()->setFailure('Unable to update record');
					}else {
						$this->getMessage()->setFailure('Unable to insert record');
				}
			}
			$this->redirect('gridHtml');

		} catch(\Exception $e){
			$this->getMessage()->setFailure($e->getMessage());
        }
	}
	public function deleteAction(){
		try{
			if(!$this->getRequest()->isPost()){
				throw new \Exception("Invalid Request");
			}
			$id=(int)$this->getRequest()->getGet('deleteId');
			if (!$id) {
				$this->getMessage()->setFailure('Record Not Found');

            }
			else {
				$payment = \Mage::getModel('Model\Payment');
				$payment->methodId = $id;
				if($payment->delete()){
					$this->getMessage()->setSuccess('Record successfully deleted ');
				} else {
					$this->getMessage()->setFailure('Unable to delete record');
				}
			}
			$this->redirect('gridHtml');

		}catch(\Exception $e){
			$this->getMessage()->setFailure($e->getMessage());
        }
	}

	public function formAction(){
		
		$formHtml=\Mage::getBlock('Block\Admin\Payment\Edit');
		$payment = \Mage::getModel('Model\Payment');
		$id  = $this->getRequest()->getGet('updateId');
		
		if($id){
			$payment = $payment->load($id);
			if(!$payment){
				$this->getMessage()->setFailure('Record not found...');
			}
		}
		$form = $formHtml->setTableRow($payment)->toHtml();
		$response=[
			'status'=>'success',
			'element'=>[
				[	'selector'=>'#contentGrid',
					'html'=>$form
				],
				
			]
		];
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($response);

	}
	
}
?>