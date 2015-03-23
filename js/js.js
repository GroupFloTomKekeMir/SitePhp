$( document ).ready(function() {
  //  alert("yolo");
    
   $("#deco2").click(function(){
           // alert("test2");
        $.ajax({
            type: "GET",
            url: "../php/deconnexion.php",
            success: function(){
                document.location.href = "../Vue/index.php";
            }
        });
   
    }); 
  
});