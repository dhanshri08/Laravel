function showError(field, message){
    if(!message){
        $("#" + field).addClass('is-valid').removeClass('is-invalid').siblings('.invalid-feedback').text("");
    }
    else{
        $("#"+field).addClass('is-invalid').removeClass('is-valid').siblings('.invalid-feedback').text(message);
    }
}


function removeValidClasses(form){
    $(form).each (function(){
         $(form).find(':input').removeClass('is-valid is-invalid');
    });
}


function showMessage(type, message){
    return '<div class="alert alert-success" role="alert"><h4 class="alert-heading">Registered Succesfully</h4></div>'    ;
    
}