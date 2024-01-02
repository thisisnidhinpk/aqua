$(document).ready(function(){
    $("#btn-send-enq").click(function(){
        
        //$txtprodName=$("#txtprodName").val();
      $txtname=$("#txtName").val();
        $txtcontactnum=$("#txtContactnum").val();
        $txtemail=$("#txtEmail").val();
        //$txtaddress=$("#txtAddress").val();
        $txtremark=$("#txtRemark").val();
        
        // if(!$("#txtName").val())
        // {
            
        //     alert("Mandatory field..");
        //     $("#txtName").css("background-color","#ff7a7a");
        //     return;
        // }
        // if(!$("#txtContactnum").val())
        // {
        //     alert("Mandatory field..");
        //     $("#txtContactnum").css("background-color","#ff7a7a");
        //     return;
        // }
        // if(!$("#txtEmail").val())
        // {
        //     alert("Mandatory field..");
        //     $("#txtEmail").css("background-color","#ff7a7a");
        //     return;
        // }
        // if(!$("#txtAddress").val())
        // {
        //     alert("Mandatory field..");
        //     $("#txtAddress").css("background-color","#ff7a7a");
        //     return;
        // }
        
        
   $.ajax({url:'email-enquiry.php',
          data:{'txtName':$txtname,'txtContactnum':$txtcontactnum,'txtEmail':$txtemail,'txtRemark':$txtremark},
          dataType:'json',
          type:'post',
          success:function(successData) {
                  if(successData.status)
                  {
                      alert(successData.Msg);
                  }
                  else{
                      alert(successData.Msg);
                  }
          },
          error:function(errorData) {
              alert(errorData);
          }
      });
     // alert("welcome"+$txtname);
    });
    // $("#txtName").focus(function(){
    //     $("#txtName").css("background-color","white");
    // });
    // $("#txtContactnum").focus(function(){
    //     $("#txtContactnum").css("background-color","white");
    // });
    // $("#txtEmail").focus(function(){
    //     $("#txtEmail").css("background-color","white");
    // });
    // $("#txtAddress").focus(function(){
    //     $("#txtAddress").css("background-color","white");
    // });
    
  });