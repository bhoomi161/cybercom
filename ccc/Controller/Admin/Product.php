<?php
namespace Controller\Admin;

use Block\Admin\Admin\Edit;

\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');
\Mage::loadFileByClassName('Model\Core\Message');

class Product extends \Controller\Core\Admin{
	protected $product = null;
	protected $message = null;

	public function indexAction()
	{
		$layout = \Mage::getBlock('Block\Core\Layout');
		$content=$layout->getChild('content');
		echo $layout->toHtml();
	
	}
	public function gridHtmlAction()
	{
		$gridHtml= \Mage::getBlock('Block\Admin\Product\Grid')->toHtml();
		
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
		 try {
			if (!$this->getRequest()->isPost()) {
				throw new \Exception("Invalid Request");
			}
			$product = \Mage::getModel('Model\Product');
			date_default_timezone_set('Asia/Kolkata');
			if($id = $this->getRequest()->getGet('updateId')){
				$productData = $product->load($id);
				if(!$productData){
					$message = 'Record not found';
				}
				$product->updatedDate = date("Y/m/d h:i:sa");
				} else {
					$product->createdDate = date("Y/m/d h:i:sa");
				}
			$data = $this->getRequest()->getPost('product', null);
			$product->setData($data);
			$product->save();
			
			$this->redirect('gridHtml');

			} catch (\Exception $e) {
			$this->getMessage()->setFailure($e->getMessage());
			}
	}
	
	public function deleteAction(){
		try{
			if(!$this->getRequest()->isPost()){
				throw new \Exception("Inavalid Request");
			}
			$id=(int)$this->getRequest()->getGet('deleteId');
			if (!$id) {
				$message='Id not found';
			}
			$product = \Mage::getModel('Model\Product');
			$product->productId = $id;
			if($product->delete()){
				$message = 'Record deleted successfully';	
			} else {
				$message = 'Unable to delete message';
			}
			$this->redirect('gridHtml');

			}catch(\Exception $e){
			 	$this->getMessage()->setFailure($e->getMessage());

        	}
	}
	public function formAction()
	{
		$formHtml=\Mage::getBlock('Block\Admin\Product\Edit');
		$product = \Mage::getModel('Model\Product');
		$id = $this->getRequest()->getGet('updateId');
		
		if($id){
			$product = $product->load($id);
			if(!$product){
				$this->getMessage()->setFailure('Record not found..');	
			}
		}
		$form = $formHtml->setTableRow($product)->toHtml();
		
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