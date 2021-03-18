<?php
$payments= $this->getPayments();

?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Payment',[],false);?>').resetParams().load();">Add Payment</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Method Id</th>
				<th>Name</th>
				<th>Code</th>
				<th>Description</th>
				<th>Status</th>
				<th>Created Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
				<?php 
				if($payments):
					foreach ($payments->getData() as $key=>$payment):?>
                       	<tr>
                        <td><?php echo  $payment->methodId; ?></td>
                        <td><?php echo  $payment->name;?></td>
                        <td><?php echo  $payment->code;?></td>
                        <td><?php echo  $payment->description;?></td>
                        <td><?php if($payment->status == 1){?><button class="btn btn-success">Enable</button><?php }else {?> <button class="btn btn-warning">Disable</button><?php }?></td>
                        <td><?php echo  $payment->createdDate;?></td>
                        <td>
						<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Payment',['updateId'=>$payment->methodId]);?>').resetParams().load();">Update</button>
						<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Payment',['deleteId'=>$payment->methodId]);?>').resetParams().load();">Delete</button>
					    </td>
                        </tr>
                        <?php endforeach; endif?> 
		</tbody>
	</table>
</body>
</html>
