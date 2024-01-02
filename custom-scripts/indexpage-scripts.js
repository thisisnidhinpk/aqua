// $(document).ready(function(){
//   alert("jhg");
//     $("#a1").click(function(){
//       alert("hi");
//     });
//   });
  $(document).on('click','#a1', function()
{

  //var plant = document.getElementById('a1');
//var fruitCount = plant.getAttribute('data-id');
  $Prod_id=  $(this).data("id");
    
    window.location="DomesticRO.php?Pid="+$Prod_id;
});