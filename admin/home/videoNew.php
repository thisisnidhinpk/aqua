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

			<input type="hidden" id="id" name="id" value="<?=@$videoId;?>" >
			
			
			

			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Title <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					<input class="form-control" type="text" id="title" name="title" value="<?=@$title;?>" required="">
				</div>
			</div>
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Content </label>
				<div class="controls col-sm-6">
					<textarea class="form-control" id="content" name="content"   ><?=@$content;?></textarea>
				</div>
			</div>
			<?php if($url!=''){ ?> 
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">Uploaded Video <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					<?php echo $url;?>
				</div>
			</div>
			<?php } ?>
			<div class="row" id="field_name">
				<label class="col-sm-3 control-label" for="fname">URL <font class="redFont"> *</font></label>
				<div class="controls col-sm-6">
					<input class="form-control" type="text" id="url" name="url" value="" <?php if($videoId==''){ ?> required="" <?php } ?> >
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

