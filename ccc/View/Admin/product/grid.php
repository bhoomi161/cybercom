<?php
$products= $this->getProducts();
 ?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Product',[],false);?>').resetParams().load();">Add Product</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Discount</th>
				<th>SKU</th>
				<th>Quantity</th>
				<th>Description</th>
				<th>Status</th>
				<th>Created Date</th>
				<th>Updated Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php if($products):
				foreach ($products->getData() as $key=>$product): ?>
					
                       	<tr>
                        <td><?php echo  $product->productId; ?></td>
                        <td><?php echo  $product->productName;?></td>
                        <td><?php echo  $product->price;?></td>
                        <td><?php echo  $product->discount;?></td>
                        <td><?php echo  $product->sku;?></td>
						<td><?php echo  $product->quantity;?></td>
                        <td><?php echo  $product->description;?></td>
                        <td><?php if($product->status == 1):?><button class="btn btn-success">Enable</button><?php else:?> <button class="btn btn-warning">Disable</button><?php endif?></td>
                        <td><?php echo  $product->createdDate;?></td>
                        <td><?php echo  $product->updatedDate;?></td>
                        <td>
						<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Product',['updateId'=>$product->productId]);?>').resetParams().load();">Update</button>
						<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Product',['deleteId'=>$product->productId]);?>').resetParams().load();">Delete</button>
					    </td>
                        </tr>
                        <?php endforeach; endif ?> 
		</tbody>
	</table>
</body>
</html>
