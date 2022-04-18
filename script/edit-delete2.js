console.log("edit2 connected");
$(document).ready(function() {

    // ------------- for Users ---------------- 
  
    $(document).on('click', ".edit-user-btn", function(){
          
            $('.modals').show();
            var id = $(this).data('eid');
            
            $.ajax({
                    url: "../partials/_edit_users.php",
                    type: "POST",
                    data: { id: id},
                    success: function(data){
                            $("#modals-form table").html(data);
    
                    }
            });
    });
    // hide modal
$('#close-btn').on('click', function(){

    $('.modals').hide();
});

    
    // Save updated data 
    $(document).on("click", "#edit-user-submit", function(){
            
            var edit_id= $("#edit_id").val();
            var edit_user_name = $("#edit_user_name").val();
            var edit_user_email = $("#edit_user_email").val();
            var edit_user_password = $("#edit_user_password").val();
            var edit_user_type = $("#myselection option:selected").text();
            var edit_Deptt_name = $("#myselectionDeptt option:selected").text();
            //var edit_Deptt_name = $("#edit_Deptt_name").val();
            //var edit_user_name = $("#edit_user_name").val();
            console.log(edit_id);
            console.log(edit_user_name);
            console.log(edit_user_email);
            console.log(edit_user_password);
            console.log(edit_user_type);
            console.log(edit_Deptt_name);
            

     
    
            
            $.ajax({
                    url: "../partials/_edit_users.php",
                    type: "POST",
                    data: { 
                            edit_id: edit_id,
                            edit_user_name:edit_user_name,
                            edit_user_password:edit_user_password,
                            edit_user_type:edit_user_type,
                            edit_Deptt_name: edit_Deptt_name        
                    },
                    success: function(data){
                            if(data == 'success'){
                                    $('.modals').hide();
                                    alert("Data updated successfully.");
                            }else{
                                    // console.log(data);
                                    // console.log("error occured");
                                    alert("Error occured!");
                            }
    
                    }
            });
    });
    
    
    
    
    
    });