<?php
	
	/* Class for Managing Users */
	class cls_AdminManagement {
		private $connection;

		// DB Connection
		public function __construct() { 
			global $abs_path;
			include_once($abs_path. "/incl/cls_db.php");
			
			$this->connection = new cls_DBManagement();	
		}
				
		public function get_name_from_id($id,$tblname,$match_fld,$return_fld)
		{
			$CHECK_ID="SELECT * FROM $tblname WHERE $match_fld='$id'";
			$EXEC_CHECK=mysql_query($CHECK_ID);
			$FOUND=mysql_num_rows($EXEC_CHECK);
			if($FOUND>0)
			{
				$FETCH=mysql_fetch_array($EXEC_CHECK);
				$NAME=$FETCH[$return_fld];
				return $NAME;
			}
			else
			{
				return false;
			}
		}
		public function dateToDb($date)
		{
			if(($date!='')&&($date!='0000-00-00'))
			{
				$date = new DateTime($date, new DateTimezone("Asia/Kolkata"));
	    		$new_date = $date->format('Y-m-d');
	    		return $new_date;
			}
			else
			{
				return false;
			}
			
		}
		public function dateToView($date)
		{
			if(($date!='')&&($date!='0000-00-00'))
			{
			$date = new DateTime($date, new DateTimezone("Asia/Kolkata"));
    		$new_date = $date->format('d-m-Y');
    		return $new_date;
    		}
			else
			{
				return false;
			}
		}
		public function _Load_Select_box($tbl_name,$options,$id_fld,$display_fld,$selected)
		{
			echo $LOAD_SELECT_BOX="SELECT * FROM $tbl_name $options";
			$EXEC_LOAD=mysql_query($LOAD_SELECT_BOX);
			$FOUND=mysql_num_rows($EXEC_LOAD);
			if($FOUND>0)
			{
				while($FETCH=mysql_fetch_array($EXEC_LOAD))
				{
				?>
		<option value="<?php echo $FETCH[$id_fld];?>"<?php if($selected==$FETCH[$id_fld]){ ?> selected="selected"<?php }?>><?php echo $FETCH[$display_fld];?></option>
		<?php
				}
			}

		}
		public function authenticateUser($username, $password) {

			 $strSQL = "SELECT * FROM tbl_admin	WHERE uname ='$username' AND pass ='$password'";							
			$strRes = mysqli_query($con,$strSQL);		
			if ( $strRes && mysqli_num_rows($strRes)>0) {
				$data	=	mysqli_fetch_array($strRes, MYSQLI_ASSOC);
				$user_id = $data['id'];
				$_SESSION['team_id'] 	= $data['teamId'];
				$_SESSION['user_code'] 	= $data['tCode'];				
				return true;
			}
			return false;
		}
		public function forgotPwd($user_email) {
			$name = '';
			$strSQL = "SELECT * FROM tbl_agents 
							WHERE email ='$user_email'";
			$strRes = mysql_query($strSQL);		
			if ( $strRes && mysql_num_rows($strRes)>0) {
				$data		=	mysql_fetch_array($strRes, MYSQL_ASSOC);
				$user_pwd 	= 	$data['password'];
				$user_id 	= 	$data['id'];
				$name	= $data['firstname'] ;	
				$this->sendConfirmation($user_email, $user_pwd, $name);
				return true;
			}
			return false;
		}
		public function getName($staff_id,$tbl_name)
		{
			$staff_name=$this->get_name_from_id($staff_id,$tbl_name,'id','firstname')." ".$this->get_name_from_id($staff_id,$tbl_name,'id','lastname');
			return $staff_name;
		}
		
//Products
		//category

	
	function getCategory($options='',$fields='*'){

			include "../config.php";
			global  $abs_path;		
			$strSQL = "SELECT $fields FROM `tbl_product_category` where status=0 $options ORDER BY id ASC ";
			$strRes = mysql_query($strSQL);
			$listing = array();
			while($listing_data = mysql_fetch_array($strRes,MYSQLI_ASSOC)) {
				$listing[] = $listing_data;
			}
			return $listing;
		}	
		  function createCategory($category,$action='') {
			include "../config.php";
		 	$category = $_POST['category'];
			if($action=='')
			{
				$strSQL = "INSERT INTO tbl_product_category (category,addedOn,addedBy) VALUES('$category','$now','$loginUser')"; 
		    		$strRes = mysql_query($strSQL); 
		    		return true;
		    		$x=1;
			}
			else
			{
				$id = $_POST['id'];
				$strSQL = "UPDATE tbl_product_category SET category = '$category', updatedOn = '$now' WHERE id = '$id'"; 
    				$strRes = mysql_query($strSQL);
    				return true;
    				$x=1;
			}
		    
		}	
		
		function getProducts($options='',$fields='*'){

			include "../config.php";
			global  $abs_path;		
			$strSQL = "SELECT $fields FROM `tbl_products` where status=0 $options ORDER BY id ASC ";
			$strRes = mysql_query($strSQL);
			$listing = array();
			if($strRes)
			{
				while($listing_data = mysql_fetch_array($strRes,MYSQLI_ASSOC)) {
					$listing[] = $listing_data;
				}
				
			}
			return $listing;
			
		}	
		 function createProduct($action='') {
			include "../config.php";
		 	global  $abs_path;
		 	$name = $_POST['name'];
		 	$categoryId = $_POST['categoryId'];
		 	$content = $_POST['content'];

		 	$error_array=array();
		 	$allowedExts = array("pdf", "doc", "docx","image/jpg","image/png","image/jpeg"); 
		 	$csize=$_FILES["productImage"]["size"];
		 	if($csize>0)
		 	{
		 		$cfilename = $_FILES["productImage"]["name"];
			 	$ctempname = $_FILES["productImage"]["tmp_name"];
			 	$ctype=$_FILES["productImage"]["type"];
			 	$newcname = time().$cfilename;
			 	$folder = "../uploads/products/".$newcname;
			 	if($csize < 2097152)
				{
					if(in_array($ctype, $allowedExts))
					{
						if(!move_uploaded_file($ctempname, $folder))
						{
							$error_array[]=' Product Image is not uploaded,Someting Went Wrong..';
							$newcname='';
						}
					}
					else
					{
						$error_array[]=' Product Image is not uploaded,Check file type';
						$newcname='';
					}
					
				}
				else 
				{
					$error_array[]=' Product Image is not uploaded,Check file size';
					$newcname='';
				}
		 	}
			if($action=='')
			{
				$strSQL = "INSERT INTO tbl_products (name,categoryId,content,productImage,addedOn,addedBy) VALUES('$name','$categoryId','$content','$newcname','$now','$loginUser')"; 
		    		$strRes = mysql_query($strSQL); 
		    		return $error_array;
			}
			else
			{
				$id = $_POST['id'];
				$fileOptions='';
    			if($newcname!='')
    			{
    				$fileOptions=",`productImage`='$newcname'";
    			}
				$strSQL = "UPDATE tbl_products SET name='$name',categoryId = '$categoryId',content = '$content', updatedOn = '$now' $fileOptions  WHERE id = '$id'";
    				$strRes = mysql_query($strSQL);
    				return $error_array;
			}
		    
		}	

		function getVideos($options='',$fields='*'){

			include "../config.php";
			global  $abs_path;		
			$strSQL = "SELECT $fields FROM `tbl_videos` where status=0 $options ORDER BY id ASC ";
			$strRes = mysql_query($strSQL);
			$listing = array();
			while($listing_data = mysql_fetch_array($strRes,MYSQLI_ASSOC)) {
				$listing[] = $listing_data;
			}
			return $listing;
		}	
		  function createVideo($category,$action='') {
			include "../config.php";
		 	global  $abs_path;
		 	$title = $_POST['title'];
		 	$content = $_POST['content'];
		 	$url = $_POST['url'];
			if($action=='')
			{
				$strSQL = "INSERT INTO tbl_videos (title,content,url,addedOn,addedBy) VALUES('$title','$content','$url','$now','$loginUser')"; 
		    		$strRes = mysql_query($strSQL); 
		    		return true;
		    		$x=1;
			}
			else
			{
				$id = $_POST['id'];
				$urlOptions='';
				if($url!='')
				{
					$urlOptions=",url = '$url'";
				}
				$strSQL = "UPDATE tbl_videos SET title = '$title',content = '$content', updatedOn = '$now' $urlOptions WHERE id = '$id'"; 
    				$strRes = mysql_query($strSQL);
    				return true;
    				$x=1;
			}
		    
		}	
		function getBanner($options='',$fields='*'){

			include "../config.php";
			global  $abs_path;		
			$strSQL = "SELECT $fields FROM `tbl_banner` where status=0 $options ORDER BY id ASC ";
			$strRes = mysql_query($strSQL);
			$listing = array();
			if($strRes)
			{
				while($listing_data = mysql_fetch_array($strRes,MYSQLI_ASSOC)) {
					$listing[] = $listing_data;
				}
				
			}
			return $listing;
			
		}	
		 function createBanner($action='') {
			include "../config.php";
		 	global  $abs_path;

		 	$error_array=array();
		 	$allowedExts = array("pdf", "doc", "docx","image/jpg","image/png","image/jpeg"); 
		 	$csize=$_FILES["bannerImage"]["size"];
		 	if($csize>0)
		 	{
		 		$cfilename = $_FILES["bannerImage"]["name"];
			 	$ctempname = $_FILES["bannerImage"]["tmp_name"];
			 	$ctype=$_FILES["bannerImage"]["type"];
			 	$newcname = time().$cfilename;
			 	$folder = "../uploads/banner/".$newcname;
			 	if($csize < 2097152)
				{
					if(in_array($ctype, $allowedExts))
					{
						if(!move_uploaded_file($ctempname, $folder))
						{
							$error_array[]=' Banner Image is not uploaded,Someting Went Wrong..';
						}
					}
					else
					{
						$error_array[]=' Banner Image is not uploaded,Check file type';
					}
					
				}
				else 
				{
					$error_array[]=' Banner Image is not uploaded,Check file size';
				}
		 	}
			if($action=='')
			{
				if(empty($error_array))
				{
					$strSQL = "INSERT INTO tbl_banner (image,addedOn,addedBy) VALUES('$newcname','$now','$loginUser')";
		    		$strRes = mysql_query($strSQL);
		    		$error_array[]=' Banner Added Successfully';
				}
				  return $error_array;
			}
			else
			{
				$id = $_POST['id'];
				$fileOptions='';
				if(empty($error_array))
				{
	    			if($newcname!='')
	    			{
	    				$fileOptions=",`image`='$newcname'";
	    				$strSQL = "UPDATE tbl_banner SET updatedOn = '$now' $fileOptions  WHERE id = '$id'"; 
	    				$strRes = mysql_query($strSQL);
	    				$error_array[]=' Banner Updated Successfully';
	    				
	    			}
	    		}
				return $error_array;
			}
		    
		}	
		function getFaqs($options='',$fields='*'){

			include "../config.php";
			global  $abs_path;		
			$strSQL = "SELECT $fields FROM `tbl_faqs` where status=0 $options ORDER BY id ASC ";
			$strRes = mysql_query($strSQL);
			$listing = array();
			if($strRes)
			{
				while($listing_data = mysql_fetch_array($strRes,MYSQLI_ASSOC)) {
					$listing[] = $listing_data;
				}
				
			}
			return $listing;
			
		}	
		 function createFaqs($action='edit') { 
		 	include "../config.php";
		 	$id = $_POST['id'];
		 	$content = $_POST['content'];
			if($action=='edit')
			{
				 $strSQL = "UPDATE tbl_faqs SET content = '$content', updatedOn = '$now'  WHERE id = '$id'"; 
    				$strRes = mysql_query($strSQL);
    				return true;
    				$x=1;
			}
		    
		}	
		
	}
?>

