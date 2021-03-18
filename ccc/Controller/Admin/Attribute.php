<?php
namespace Controller\Admin;

\Mage::loadFileByClassName('Block\Core\Layout');
\Mage::loadFileByClassName('Controller\Core\Admin');

class Attribute extends \Controller\Core\Admin{

    public function indexAction()
    {
        $layout = \Mage::getBlock('Block\Core\Layout');
        $content = $layout->getChild('content');
        echo $layout->toHtml();
    }
    
    public function gridHtmlAction()
    {
        $gridHtml = \Mage::getBlock('Block\Admin\Attribute\Grid')->toHtml();
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

    public  function saveAction()
    {
        $attribute = \Mage::getModel('Model\Attribute');
       if($id=$this->getRequest()->getGet('updateId')){
          $attribute->attributeId = $id;
       }
       $data = $this->getRequest()->getPost('attribute');
      
       $attribute->setData($data);
       $attribute->save();
       $query = "ALTER TABLE `{$attribute->entityTypeId}` ADD {$attribute->name} {$attribute->backendType}";
       $attribute->edit($query);
       $this->redirect('gridHtml');
    }

    public function deleteAction()
    {
        try{
             if(!$this->getRequest()->isPost()){
                throw new \Exception("Inavalid Request");
             }
                $id = (int) $this->getRequest()->getGet('deleteId');
                $attribute = \Mage::getModel('Model\Attribute');
                $data=$attribute->load($id);
                $query = "ALTER TABLE `{$data->entityTypeId}` DROP COLUMN {$data->name}";
                $attribute->edit($query);
                $attribute->attributeId=$id;
                $attribute->delete();

                $this->redirect('gridHtml');

        }catch(\Exception $e){
             $this->getMessage()->setFailure($e->getMessage());
        }
    }

    public function formAction()
    {
        $formHtml=\Mage::getBlock('Block\Admin\Attribute\Edit');
        $attribute = \Mage::getModel('Model\Attribute');
		$id = $this->getRequest()->getGet('updateId');
		
		if($id){
			$attribute = $attribute->load($id);
			if(!$attribute){
				$this->getMessage()->setFailure('Record not found..');	
			}
		}
		$form = $formHtml->setTableRow($attribute)->toHtml();
		
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