<?php
   include_once("../config.php");
   
    if ( $_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
    $userID=$_SESSION['user'];
    include_once($abs_path. "/incl/frameClass.php");
    $userObj1       = new cls_AdminManagement(); 
    $action_type="CREATE_VIDEO";
    $action_name="SAVE";$videoId='';$url='';

    if(isset($_GET['id']))
    {
        $videoId=$_GET['id'];
        $videoOptions=" and id= ".$videoId;
        $videoDet = array();
        $videoDet = $userObj1->getVideos($videoOptions);
        foreach ($videoDet as $listDet) {
            $title = $listDet['title'];
            $content = $listDet['content'];
            $url= $listDet['url'];
        }
        $action_type="UPDATE_VIDEO";
        $action_name="UPDATE";
    }
   

    $videoDet = array();
    $videoDet = $userObj1->getVideos();
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
    <h1>Videos  </h1>
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

                <?php 
                if(isset($_GET['n'])) {
                    if($_GET['n']=='new'){
                        include "videoNew.php";
                    }elseif ($_GET['n']=='view') {
                        include "videoView.php";
                    }
                } else {


                ?>


            <a href="?p=videos&n=new"><button class="btn btn-small btn-primary">Add New <i class="fa fa-plus"></i></button></a>

            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
                <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Title</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($videoDet as $listDet) { $i++; $tid=$listDet['id'];  ?>
                    <tr>
                        <td><?= $i; ?></td>
                         <td><?= $listDet['title']; ?></td>
                        <td>
                             <a href="?p=videos&n=view&id=<?php echo $tid; ?>">
                                    <img class="tableActionButton" src="images/view.png" style="cursor:pointer;margin-left:10px;" rel="tooltip" title="View" > </a>

                                <a href="?p=videos&n=new&id=<?php echo $tid; ?>" class="updateButtonP" ">
                                    <img class="tableActionButton" src="images/edit.png" style="cursor:pointer;margin-left:10px;" rel="tooltip" title="Edit" > </a>

                                <a href="?p=deleteData&table=tbl_videos&id=<?php echo $tid; ?>&return=videos" onclick="return confirm('Are you sure, want to delete Videos')" class="deleteButtonP" >
                                    <img class="tableActionButton" src="images/connect-no.png" style="margin-left:10px;cursor:pointer;" rel="tooltip" title="Delete Data" > </a>
                               


                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            </div>
            </div>
            </div>
		</div>


        </div>
	</div>

</div>
</section>

<style type="text/css">
    table tbody td a{ cursor: pointer; margin-left: 5px;  }
    .fa-download,.fa-eye{ font-size: 15px; }
    .fa-download{ color: #b71212; }
    .fa-eye { color: #2bb2d9; }
</style>