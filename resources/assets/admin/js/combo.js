$('#service_id').on('change',function(){
    var url = $(this).val();
    $.get(url,function(data)
            {
                $('#listProducts').html();
                $('#listProducts').html(data.view);
            }
        );
 });

$('body').on('click','.btn-add',function(){
    var product =  $(this).attr('value');
    var item = jQuery.parseJSON(product);

        $('#listchooseproduct').append("<tr><td align='center'>"+item.name+"</td><td align='center'><button type='button' class='btn-remove btn-danger fa fa-close'></button></td><input type='hidden' name='productIds[]' value='"+item.id+"'></tr>");

 });

 $('body').on('click','.btn-remove',function(){
        $(this).closest('tr').remove();
 });



