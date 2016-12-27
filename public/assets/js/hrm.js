/**
 * Created by tuyenbv on 08-Jun-16.
 */
function delete_obj(id,token,obj) {
    if (confirm('Delete this '+obj+'?')) {
        $.ajax({
            type: "DELETE",
            url: SITE_ROOT +'/'+obj+'/' + id, //resource
            data:{_token:token},
            success: function(affectedRows) {
                //if something was deleted, we redirect the user to the users page, and automatically the user that he deleted will disappear
                jQuery('.row_'+id).fadeOut();
//                    if (affectedRows > 0) ;
            }
        });
    }
}