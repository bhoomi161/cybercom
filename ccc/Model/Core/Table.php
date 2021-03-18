<?php
namespace Model\Core;
class Table{

	protected $primaryKey = null;
	protected $tableName = null;
	public $data = [];
	protected $adapter = Null;
	protected $admin = null;
	protected $arrayData = [];

	public function __construct()
	{

	}

	public function setAdapter()
	{
		$this->adapter =\Mage::getModel('Model\Core\Adapter');
		return $this;
	}
	public function getAdapter()
	{
		if(!$this->adapter){
			$this->setAdapter();
		}
		return $this->adapter;
	}
	public function setPrimaryKey($value)
	{
		$this->primaryKey = $value;
		return $this;
	}
	public function getPrimaryKey()
	{
		return $this->primaryKey;
	}

	public function setData(array $data)
	{
		$this->data = array_merge($this->data,$data);
		return $this;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setArrayData(array $key,array $value){
		$this->arrayData = array_combine($key,$value);
		return $this;
	}

	public function getArrayData(){
		return $this->arrayData;
	}

	public function arrayUpdate($id = null)
    {
        $data = $this->getArrayData();
        foreach ($data as $key => $value) {
            $values = implode(',', $value);
          
            $query = "UPDATE `{$this->getTableName()}` SET $key = '$values' WHERE `{$this->getPrimaryKey()}` = '$id'";
			$this->getAdapter()->update($query);
        }
        return $this;
    }	
	public function setTableName($value)
	{
		$this->tableName = $value;
		return $this;
	}
	public function getTableName()
	{
		return $this->tableName;
	}

	public function __set($key,$value)
	{
		$this->data[$key] = $value;
		return $this;
	}

	public function __get($key)
	{
		if(!array_key_exists($key, $this->data)){
			return null;
		}
		return $this->data[$key];

	}

	public function save()
	{
		$data = $this->getData();	
		$fields ="`".implode("`,`",array_keys($data))."`";
		$values = "'".implode("','",array_values($data))."'";

		if(array_key_exists($this->getPrimaryKey(),$this->data)){
			$value = $this->data[$this->getPrimaryKey()];
			$cols = [];

    		foreach($this->data as $key =>$val) {
        		$cols[] = "$key = '$val'";
    		}
    		$query = "UPDATE `{$this->getTableName()}` SET " . implode(', ', $cols) . " WHERE `{$this->getPrimaryKey()}` = {$value}  ";
			$id = $this->getAdapter()->update($query);
			 
		} 
		$query = "insert into `{$this->getTableName()}` (".$fields.") values (".$values.")";
		$id = $this->getAdapter()->insert($query);

		$this->load($id);
		
		return $this;
	}
	
	public function load($value)
	{
		$value = (int)$value;
	 	$query = "select * from `{$this->getTableName()}` where `{$this->getPrimaryKey()}` = {$value}";
		$row = $this->getAdapter()->edit($query);	
		if(!$row){
			return false;
		}
		$this->data = $row;
		return $this;
	}

	public function fetchRow($query)
	{
		$row = $this->getAdapter()->edit($query);	
		if(!$row){
			return false;
		}
		$this->data = $row;
		return $this;
	}

	public function delete($id = null)
	{
		if($id==null){
			if(!array_key_exists($this->getPrimaryKey(),$this->data)){
				return false;
			}
			$data = $this->getData();
			$id = $data[$this->getPrimaryKey()];
		}
		$query = "delete from `{$this->getTableName()}` where `{$this->getPrimaryKey()}` = {$id}";
		return $this->getAdapter()->delete($query);

	}

	public function edit($query){
		$row= $this->getAdapter()->edit($query);
	}

	public function deleteOption($query){
		return $this->getAdapter()->delete($query);
	}

	public function getCategoryName(){
		$query = "select categoryId,categoryName from category";
		$rows= $this->getAdapter()->fetchAll($query);
		
		foreach ($rows as $key  => &$value) {
			$row = new $this;
			$value = $row->setData($value);
		}
		
		return $rows;
	}
	public function fetchAll($query=null)
	{
		if(!$query){
			$query = "select * from `{$this->getTableName()}`";
		}
		
		$rows = $this->getAdapter()->fetchAll($query);
		
		if(!$rows){
			return false;
		}
		foreach ($rows as $key  => &$value) {
			$row = new $this;
			$value = $row->setData($value);
		}
		
		$collectionClassName = get_class($this).'\Collection';
		$collection = \Mage::getModel($collectionClassName);
		$collection->setData($rows);
		return $collection;
		
	}

}

?>