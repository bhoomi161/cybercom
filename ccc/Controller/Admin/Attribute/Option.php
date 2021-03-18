<?php
namespace Controller\Admin\Attribute;

\Mage::loadFileByClassName('Controller\Core\Admin');

class Option extends \Controller\Core\Admin{
    protected $option = [];

    public function indexAction()
    {
        $layout = \Mage::getBlock('Block\Core\Layout');
		$content = $layout->getChild('content');
		echo $layout->toHtml();
    }
    public function gridHtmlAction()
	{
		$gridHtml= \Mage::getBlock('Block\Admin\Attribute\Grid')->toHtml();
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
        $option = \Mage::getModel('Model\Attribute\Option');
        $existData = $this->getRequest()->getPost('exist');
        $newData = $this->getRequest()->getPost('new');
		
		$id = $this->getRequest()->getGet('updateId');
		$ids = [];

		foreach($existData as $optionId=>$value){
            $query = "UPDATE `{$option->getTableName()}` SET name='".$value['name']."',sortOrder=".$value['sortOrder']." where `{$option->getPrimaryKey()}`=$optionId and attributeId=$id";
        	$option->edit($query);
        }
		for($i=0;$i<count($newData);$i=$i+2){
			$newOption = \Mage::getModel('Model\Attribute\Option');
			$nextElement = $i+1;
			$newOption->name = $newData[$i];
			$newOption->sortOrder = $newData[$nextElement];
			$newOption->attributeId = $id;
			$obj=$newOption->save();
			array_push($ids,$obj->optionId);

		}
        foreach($existData as $optionId=>$value){
            array_push($ids,$optionId);
		}
		if(empty($ids)){
			$query = "DELETE FROM `{$option->getTableName()}` where attributeId = $id ";
		} else {
			$query = "DELETE FROM `{$option->getTableName()}` where attributeId = $id  and `{$option->getPrimaryKey()}` NOT IN (". implode(', ', $ids) .")" ;

		}
		$option->deleteOption($query);
	  
		$this->redirect('gridHtml');
	}
}
?>