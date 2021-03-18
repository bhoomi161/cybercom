<?php 
    $image = $this->getImage();
?>
<p class="h2"><?php echo $this->getTitle(); ?></p>

<button type="button" class="btn btn-danger" id="delete" onclick="object.resetParams().setForm('#form').load();">Delete</button><br><br>
<form method="POST" id="form" action="<?php echo $this->getUrl()->getUrl('update','Product\Media');?>">
<button class="btn btn-success" type="button" onclick="object.resetParams().setForm('#form').load();">Update</button>   <table border="1" class="table table-striped"><br><br>
        <thead class="bg-secondary text-white">
            <tr>
                <td>Image</td>
                <td>Label</td>
                <td>Thumb</td>
                <td>Small</td>
                <td>Base</td>
                <td>Gallery</td>
                <td>Remove</td>
            </tr>
        </thead>
        <tbody>
        <?php  if($image):?>
        <?php foreach($image->getData() as $key=>$value): ?>
        
        <tr>
            <td><img style="height:100px; width:100px;" src="Image/Product/<?php echo $value->image;?>"></td>
            <td><input type="text" name="img[data][<?php echo $value->imageId; ?>][label]" value="<?php echo $value->label; ?>"></td>
            <td><input type="radio" name="img[thumb]" value="<?php  echo  $value->imageId; ?>" <?php if($value->thumb==1):echo "checked"; endif?>></td>
            <td><input type="radio" name="img[small]" value="<?php  echo  $value->imageId; ?>" <?php if($value->small==1):echo "checked"; endif?>></td>
            <td><input type="radio" name="img[base]" value="<?php  echo  $value->imageId; ?>" <?php if($value->base==1):echo "checked"; endif?>></td>
            <td><input type="checkbox" name="img[data][<?php echo $value->imageId; ?>][gallery]" <?php if($value->gallery==1){echo "checked";}?>></td>          
            <td><input type='checkbox' name="remove" value="<?php echo $value->imageId ?>"></td>
        </tr>
        <?php endforeach; endif ?>
        </tbody>
        </table>
</form>

<form method="POST" id="imageUploadForm" action="<?php echo $this->getUrl()->getUrl('save','Product\Media'); ?>" enctype="multipart/form-data">
        <input type="file" name="file">
        <button class="btn btn-primary" type="submit">Upload</button>
</form>
<script>
$(document).ready(function (e){
    $('#imageUploadForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(response){
                if(typeof response.element == 'object'){
                     $(response.element).each(function(i,element){
                     $(element.selector).html(element.html);
            })                 
            }},
            error:function(data){
               alert('Some problem in uploading...');
            }
        });

    }));   
});
    $(document).ready(function(){
        $('#delete').click(function(){
            if(confirm('Are you sure to remove?')){
            var id = [];
            $(':checkbox:checked').each(function(i){
                id[i]=$(this).val();
            });
            if(id.length==0){
                alert('Please select at least one checkbox');
            }
            else{
                $.ajax({
                    url:'http://localhost/ccc/index.php?c=Product\\Media&a=delete',
                    method:'POST',
                    data:{
                        id:id,
                    },
                    success:function(){
                    for(var i=0;i<id.length;i++){
                        $('tr#'+id[i]+'').css('background-color','white');
                    }  
                    }
                });
            }
    }else{
        return false;
    }
    });
});

</script>
