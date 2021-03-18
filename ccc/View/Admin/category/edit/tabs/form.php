<?php
	$category=$this->getTableRow();
	$categories=$this->getCategoryOptions();	
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','Category'); ?>">
	<div class="font-weight-bold">
		<div class="row" style="margin-left: 100px; margin-top: 30px;">
			<div class="form-group col-sm-6">
				<label for="parentId">Parent Category</label>
				<select name="category[parentId]" class="form-control">
						<?php if ($categories):?>
							<?php foreach ($categories as $categoryId=>$categoryName) : ?>
								<option value="<?php echo $categoryId; ?>"<?php if($category->parentId==$categoryId):?>selected <?php endif?>><?php echo $categoryName;  ?></option>
							<?php endforeach ?>
						<?php endif ?>
				</select>
					
				<label for="categoryname">Category name</label>
				<input type="text" name="category[categoryName]" class="form-control" id="categoryName" value="<?php echo $category->categoryName; ?>">
			
				<label for="status">Status</label>
				<select name="category[status]" class="form-control">
					<?php foreach ($category->getStatusOptions() as $key => $value) :?>
						<option value="<?php echo $key ?>"<?php if($category->status==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
					<?php endforeach ?>
				</select>
		

				<label for="feature"]>Feature</label>
				<select name="category[featured]" id="feature" class="form-control">
					<option value="1">Yes</option>
					<option value="0">No</option>
				</select>	
			
				<label for="description">Description</label>
				<textarea id="description" class="form-control" name="category[description]"><?php echo $category->description; ?></textarea >
		
		
				<button type="button" class="btn btn-success btn-lg" style="margin-top:20px; margin-left:200px;" onclick="object.resetParams().setForm('#form').load();">Save</button>
			</div>	

		</div>
	</div>
</form>
