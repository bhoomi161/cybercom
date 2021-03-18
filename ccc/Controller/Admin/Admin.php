<?php
namespace Controller\Admin;

\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');

class Admin extends \Controller\Core\Admin{
	protected $admin = null;

	public function indexAction()
	{
		$layout = \Mage::getBlock('Block\Core\Layout');
		$content=$layout->getChild('content');
		echo $layout->toHtml();
	
	}
	
	public function gridHtmlAction()
	{
		$gridHtml= \Mage::getBlock('Block\Admin\Admin\Grid')->toHtml();
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
			$admin = \Mage::getModel('Model\Admin');
			date_default_timezone_set('Asia/Kolkata');
			if($id = $this->getRequest()->getGet('updateId')){
				$adminData = $admin->load($id);
				if(!$adminData){
					$this->getMessage()->setFailure('Record not found');
					$this->redirect('gridHtml','Admin',null,true);
				}
			}
			$admin->createdDate = date("Y/m/d h:i:sa");
			$adminData = $this->getRequest()->getPost('admin');
			$password = $this->getRequest()->getPost('password');
			$admin->password = md5($password);
			$admin->setData($adminData);
			if($admin->save()){
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
				
            } else {
				$admin = \Mage::getModel('Model\Admin');
				$admin->adminId = $id;
				if($admin->delete()){
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
		$formHtml=\Mage::getBlock('Block\Admin\Admin\Edit');
		$admin = \Mage::getBlock('Model\Admin');
		$id = $this->getRequest()->getGet('updateId');
		if($id){
			$admin = $admin->load($id);
			if(!$admin){
				$this->getMessage()->setFailure('Record not found..');
			}
		}
		$form=$formHtml->setTableRow($admin)->toHtml();
		$response=[
			'status'=>'success',
			'message'=>'Hiii',
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