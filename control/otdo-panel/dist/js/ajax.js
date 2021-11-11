$(document).ready(function(){
    $('#car_make').on('change', function(){
        var val = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/car_model.php?id="+val,
            success: function (response) {
                $('#car_model').html(response);
                console.log($('#car_model').html());
             }
        });
    });
    $('#car_model').on('change', function(){
        var val = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/car_variant.php?id="+val,
            success: function (response) {
                $('#car_variant').html(response);
                console.log($('#car_model').html());
             }
        });
    });
});

