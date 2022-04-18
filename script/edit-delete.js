 //console.log("connected");

$(document).ready(function() {
// Editing the saved data 

        $('#editHead').removeClass("sorting");
        $('#deleteHead').removeClass("sorting");

  // show modal  
$(document).on('click', ".edit-btn", function(){
        $('.modals').show();
        var Id = $(this).data('eid');
        
        $.ajax({
                url: "../partials/_edit-courses.php",
                type: "POST",
                data: { id: Id},
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
$(document).on("click", "#edit-submit", function(){
        
        var edit_id= $("#edit_id").val();
        var edit_Deptt_name = $("#edit_Deptt_name").val();
        var edit_course_name = $("#edit_course_name").val();
        var edit_course_code = $("#edit_course_code").val();
        var edit_course_level = $("#edit_course_level").val();
        var edit_course_duration = $("#edit_course_duration").val();
        // console.log(edit_id);
        // console.log(edit_Deptt_name);
        // console.log(edit_course_code);
        // console.log(edit_course_name);
        // console.log(edit_course_duration);
        // console.log(edit_course_level);
        
        $.ajax({
                url: "../partials/_edit-courses.php",
                type: "POST",
                data: { 
                        edit_id: edit_id,
                        edit_Deptt_name: edit_Deptt_name,
                        edit_course_name : edit_course_name,
                        edit_course_code : edit_course_code,
                        edit_course_level : edit_course_level,
                        edit_course_duration : edit_course_duration
                },
                success: function(data){
                        if(data == 'success'){
                                $('.modals').hide();
                                alert("Data updated successfully.");
                        }else{
                                // console.log(data);
                                // console.log("error occured");
                                console.log("Try again. Error occured!");
                        }

                }
        });
});

// ------------- for departments ---------------- 

$(document).on('click', ".edit-deptt-btn", function(){
        
        $('.modals').show();
        var id = $(this).data('eid');
        
        $.ajax({
                url: "../partials/_edit_deptt.php",
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
$(document).on("click", "#edit-deptt-submit", function(){
        
        var edit_id= $("#edit_id").val();
        var edit_Deptt_name = $("#edit_Deptt_name").val();
 

        
        $.ajax({
                url: "../partials/_edit_deptt.php",
                type: "POST",
                data: { 
                        edit_id: edit_id,
                        edit_Deptt_name: edit_Deptt_name,
                        
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