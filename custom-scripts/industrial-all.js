$(document).on('click','#myBtn', function()
{

 
//var prodname = btn.getAttribute('data-prodname');
var modal = document.getElementById("myModal");
modal.style.display = "block";
   $Prod_name=  $(this).data("prodname");
  // document.getElementById("txtprodName").value="kk";
    $("#txtprodName").val($Prod_name);
    
 });