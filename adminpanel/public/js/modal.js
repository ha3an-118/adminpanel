$(document).ready(function (){
    $("[tagmodal='modal']").click(function(){
       var modalid= $(this).attr("modalid");
        var temp=$(this).attr("whichmodal");
       $("#"+temp).css("display","block");
       posttest(modalid);
        });
    $("[closemodal]").click(function(){
           var temp= $(this).attr("closemodal");
            $("#"+temp).css("display","none"); 
        });
    });

function ha3anload (){
 
$.ajax({url:'test?id="1"',success: function($result){
               
                var temp=JSON.parse($result);
               $("#title").attr('value',temp.title) 
                alert(temp.req);
                
                
                }});
    
    
    
    
    }
function posttest($modalid){
    //$.post(URL,data,callback);
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
     $.post("/test",
        {
            id : $modalid

        },
        function(data, status){
            if(status == 'success'){
                  var temp=JSON.parse(data);
               $("#title").attr('value',temp.title) 
               $("#brif").text(temp.brif);
                

                }

            
            
            
            }
        
        );
    
    
    }
           

