$(document).ready(function() {

    $('#rate').change(function() {
        
        var formData = {
            'id'                : $('input[name=id]').val(),
            'rating'             : $('input[name=rating]').val()
        };

        $.ajax({
            type: 'POST',
            url: url + 'rate/reet',
            data: formData
        })
        .done(function(data) {
            uhm = $.parseJSON(data);
            console.log(uhm[0]); 
        });
    });
});