<?php 
$categories=$this->getCategories();
?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Category',[],false);?>').resetParams().load();">Add Category</button>
	<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Category Id</th>
				<th>Category Name</th>
				<th>Status</th>
				<th>Featured</th>
				<th>Created ON</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if($categories):
				foreach ($categories->getData() as $key => $category): ?> 
                    <tr>
                        <td><?php echo $category->categoryId; ?></td>
                        <td><?php echo $this->getName($category); ?></td>
                        <td><?php echo $category->status; ?></td>
						<td><?php echo $category->featured; ?></td>
						<td><?php echo $category->createdDate; ?></td>
                        <td>
                        <button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Category',['updateId'=>$category->categoryId]);?>').resetParams().load();">Update</button>
						<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Category',['deleteId'=>$category->categoryId]);?>').resetParams().load();">Delete</button>
                        </td>
                    </tr>
            <?php endforeach; endif?>
		</tbody>
	</table>
</body>
</html>
