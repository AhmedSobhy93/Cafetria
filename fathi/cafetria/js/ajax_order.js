//$('button#input-submit').on('click',function(){
//    console.log("ajaxorder");
//    var user_id=$('input#user_id').val();
//    var from=$('input#from').val();
//     var to=$('input#to').val();
//     console.log(from);
//     console.log(to);console.log(user_id);
//       // if ($.trim(from)!='' && $.trim(to)!=''){
//            $post('../get_my_order.php',{user_id:user_id,from :from ,to:to},function(data){
//                
//                $('div#mytable').text(data); 
//            });
//            
//        //}
//});

//$(document).ready(function(){
//    $('button#input-submit').click(function (event){
//        console.log('ha');
//        event.preventDefult();
//        $.ajax({
//            
//            url:"./get_my_order.php",
//            method:"post",
//            data:$('form').serialize(),
//            datatype:"html",
//            success:function (Result){
//                $('#mytable').text(Result)
//            }
//        });
//    });
//    
//});