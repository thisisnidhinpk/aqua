 <?php 

include("lib/fckeditor/fckeditor.php") ;

?>

    
					  
							<div class="form-group">
								<label>Description</label>
								 <?php
                    $oFCKeditor = new FCKeditor('description') ;
                    $oFCKeditor->BasePath = 'lib/fckeditor/' ;
                    $oFCKeditor->Width  = '100%' ;
                    $oFCKeditor->Height = '300' ; 
                    $oFCKeditor->Value  = @$description;
                    $oFCKeditor->Create() ;
                ?>
							</div>
						