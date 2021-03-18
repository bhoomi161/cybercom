<?php 
$cmsPages=$this->getCmsPages();
?>
<button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','CmsPage',[],false);?>').resetParams().load();">Add CMS Page</button>
	<table border="1" class="table table-striped" style="margin-top: 30px;">
		<thead class="bg-secondary text-white">
			<tr>
				<th>Page Id</th>
				<th>Title</th>
				<th>Identifier</th>
				<th>Content</th>
				<th>Status</th>
                <th>Created Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if($cmsPages):
				foreach ($cmsPages->getData() as $key => $cmsPage) : ?> 
                    <tr>
                        <td><?php echo $cmsPage->pageId; ?></td>
                        <td><?php echo $cmsPage->title; ?></td>
                        <td><?php echo $cmsPage->identifier; ?></td>
						<td><?php echo $cmsPage->content; ?></td>
                        <td><?php if($cmsPage->status == 1):?><button class="btn btn-success">Enable</button><?php else:?> <button class="btn btn-warning">Disable</button><?php endif?></td>
                        <td><?php echo $cmsPage->createdDate; ?></td>
                        <td>
                        <button class="btn btn-success" style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('form','CmsPage',['updateId'=>$cmsPage->pageId]);?>').resetParams().load();">Update</button>
						<button class="btn btn-danger"  style="margin-top: 20px;" onclick="object.setUrl('<?php echo $this->getUrl()->getUrl('delete','CmsPage',['deleteId'=>$cmsPage->pageId]);?>').resetParams().load();">Delete</button>
                        </td>
                    </tr>
            <?php endforeach; endif?>
		</tbody>
	</table>
</body>
</html>
