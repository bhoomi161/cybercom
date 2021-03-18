<?php
namespace Controller\Admin;

\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');
\Mage::loadFileByClassName('Block\Core\Layout\Message');

class Category extends \Controller\Core\Admin{
    protected $category = [];

    public function indexAction()
	{
		$layout = \Mage::getBlock('Block\Core\Layout');
		$content=$layout->getChild('content');
		echo $layout->toHtml();
	
	}
	public function gridHtmlAction()
	{
		$gridHtml= \Mage::getBlock('Block\Admin\Category\Grid')->toHtml();
		$response = [
			'status' => 'success',
			 'message' => 'U r great',
			'element' => [
				[
					'selector'=>'#contentGrid',
					'html' => $gridHtml
				],
				[
					'selector'=>'#leftHtml',
					'html'=>null
				]
			]
		];
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($response);
	}

    public function saveAction() {
        try{
            if (!$this->getRequest()->isPost()) {
                throw new \Exception("Invalid Request");
            }
            $category = \Mage::getModel('Model\Category');
            date_default_timezone_set('Asia/Kolkata');
            if ($id = $this->getRequest()->getGet('updateId')) {
                $categoryData = $category->load($id);
                if (!$categoryData) {
                    $this->getMessage()->setFailure('Record Not Found!');
                }
            }
            $categorypathId = $category->pathId;
            $categoryData = $this->getRequest()->getPost('category');
           
            $category->setData($categoryData);
            $category->createdDate = date("Y/m/d h:i:sa");
            $category->save();

            $category->updatePathId();
            $category->updateChildrenPathIds($categorypathId);
            $this->redirect('gridHtml');

        } catch(\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            echo $this->getMessage()->getFailure();
        }   
    }

    
    public function deleteAction() {
        try{
            if (!$this->getRequest()->isPost()){
                throw new \Exception("Invalid Request");
            }
            $id = (int) $this->getRequest()->getGet('deleteId');
            if (!$id) {
                $this->getMessage()->setFailure('Record Not Found!');
            } else {
                $category = \Mage::getModel('Model\Category');
                $category = $category->load($id);
            }
            $pathId=$category->pathId;
            $parentId=$category->parentId;
            $category->updateChildrenPathIds($pathId,$parentId);
            $category->delete();
            $this->redirect('gridHtml');

        } catch(\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
        }
    }

    public function formAction() {
        $formHtml=\Mage::getBlock('Block\Admin\Category\Edit');
        $category = \Mage::getModel('Model\Category');
		$id = $this->getRequest()->getGet('updateId');
		
		if($id){
			$category = $category->load($id);
			if(!$category){
				$this->getMessage()->setFailure('Record not found..');	
			}
		}
		$form = $formHtml->setTableRow($category)->toHtml();		
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