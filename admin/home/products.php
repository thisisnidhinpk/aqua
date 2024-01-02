<?php
   include_once("../config.php");
   
    if ( $_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
     $userID=$_SESSION['user'];
     include_once($abs_path. "/incl/frameClass.php");
    // $userObj1       = new cls_AdminManagement(); 
    // $action_type="CREATE_PRODUCT";
    // $action_name="SAVE";$pId='';
    // $productImage='';
    // if(isset($_GET['id']))
    // {
    //     $pId=$_GET['id'];
    //     $categoryOptions=" and id= ".$pId;
    //     $productDet = array();
    //     $productDet = $userObj1->getProducts($categoryOptions);
    //     foreach ($productDet as $listDet) {
    //         $content = $listDet['content'];
    //         $name = $listDet['name'];
    //         $categoryId= $listDet['categoryId'];
    //         $productImage= $listDet['productImage'];
    //     }
    //     $action_type="UPDATE_PRODUCT";
    //     $action_name="UPDATE";
    // }
   
    // $productDet = array();
    // $productDet = $userObj1->getProducts();
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
    <h1>Products  </h1>
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
                        include "productNew.php";
                    }elseif ($_GET['n']=='view') {
                        include "productView.php";
                    }
                } else {


                ?>


            <a href="?p=products&n=new"><button class="btn btn-small btn-primary">Add New <i class="fa fa-plus"></i></button></a>

            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
                <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($productDet as $listDet) { $i++; $tid=$listDet['id'];  ?>
                    <tr>
                        <td><?= $i; ?></td>
                         <td><?= $userObj1->get_name_from_id($listDet['categoryId'],'tbl_product_category','id','category'); ?></td>
                          <td><?= $listDet['name']; ?></td>
                        <td>
                             <a href="?p=products&n=view&id=<?php echo $tid; ?>">
                                    <img class="tableActionButton" src="images/view.png" style="cursor:pointer;margin-left:10px;" rel="tooltip" title="View" onclick="modJs.view(1);return false;"> </a>

                                <a href="?p=products&n=new&id=<?php echo $tid; ?>" class="updateButtonP" ">
                                    <img class="tableActionButton" src="images/edit.png" style="cursor:pointer;margin-left:10px;" rel="tooltip" title="Edit" onclick="modJs.edit(1);return false;"> </a>

                                <a href="?p=deleteData&table=tbl_products&id=<?php echo $tid; ?>&return=products" onclick="return confirm('Are you sure, want to delete Products')" class="deleteButtonP" >
                                    <img class="tableActionButton" src="images/connect-no.png" style="margin-left:10px;cursor:pointer;" rel="tooltip" title="Delete Data" onclick="modJs.terminateEmployee(1);return false;"> </a>
                               


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