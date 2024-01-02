<?php
   include_once("../config.php");
   
    if ( $_SESSION['user'] == '' ) {
        header("Location: logout.php");exit();
    } 
    $userID=$_SESSION['user'];

    $id = $_GET['id'];
    include_once($abs_path. "/incl/frameClass.php");
    $userObj1       = new cls_AdminManagement(); 

?>

<a href="?p=products"><button class="btn btn-small btn-primary">View <i class="fa fa-file-text"></i></button></a>

<table class="table table-striped" style="margin-top:20px;">
                
               
                <tr>
                  <th style="width: 20%" >Name</th>
                  <td style="width: 1%">:</td>
                  <td> <?php echo $name; ?></td>
                </tr>
                <tr>
                  <th style="width: 20%">Category    </th>
                  <td style="width: 1%">:</td>
                  <td> <?= $userObj1->get_name_from_id($listDet['categoryId'],'tbl_product_category','id','category'); ?></td>
                </tr>
                
                 <tr>
                  <th style="width: 20%">Content
                  <?php if($productImage!=''){ ?> <img src="../uploads/products/<?=$productImage;?>" style="margin-top: 20px;"> <?php } ?></th>
                  <td style="width: 1%">:</td>
                  <td> <?php echo $content; ?></td>
                </tr>

                
               
               
              </table>
              


              
                </td></tr>
                </tbody>
            </table>


