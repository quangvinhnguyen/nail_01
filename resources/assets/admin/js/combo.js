var items = []; // items được khai báo chung.

if ($('#listchooseproduct').attr('data-ids')) {
     items = jQuery.parseJSON($('#listchooseproduct').attr('data-ids'));
}

$('#service_id').on('change', function() {
    var url = $(this).val();
    $.get(
        url,
        {},
        function(response) {
            if (response.status) {
                $('#listProducts').html();
                $('#listProducts').html(response.view);
            } else {
                alert(reponse.message);
            }
    });
});

$('body').on('click', '.btn-add', function() {
    var product =  $(this).attr('value');
    var item = jQuery.parseJSON(product);
    var head = "<tr id='" + item.id + "'><td align='center'>";
    var middle = "</td><td align='center'><button type='button' class='btn-remove btn-danger fa fa-close'></button></td><input type='hidden' name='productIds[]' value='";
    var end = "'></tr>";
    var flag = true;

    for (var index = 0; index < items.length; index++) {
        if (item.id == items[index]) {
            flag = false;
        }
    }

console.log(items)
console.log(flag)
    if (flag) {
        $('#listchooseproduct').append(head + item.name + middle + item.id + end);
        items.push(item.id); // them vào mang item
    }
});

$('body').on('click', '.btn-remove', function() {
    for (var index = 0; index < items.length; index++) {
        if ($(this).closest('tr').attr('id') == items[index]) {
            items[index] = null;
            $(this).closest('tr').remove();
        }
    }
});

$('body').on('click', '.pagination a', function(e) {
    e.preventDefault();
    var currentUrl = location.href;
    var page = $(this).attr('href').split('page=')[1];
    var url = $(this).attr('href');

    $.get(
        url,
        {},
        function(response) {
            if (response.status) {
                $('#listProducts').html();
                $('#listProducts').html(response.view);
                location.hash = page;
            } else {
                location.href = url.split('?page=')[0];
            }
    });
});
