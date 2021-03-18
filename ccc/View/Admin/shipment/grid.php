<?php
$shipments= $this->getShipments();

?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Shipment',[],false);?>').resetParams().load();">Add Shipment</button>
<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Method Id</th>
				<th>Name</th>
				<th>Code</th>
				<th>Amount</th>
				<th>Description</th>
				<th>Status</th>
				<th>Created Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
				<?php  if($shipments):
					foreach ($shipments->getData() as $key=>$shipment): ?>
                       	<tr>
                        <td><?php echo  $shipment->methodId; ?></td>
                        <td><?php echo  $shipment->name;?></td>
                        <td><?php echo  $shipment->code;?></td>
                        <td><?php echo  $shipment->amount;?></td>
                        <td><?php echo  $shipment->description;?></td>
                        <td><?php if($shipment->status == 1):?><button class="btn btn-success">Enable</button><?php else:?> <button class="btn btn-warning">Disable</button><?php endif?></td>
                        <td><?php echo  $shipment->createdDate;?></td>
                        <td>
						<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','Shipment',['updateId'=> $shipment->methodId]);?>').resetParams().load();">Update</button>
						<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','Shipment',['deleteId'=> $shipment->methodId]);?>').resetParams().load();">Delete</button>
                        </td>
                        </tr>
                        <?php endforeach; endif ?> 
		</tbody>
	</table>
</body>
</html>
