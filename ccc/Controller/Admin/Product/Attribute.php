<?php
namespace Controller\Admin\Product;

\Mage::loadFileByClassName('Controller\Core\Admin');
\Mage::loadFileByClassName('Block\Core\Layout');
\Mage::loadFileByClassName('Block\Core\Layout\Message');

class Attribute extends \Controller\Core\Admin{
    protected $category = [];

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
            $product = \Mage::getModel('Model\Product');
            $id = $this->getRequest()->getGet('updateId');
            if ($id) {
                $productData = $product->load($id);
                if (!$productData) {
                    $this->getMessage()->setFailure('Record Not Found!');
                }
            }
            $keys = [];
            $values = [];
            $productAttributeData = $this->getRequest()->getPost();
           
            foreach($productAttributeData as $key=>$value){
                
                if(is_array($value)){
                    array_push($keys,$key);
                    array_push($values,$value);
                }else {
                    $product->$key = $value;
                }
            }
            $product->save();
            $product->setArrayData($keys,$values);
            $product->arrayUpdate($id);
            $this->redirect('gridHtml');

        } catch(\Exception $e) {
            $this->getMessage()->setFailure($e->getMessage());
            echo $this->getMessage()->getFailure();
        }   
    }

    public function formAction() {
        $formHtml=\Mage::getBlock('Block\Admin\Product\Edit')->toHtml();
		$tabHtml = \Mage::getBlock('Block\Admin\Product\Edit\Tabs')->toHtml();
		
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