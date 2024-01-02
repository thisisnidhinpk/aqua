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

	
	<form class="form-horizontal" id="JobTitle_submit" role="form" method="post" enctype="multipart/form-data" action="?p=framework" autocomplete="off">
		<input type="hidden" id="action_type" name="action_type" value="<?=$action_type;?>">

		<div class="box-body">

			<input type="hidden" id="id" name="id" value="<?=@$faqId;?>" >
			
			
			



			<div class="row" id="field_name">
				
				<div class="controls col-md-12">
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

