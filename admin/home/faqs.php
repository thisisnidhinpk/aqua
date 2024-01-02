<?php
   include_once("../config.php");
   
    if ( $_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
    $userID=$_SESSION['user'];
    include_once($abs_path. "/incl/frameClass.php");
    $userObj1       = new cls_AdminManagement(); 
    $faqId=1;
        $faqOptions=" and id= ".$faqId;
        $faqDet = array();
        $faqDet = $userObj1->getFaqs($faqOptions);
        foreach ($faqDet as $listDet) {
            $content = $listDet['content'];
        }
        $action_type="UPDATE_FAQS";
        $action_name="UPDATE";
?>
<link href="themecss/datatables/responsive.bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="themecss/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="themecss/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="themecss/datatables/dataTables.responsive.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
        $('#example_length').hide();  
        $('.datepicker').datepicker({
                dateFormat: "dd-mm-yy"
            });

    });
</script>

<section class="content-header">
    <h1>FAQS  </h1>
        <a href="#" class="helpLink" target="_blank"
            style="display:none;color:#f4f4f4;font-size: 2.3rem;float: right;margin-top: -30px;text-shadow: 1px 1px 2px black, 0 0 25px #367fa9, 0 0 5px #367fa9;">
        <i class="fa fa-question-circle"></i></a>
</section>

<!-- Main content -->
<section class="content">

<div class="span9">
	<div class="tab-content">
		<div class="tab-pane active" id="tabPageEmployee">
			<div id="Employee" class="reviewBlock" data-content="List" style="padding-left:5px;">
            <div class="box-body table-responsive">
            <div id="grid_wrapper" class="dataTables_wrapper form-inline" role="grid">

            <?php include('faqUpdate.php');?>

            </div>
            </div>
            </div>
		</div>


        </div>
	</div>

</div>
</section>

