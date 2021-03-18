<?php
$customers= $this->getCustomers();

?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Customer',[],false);?>').resetParams().load();">Add Customer</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Customer Id</th>
				<th>Customer Group</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Mobile</th>
				<th>Billing ZipCode</th>
				<th>Created Date</th>
				<th>Updated Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				if($customers):
					foreach ($customers->getData() as $key => $customer): ?> 
                            <tr>
                            	<td><?php echo $customer->customerId; ?></td>
								<td><?php echo $customer->customerGroup; ?></td>
								<td><?php echo $customer->firstName; ?></td>
                            	<td><?php echo $customer->lastName; ?></td>
                            	<td><?php echo $customer->email; ?></td>
								<td><?php echo $customer->status; ?></td>
                            	<td><?php echo $customer->mobile; ?></td>
								<td><?php ?></td>
                            	<td><?php echo $customer->createdDate; ?></td>
                            	<td><?php echo $customer->updatedDate; ?></td>
                            	<td>
								<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Customer',['updateId'=>$customer->customerId]);?>').resetParams().load();">Update</button>
								<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Customer',['deleteId'=>$customer->customerId]);?>').resetParams().load();">Delete</button>
                        		</td>
                    		</tr>
                   	<?php endforeach; endif?>
            </tbody>
	</table>
</body>
</html>
