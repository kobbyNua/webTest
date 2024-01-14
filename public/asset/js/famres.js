getImage=(e)=>{

    let file=this.files[0]
    if(file){
         let reader=new FileReader();
         reader.onload=function(event){
            $('.profile-image').prop('src',event.target.result)
         }
         reader.readAsDataURL(file)
    }
}
$(document).ready(function(){
    $("#upload").change(function(event){
        var x=URL.createObjectURL(event.target.files[0])
        $('.profile-image').attr('src',x)
        console.log(event)
    
    })
})


$(document).ready(function(){
    var formBox=new bootstrap.Modal(document.getElementById('resopnseBox'),{keyboard:true})
    $('#createfarmers').submit(function(e){
          
          formBox.show()
          formdata=new FormData(this)
          $.ajax({
              url:'/create_new_farmers/',
              data:formdata,
              type:'post',
              dataType:'json',
              processData:false,
              contentType:false,
              cache:false,
              beforeSend:function(){
                   $(".modal-body-message").html("<span class='fas fa-spin fa-spinner'></span><p class='mt-3 mb-3'>Waiting!connecting to server</p>")
              },
              success:function(data){
                    //console.log(data)
                    if(data.status == "success"){
                        $(".modal-body-message").html("<span class='fas fa-spin fa-spinner'></span><p class='mt-3 mb-3'>"+data.success+"</p>")
                        //console.log(data.success)
                        window.location=" "
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


    $('#famersData').on('click','.view-details',function(e){
          e.preventDefault()
          var id=$(this).attr('id')
          
          $.ajax({
            url:'/view_farmers/'+id,
            type:'get',
            dataType:'json',
            success:function(data){
                console.log(data.data)
                let image=""
                let fullname="";
                let gender=""
                birth_place=""
                dob=""
                house=""
                community="";
                occup=""
                district=""
                region=""
                ms=""
                bio=""
                for(let farmer in data.data){
                    console.log(data.data[farmer])
                    image+=data.data[farmer].photo
                    gender+=data.data[farmer].gender
                    fullname+=data.data[farmer].first_name.toUpperCase()+ " "+data.data[farmer].last_name.toUpperCase()
                    birth_place+=data.data[farmer].birth_place
                    dob+=data.data[farmer].dob
                    community+=data.data[farmer].community
                    occup+=data.data[farmer].occupation
                    district+=data.data[farmer].district
                    region+=data.data[farmer].region
                    house+=data.data[farmer].house_number
                    ms+=data.data[farmer].marital_statu
                    bio+=data.data[farmer].bio

                }
                $(".image-profile").html('<img src="/uploads/'+image+'"><h5>'+fullname+'</h5><h6>'+gender+'</h6>')
                $('#props .birth_place').html(birth_place)
                $('#props .dob').html(dob)
                $('#props .occupation').html(occup)
                $('#props .district').html(district)
                $('#props .region').html(region)
                $('#props .ms').html(ms)
                $('#props .community').html(community)
                $('#props .house_number').html(house)
                $('#prop .bio').html(bio)
                console.log(birth_place)
            }
          })
    })
 })