<?php
	/* Class for Managing DB */
	class cls_DBManagement {
	
		private $connection;

		// DB Connection
		public function __construct() { 	
		
			global $host_name,$db_user_name,$db_user_pwd,$db_name;
			
			$connection = mysql_connect($host_name,$db_user_name,$db_user_pwd) or die("Unable to Connect MySQL Server");
			mysql_select_db($db_name) or die("Unable to connect MySQL DB");			
			return $connection;
		}		
			
	}
	
?>