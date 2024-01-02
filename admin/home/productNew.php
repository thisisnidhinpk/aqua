<?php
   include_once("../config.php");
   
   
    if ( $_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
    $userID=$_SESSION['user'];
    include_once($abs_path. "/incl/frameClass.php");
    $userObj1       = new cls_AdminManagement();
    include("../incl/fckeditor/fckeditor.php") ;
     
		 	

?>

<a href="?p=products"><button class="btn btn-small btn-primary">View <i class="fa fa-file-text"></i></button></a>
	
	<form class="form-horizontal" id="JobTitle_submit" role="form" method="post" enctype="multipart/form-data" action="?p=framework" autocomplete="off">
		<input type="hidden" id="action_type" name="action_type" value="<?=$action_type;?>">

		<div class="box-body">

			<input type="hidden" id="id" name="id" value="<?=@$pId;?>" >
			
			
			
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Category <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					<select name="categoryId" id="categoryId" class="form-control" style="width: 100%;" required="">
						<option value="">Select Category</option>
					<?php $userObj1->_Load_Select_box('tbl_product_category'," where status=0",'id','category',@$categoryId)?>
					</select>
				</div>
			</div>
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Product Name <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					<input class="form-control" type="text" id="name" name="name" value="<?=@$name;?>" required="">
				</div>
			</div>
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Product Image <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					<input class="form-control" type="file" id="productImage" name="productImage" value="<?=@$productImage;?>" <?php if($productImage=='') { ?> required="" <?php } ?>>
					<?php if($productImage!='') { ?>
					<img src="../uploads/products/<?= $productImage; ?>" width="40px">
					<?php } ?>
				</div>
			</div>
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Content <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					 <?php
                    $oFCKeditor = new FCKeditor('content') ;
                    $oFCKeditor->BasePath = '../incl/fckeditor/' ;
                    $oFCKeditor->Width  = '100%' ;
                    $oFCKeditor->Height = '300' ; 
                    $oFCKeditor->Value  = @$content;
                    $oFCKeditor->Create() ;
                ?>
				</div>
			</div>
			
		
			

			<div class="control-group row">
		    	<div class="controls col-sm-9">
		      		<button type="submit" class="saveBtn btn btn-primary pull-right"><i class="fa fa-save"></i> <?=$action_name?></button>
			      	<button type="reset" class="refreshBtn btn btn-secondary pull-right" style="margin-right:5px;"><i class="fa fa-refresh"></i> Reset</button>
			      	<a href="?p=employees" class="cancelbtn btn pull-right" style="margin-right:5px;"><i class="fa fa-times-circle-o"></i> Cancel </a>
		    	</div>
		    	<div class="controls col-sm-3">
		    	</div>
		  	</div>
		</div>
	</form>

