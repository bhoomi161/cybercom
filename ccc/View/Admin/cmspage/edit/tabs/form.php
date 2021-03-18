<?php
	$cmsPage=$this->getTableRow();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('save','CmsPage'); ?>">
	<div class="font-weight-bold">
		<div class="row" style="margin-left: 100px; margin-top: 30px;">
			<div class="form-group col-sm-6">
				<label for="title">Title</label>
                <input type="text" name="cmsPage[title]" class="form-control" id="title" value="<?php echo $cmsPage->title; ?>">		
			
				<label for="identifier">Identifier</label>
				<input type="text" name="cmsPage[identifier]" class="form-control" id="identifier" value="<?php echo $cmsPage->identifier; ?>">
			
				<label for="status">Status</label>
				<select name="cmsPage[status]" class="form-control">
					<?php foreach ($cmsPage->getStatusOptions() as $key => $value):?>
						<option value="<?php echo $key ?>"<?php if($cmsPage->status==$key):?> selected <?php endif ?>><?php  echo $value;?></option>
					<?php endforeach ?>
				</select>
			

			
			<label class="form-control-label">Content</label>
                    <input type="hidden" id="myContent" name="cmsPage[content]">
                    <input type="hidden" id="setContent" value="<?php echo htmlentities($cmsPage->content); ?>">

                    <div class="adjoined-bottom">
                        <div class="grid-container">
                            <div class="grid-width-100">
                                <div id="editor">
								
                                </div>
                            </div>
                        </div>
                    </div>
				<button type="button" class="btn btn-success btn-lg" style="margin-top: 10px; margin-left: 250px;" onclick="getContent();object.resetParams().setForm('#form').load();">Save</button>
			</div>
	</div>
</form>
<script type="text/javascript">
    initSample();
    function getContent() {
		var data = CKEDITOR.instances['editor'].getData();
		document.getElementById("myContent").value = data;
 	}
    var setdata = document.getElementById("setContent").value;
    CKEDITOR.instances['editor'].setData(setdata);
</script>