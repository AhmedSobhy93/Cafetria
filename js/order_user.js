$(function(){
var image_id;
var table=$("#table");
var product_name;
var choosen_product=[];
var amount=[];
var index;
var flag=0;
var final_amount=0;
var choosen_product_array_length=choosen_product.length;
//var price_array={"tea":2,"orange juice":5}
var amount_price;
var single_price;
var all_order_price_array=[];
var total_price=0;
var btn_id;
$("#image_div>img").on("click",image_click);


function image_click(e)
{
    image_id=e.target.id;
    //console.log(image_id);

    image_name=$("#sp_"+image_id).text();
    //console.log(image_name);

    for(var i=0;i<choosen_product.length;i++)
    {
        if(image_name==choosen_product[i])
        {
            flag=1;
            amount[i]=amount[i]+1;
            index=i;
            break;
        }

    }
    if(flag==1)
    {
        final_amount=$("#amount_"+image_id).val();
        final_amount=final_amount++;
        console.log(final_amount);

        amount[index]=final_amount;
        flag=0;
        single_price=$("#price"+image_id).val();
        amount_price=single_price*final_amount;
        all_order_price_array[index]=amount_price
        $("#row_"+image_id).replaceWith('<tr id="row_'+image_id+'"><td>'+image_name+'</td><td><input id="amount_'+image_id+'" type="number" value="'+final_amount+'"></td><td>'+amount_price+'</td><td><button id="btn_'+image_id+'">cancel</button></td></tr>');
        $("#btn_"+image_id).on("click",cancel_click);

    }
    else
    {
        choosen_product_array_length=choosen_product.length;
        choosen_product[choosen_product_array_length]=image_name;
        amount[choosen_product_array_length]=1;
        final_amount=1;
        index=choosen_product_array_length;
        single_price=$("#price"+image_id).val();
        amount_price=single_price;
        all_order_price_array[choosen_product_array_length]=amount_price;

        $("#table>tbody").append('<tr id="row_'+image_id+'"><td>'+image_name+'</td><td><input id="amount_'+image_id+'" type="number" value="'+final_amount+'"></td><td>'+amount_price+'</td><td><button id="btn_'+image_id+'">cancel</button></td></tr>');
        $("#btn_"+image_id).on("click",cancel_click);

    }



    for(var i=0;i<all_order_price_array.length;i++)
    {

        total_price=total_price+all_order_price_array[i];

    }


    $("#total_price").text(total_price);


    total_price=0;

}



//var button=$("#table>tbody>tr>td>button");
  //  console.log(button.get(0));

//button.on("click",cancel_click);


function cancel_click(e)
{

    //console.log(e.target.id);

    btn_id= e.target.id;
    var id_number=btn_id.split('_');
    console.log(id_number[1]);
    var row_deleted=$("#row_"+id_number[1]);
    //console.log(row_deleted.children('td').get(0).textContent);
    var column_content=row_deleted.children('td').get(0).textContent;
    for(var i=0;i<choosen_product.length;i++)
    {
        if(column_content==choosen_product[i])
        {
            choosen_product.splice(i,1);
            amount.splice(i,1);
            all_order_price_array.splice(i,1);
            index=i;
            break;
        }



    }

    row_deleted.remove();


    for(var i=0;i<all_order_price_array.length;i++)
    {

        total_price=total_price+all_order_price_array[i];

    }


    $("#total_price").text(total_price);


    total_price=0;



}



    $("#search_product").keyup(function(e){
        var pValue = $("#search_product").val();
        $.ajax
        ({
            url: "ajax-files/search_product_order_user_ajax.php",
            method:'get',
            data:{
                "value":pValue
            },
            success:function(response){
                $("#productView").html(response);
                //console.log("sssssss");
            }
        });
    });















})
