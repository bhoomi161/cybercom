<?php
namespace Controller\Admin;
\Mage::loadFileByClassName('Controller\Core\Admin');


class Shipment extends \Controller\Core\Admin{
	protected $shipment = null;

	public function indexAction()
	{
		$layout = \Mage::getBlock('Block\Core\Layout');
		$content=$layout->getChild('content');
		echo $layout->toHtml();
	
	}
	public function gridHtmlAction()
	{
		$gridHtml= \Mage::getBlock('Block\Admin\Shipment\Grid')->toHtml();
		$response = [
			'status' => 'success',
			'element' =>[ [
				'selector'=>'#contentGrid',
				'html' => $gridHtml
			],
			[
				'selector'=>'#leftHtml',
				'html'=>null
			] ]
		];
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($response);
	}
	public function saveAction(){
		try{
			if(!$this->getRequest()->isPost()){
				throw new \Exception("Invalid Request");
			}
			$shipment = \Mage::getModel('Model\Shipment');
			date_default_timezone_set('Asia/Kolkata');
			if($id = $this->getRequest()->getGet('updateId')){
				$shipmentData = $shipment->load($id);
				if(!$shipmentData){
					$this->getMessage()->setFailure('Record not found');
					$this->redirect('gridHtml','Shipment',null,true);
				}
			}
			function random_strings() { 
                $subString =  substr(md5(time()),0, 10); 
                return $subString;
            } 
            $subString =  random_strings();
           	$arr = ['0','1','2','3','4','5','6','7','8','9'];
            $str = str_replace($arr,'_',$subString);
            $code = $str;
            $shipment->code = $code; 
			$shipment->createdDate = date("Y/m/d h:i:sa");
			$shipmentData = $this->getRequest()->getPost('shipment');
			$shipment->setData($shipmentData);
			if($shipment->save()){
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
				$shipment = \Mage::getModel('Model\Shipment');
				$shipment->methodId = $id;
				if($shipment->delete()){
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
		$formHtml=\Mage::getBlock('Block\Admin\Shipment\Edit');
		$shipment = \Mage::getModel('Model\Shipment');
		$id  = $this->getRequest()->getGet('updateId');
		
		if($id){
			$shipment = $shipment->load($id);
			if(!$shipment){
				$this->getMessage()->setFailure('Record not found...');
			}
		}
		$form = $formHtml->setTableRow($shipment)->toHtml();
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