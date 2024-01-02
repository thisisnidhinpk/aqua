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

<a href="?p=videos"><button class="btn btn-small btn-primary">View <i class="fa fa-file-text"></i></button></a>

<table class="table table-striped" style="margin-top:20px;">
                
               
                <tr>
                  <th style="width: 20%" >Title</th>
                  <td style="width: 1%">:</td>
                  <td> <?php echo $title; ?></td>
                </tr>
                <tr>
                  <th style="width: 20%">Content    </th>
                  <td style="width: 1%">:</td>
                  <td> <?= $content; ?></td>
                </tr>
                
                 <tr>
                  <th style="width: 20%">Url</th>
                  <td style="width: 1%">:</td>
                  <td> <?php echo $url; ?></td>
                </tr>

                
               
               
              </table>
              


              
                </td></tr>
                </tbody>
            </table>


