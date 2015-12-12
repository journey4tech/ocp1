<div id="page-content">
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Category Name</th>
        
        <th>Status</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    
    
    <?php foreach($categories as $c) { 	?>

    <tr>
        <td><?=$c['categories_name']?></td>
        
      <td>	<img src="<?=base_url()?>/image/categories/<?=$c['categories_image']?>" height="150px" width="150px" > </td>
        
        <td class="center">
       	 <?php if($c['categories_status'] == '1') 
       	 { ?>
            <span class="label-success label label-default">Active</span>
            <?php }
            else
            { ?>
             <span class="label-danger label label-default">Inactive</span>
             <?php 
             
             } ?>
        </td>
        <td class="center">
            
            <a class="btn btn-info" href="<?=base_url()?>categories/edit/<?=$c['categories_id'] ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?=base_url()?>categories/delete/<?=$c['categories_id']?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php  } ?>
    
    </tbody>
    </table>
    </div>