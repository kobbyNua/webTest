$(document).ready(function(){
    
    var formBox=new bootstrap.Modal(document.getElementById('resopnseBox'),{keyboard:true})
    $('#userRegistration').submit(function(e){
          
          formBox.show()
          $.ajax({
              url:'/user_registration/',
              data:$(this).serialize(),
              type:'post',
              dataType:'json',
              beforeSend:function(){
                   $(".modal-body-message").html("<span class='fas fa-spin fa-spinner'></span><p class='mt-3 mb-3'>Waiting!connecting to server</p>")
              },
              success:function(data){
                   
                    if(data.status == "success"){
                        $(".modal-body-message").html("<span class='fas fa-spin fa-spinner'></span><p class='mt-3 mb-3'>"+data.success+"</p>")
                        window.location="/"
                    }
                    else if(data.status == "error"){
                        $(".modal-body-message").html("<span class='fas fa-spin fa-spinner' style='color:red !important'></span><p class='mt-3 mb-3'>"+data.error+"</p>")
                    }
              },
              error:function(){
                $(".modal-body-message").html("<span class='fas fa-spin fa-spinner' style='color:red !important'></span><p class='mt-3 mb-3'>network timeout</p>")
              }
          })
        
          e.preventDefault()
    })
    
 })


function checkpass(){
    let password=$("input[name=password]").val()
    let confirm_password=$("input[name=cpassword]").val()

    if(password  !== confirm_password){
     
       $('.pass-error').html('<p style="color:red">Password mismatch</p>')
    }
}






