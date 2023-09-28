$(document).on('click', '.delete-user', function(){
    var id = $(this).data('id');

    // This adds a class then hides it
    $(this).addClass('hide');
    $('.delete-options').addClass('hide');
    $('#options'+id).removeClass('hide');
});


$(document).on('click', '.delete-submit', function(){
    var id = $(this).data('id');
    var val = $(this).data('val');

    if(val=='No') {
        // This adds a class then hides it
        $('.delete-user').removeClass('hide');
        $('.delete-options').addClass('hide');
    } else {
        $.ajax({
            url:"users_submit.php",
            method: "POST",
            data:{id:id,submit_delete:'Yes'},
            success:function(data){
                $('#user'+id).remove();
            }
        })
    }
});



// $(document).on('click', '.delete-submit', function(){
//     var id = $(this).data('id');
//     var val = $(this).data('val');
//     var clickedElement = $(this); // Store the reference to the clicked element

//     if(val=='No') {
//         $('.delete-user').removeClass('hide');
//         $('.delete-options').addClass('hide');
//     } else {
//         $.ajax({
//             url:"users_submit.php",
//             method: "POST",
//             data:{id:id,submit_delete:'Yes'},
//             success:function(data){
//                 clickedElement.closest('tr').remove(); // Use the stored reference to remove the row
//             } 
//         })
//     }
// });
