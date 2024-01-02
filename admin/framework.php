<?php    
	ob_start();
	session_start();
	include_once("config.php");
    
    if(isset($_POST['login'])){
        // $username  =   mysql_escape_string($_POST['userN']);
        // $password  =   mysql_escape_string($_POST['passW']);
        $username  =  $_POST['userN'];
        $password  =   $_POST['passW'];
         $strSQL = "SELECT * FROM tbl_admin WHERE uname ='$username' AND pass ='$password'"; 
        // $strRes = mysql_query($strSQL);
        // $num = mysql_num_rows($strRes);
          $strRes = $con->query($strSQL);
        $num = mysqli_num_rows($strRes);
        
        $data   =   mysqli_fetch_array($strRes);
        $user_id = $data['id'];
        $_SESSION['user']    = $data['uname'];
        if($num > 0){
            header("Location: home");
        }else {
            header("Location: ./?e0");
        }
    }

    if(isset($_POST['recover'])){
         $email  =   mysqli_escape_string($con,$_POST['email']);
        
        $strSQL = "SELECT * FROM tbl_admin WHERE adm_mail ='$email'"; 
        $strRes = mysqli_query($con,$strSQL);
        $num = mysqli_num_rows($strRes);
        $data   =   mysqli_fetch_array($strRes);
        $user_id = $data['id'];
       
        if($num > 0){
            header("Location: ./?eS");
        }else {
            header("Location: ./?eR");
        }
    }

	$action 		= isset($_POST['action_type']) ? $_POST['action_type'] : "";	
	include_once($abs_path. "/incl/frameClass.php");
	$userObj 		= new cls_AdminManagement();

	switch (  $action )  {
		case 'MASTER_LOGIN':
			echo $username	=	mysql_escape_string($_POST['userN']);
			echo $password	=	mysql_escape_string($_POST['passW']);
			
			if (!empty($username) &&  !empty($password)) { 
				if ( $userObj->authenticateUser( $username, $password) ) {					
					header("Location: public"); 
				} else {
					mysql_error();
					//header("Location: index.php?e0");
					//exit();
				}	
			} else {
				//header("Location: index.php?e1");
				//exit();
			}
		break;

		
		case 'CREATE_CATEGORY':
			$category = mysql_escape_string($_POST['category']);	
			if(!empty($category)){	

			 	$x = $userObj->createCategory($category);

			 	if($x=='1') {
			 		?>
			 		<script>alert('Added Successfully..')</script>

			 		<script>window.location.assign('?p=category')</script>
			 		<?php
			 	} else {
			 		?>
				       <script>alert('Oops! Something went wrong...')</script>

				       <script>window.location.assign('?p=category&n=new')</script>
				       <?php
				}
			}
		break;
		
		case 'UPDATE_CATEGORY':
			$id = mysql_escape_string($_POST['id']);		 
		 	
			if(!empty($id)){	

			 	$x = $userObj->createCategory($id,'edit');

			 	if($x=='1') {
			 		?>
			 		<script>alert('Updated Successfully..')</script>

			 		<script>window.location.assign('?p=category')</script>
			 		<?php
			 	} else {
			 		?>
				       <script>alert('Oops! Something went wrong...')</script>

				       <script>window.location.assign('?p=category&n=new')</script>
				       <?php
				}
			}
		break;
		case 'CREATE_PRODUCT':
			$name = mysql_escape_string($_POST['name']);	
			if(!empty($name)){	
			 	$error_inUpload='';
			 	$error = $userObj->createProduct();
			 	$error_inUpload=implode(",", $error);?>
			 	
			 		<script>alert('Added Successfully..<?=$error_inUpload;?>')</script>

			 		<script>window.location.assign('?p=products')</script>
			 		<?php
			 	} 
		break;
		
		case 'UPDATE_PRODUCT':
			$id = mysql_escape_string($_POST['id']);	
			if(!empty($id)){	
				$error_inUpload='';
			 	$error = $userObj->createProduct('edit');
				$error_inUpload=implode(",", $error);?>
			 		<script>alert('Updated Successfully..<?=$error_inUpload;?>')</script>

			 		<script>window.location.assign('?p=products&id=<?=$id;?>')</script>
			 		<?php
			}	 
		break;

		case 'CREATE_VIDEO':
			$title = mysql_escape_string($_POST['title']);	
			if(!empty($title)){	

			 	$x = $userObj->createVideo($title);

			 	if($x=='1') {
			 		?>
			 		<script>alert('Added Successfully..')</script>

			 		<script>window.location.assign('?p=videos')</script>
			 		<?php
			 	} else {
			 		?>
				       <script>alert('Oops! Something went wrong...')</script>

				       <script>window.location.assign('?p=videos&n=new')</script>
				       <?php
				}
			}
		break;
		
		case 'UPDATE_VIDEO':
			$id = mysql_escape_string($_POST['id']);		 
		 	
			if(!empty($id)){	

			 	$x = $userObj->createVideo($id,'edit');

			 	if($x=='1') {
			 		?>
			 		<script>alert('Updated Successfully..')</script>

			 		<script>window.location.assign('?p=videos')</script>
			 		<?php
			 	} else {
			 		?>
				       <script>alert('Oops! Something went wrong...')</script>

				       <script>window.location.assign('?p=videos&n=new')</script>
				       <?php
				}
			}
		break;

		case 'CREATE_BANNER':
			$csize=$_FILES["bannerImage"]["size"];
			if($csize>0)
		 	{
			 	$error_inUpload='';
			 	$error = $userObj->createBanner();
			 	$error_inUpload=implode(",", $error);?>
			 	
			 		<script>alert('<?=$error_inUpload;?>')</script>

			 		<script>window.location.assign('?p=banner')</script>
			 		<?php
			 	} 
		break;
		
		case 'UPDATE_BANNER':

			$csize=$_FILES["bannerImage"]["size"];
			if($csize>0)
		 	{	
				$error_inUpload='';
			 	$error = $userObj->createBanner('edit');
				$error_inUpload=implode(",", $error);?>
			 		<script>alert('<?=$error_inUpload;?>')</script>

			 		<script>window.location.assign('?p=banner&id=<?=$id;?>')</script>
			 		<?php
			}
			else{?>
				<script>window.location.assign('?p=banner')</script>
			<?php }	 
		break;

		case 'UPDATE_FAQS':
			$id = mysql_escape_string($_POST['id']);		 
		 	
			if(!empty($id)){	

			 	$x = $userObj->createFaqs('edit');

			 	if($x=='1') {
			 		?>
			 		<script>alert('Updated Successfully..')</script>

			 		<script>window.location.assign('?p=faqs')</script>
			 		<?php
			 	} else {
			 		?>
				       <script>alert('Oops! Something went wrong...')</script>

				       <script>window.location.assign('?p=faqs&n=new')</script>
				       <?php
				}
			}
		break;
		
	}
	
?>