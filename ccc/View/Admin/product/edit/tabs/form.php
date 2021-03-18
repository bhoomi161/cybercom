<?php 
  $product=$this->getTableRow(); 
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Product'); ?>">

<div class="font-weight-bold">
<div class="form-row" style="margin-left: 250px; margin-top: 50px;">

    <div class="form-group col-md-6">
		<label for="productname">Productname</label>      
		<input type="text" class="form-control" name="product[productName]" id="productName" value="<?php echo $product->productName; ?>">
    </div>

    <div class="form-group col-md-6">
    	<label for="quantity">Quantity</label>
    	<input type="text" name="product[quantity]" id="quantity" class="form-control" value="<?php echo $product->quantity; ?>">
    </div>
  
    <div class="form-group col-md-6">
      <label for="price">Price</label>
	  <input type="text" class="form-control" name="product[price]" id="price"  value="<?php echo $product->price; ?>">
    </div>

    <div class="form-group col-md-6">
    	<label for="sku">SKU</label>
		<input type="text" name="product[sku]" id="sku" class="form-control" value="<?php echo $product->sku; ?>">
    </div>
  

    <div class="form-group col-md-6">
    	<label for="discount">Discount</label>
		<input type="text" name="product[discount]" class="form-control" id="discount"  value="<?php echo $product->discount; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="status">Status</label>
	<select name="product[status]" class="form-control">
				<?php foreach ($product->getStatusOptions() as $key => $value):?>
					<option value="<?php echo $key ?>"<?php if($product->status==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
				<?php endforeach ?>
			</select>   
      
  </div>

    
    <div class="form-group col-md-6">
      <label for="description">Description</label>
	  <textarea id="description" class="form-control" name="product[description]"><?php echo $product->description; ?></textarea>
    </div>
    <div class="form-group col-md-6">

  <button type="button"
   class="btn btn-success btn-lg" style="margin-top: 35px; margin-left: 50px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
    </div>
</div>
</div>
