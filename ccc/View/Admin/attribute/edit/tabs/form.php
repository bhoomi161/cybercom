<?php 
  $attribute=$this->getTableRow();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Attribute'); ?>">
  <div class="font-weight-bold">
    <div class="form-row" style="margin-left: 250px; margin-top: 50px;">

        <div class="form-group col-md-6">
        <label for="entity type id">Entity Type Options</label>      
          <select name="attribute[entityTypeId]" class="form-control">
              <option value="">select</option>
            <?php foreach ($attribute->getEntityTypeOptions() as $key => $value) :?>
              <option value="<?php echo $key ?>"<?php if($attribute->entityTypeId==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
            <?php endforeach?>
          </select>   
        </div>

        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input type="text" name="attribute[name]" id="name" class="form-control" value="<?php echo $attribute->name; ?>">
        </div>
      
        <div class="form-group col-md-6">
          <label for="code">Code</label>
        <input type="text" class="form-control" name="attribute[code]" id="code"  value="<?php echo $attribute->code; ?>">
        </div>

        <div class="form-group col-md-6">
          <label for="inputType">Input Type</label>
          <select name="attribute[inputType]" class="form-control">
            <option value="">select</option>
          <?php foreach ($attribute->getInputTypeOptions() as $key => $value):?>
            <option value="<?php echo $key ?>"<?php if($attribute->inputType==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
          <?php endforeach ?>
          </select>
        </div>
      
        <div class="form-group col-md-6">
          <label for="backendType">BackendType</label>
          <select name="attribute[backendType]" class="form-control">
            <option value="">select</option>
          <?php foreach ($attribute->getBackendTypeOptions() as $key => $value):?>
            <option value="<?php echo $key ?>"<?php if($attribute->backendType==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
          <?php endforeach ?>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="sortorder">Sort Order</label>
          <input type="text" name="attribute[sortOrder]" class="form-control" id="sortOrder"  value="<?php echo $attribute->sortOrder; ?>">   
        </div>

        
        <div class="form-group col-md-6">
          <label for="backendModel">Backend Model</label>
          <input type="text" id="backendModel" class="form-control" name="attribute[backendModel]" value="<?php echo $attribute->backendModel; ?>">
        </div>
        <div class="form-group col-md-6">
           <button type="button" class="btn btn-success btn-lg" style="margin-top: 30px; margin-left: 50px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
        </div>
    </div>

  </div>
</form>
