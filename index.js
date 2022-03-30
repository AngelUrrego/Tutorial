function init(){
}

$(document).ready(function() {

});

$(document).on("click", "#btnadministrador", function () {
      if ($("rol_id").val()==1){
       $('#lbltitulo').html("Acudientes");
       $('#btnadministrador').html("Acudientes");
       $("#rol_id").val(2);
    }else{
       $('#lbltitulo').html("Administrador");
       $('#btnadministrador').html("Acudientes");
       $("#rol_id").val(1);
    


       
    }
     
    
        
    

});

init();