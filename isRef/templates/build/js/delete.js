/*
*delete selection
*/
$(function() {


    $(".delbutton").click(function(){
    
    //Save the link in a variable called element
    var element = $(this);
    
    //Find the id of the link that was clicked
    var del_id = element.attr("id");
    
    //Built a url to send
    var info = del_id;
     if(confirm("Are you sure you want to delete "+ info +" project?"))
        {
        $.ajax({
        type: "GET",
        url: "http://localhost/LBDA/main/deleteproject.php",
        data: {
           data: info
        },
        success: function(){
        }
        });
        $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
         .animate({ opacity: "hide" }, "slow");
         window.location.href = 'createproject.php'
     }    
    return false;
    
    });
    
    });