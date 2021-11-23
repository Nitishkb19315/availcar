$(document).ready(function () {
    $("#table").dataTable();
    var preVal;

    
    console.log("file connected");
    $(".make_items").on("focus", function () {
        preVal = $(this).text().trim();
        console.log(preVal);
    });
    $(".make_items").on("blur", function () {
        var val = $(this).text().trim();
        $.ajax({
            method: "GET",
            url: "includes/update_make.php?new=" + val + "&preVal=" + preVal,
            success: function (response) {
                console.log(response);
            },
        });
    });
    // for manage feature page
    $(".feature_items").on("focus", function () {
        preVal = $(this).text().trim();
        console.log(preVal);
    });
    $(".feature_items").on("blur", function () {
        var val = $(this).text().trim();
        console.log(val);
        $.ajax({
            method: "GET",
            url: "includes/update_feature.php?new=" + val + "&preVal=" + preVal,
            success: function (response) {
                console.log(response);
            },
        });
    });
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
    $('.ql-editor').on("blur",function(){
        $("#description").val($('.ql-editor>p').html());
    })
    $('#feature').change(function(){
        console.log(this.checked);
        if(this.checked){
            $('.feature-items').attr('checked',true);
            $('.toggle').addClass('btn-primary');
            $('.toggle').removeClass('btn-light off');
        }else{
            $('.feature-items').attr('checked',false);
            $('.toggle').removeClass('btn-primary');
            $('.toggle').addClass('btn-light off');
        }
    });
    $(".listing_priority").on("click", function() {
        var id = $(this).attr('data-id');
        var status = $(this).attr('data-status');
        $.ajax({
            method: "GET",
            url: "includes/change-listing-priority.php?id="+id+"&status="+status,
            
        }).done((data)=>{
            $(this).attr("data-status",data.trim());
            var span = $(this).find(".fas");
            if(span.hasClass("fa-check-circle")){
                span.removeClass("fa-check-circle");
                span.addClass("fa-times-circle");
            }else{
                span.addClass("fa-check-circle");
                span.removeClass("fa-times-circle");
            }
        })
    })
    $(".listing_status").on("click", function() {
        var id = $(this).attr('data-id');
        var status = $(this).attr('data-status');
        $.ajax({
            method: "GET",
            url: "includes/change-listing-status.php?id="+id+"&status="+status,
            
        }).done((data)=>{
            $(this).attr("data-status",data.trim());
            var span = $(this).find(".fas");
            if(span.hasClass("fa-check-circle")){
                span.removeClass("fa-check-circle");
                span.addClass("fa-times-circle");
            }else{
                span.addClass("fa-check-circle");
                span.removeClass("fa-times-circle");
            }
        })
    })
    $(".listing_feature_state").on("click", function() {
        var id = $(this).attr('data-id');
        var status = $(this).attr('data-feature');
        $.ajax({
            method: "GET",
            url: "includes/change-listing-feature-state.php?id="+id+"&status="+status,
            
        }).done((data)=>{
            $(this).attr("data-feature",data.trim());
            var span = $(this).find(".fas");
            if(span.hasClass("fa-check-circle")){
                span.removeClass("fa-check-circle");
                span.addClass("fa-times-circle");
            }else{
                span.addClass("fa-check-circle");
                span.removeClass("fa-times-circle");
            }
        })
    })
    $(".listing_visibility").on("click", function() {
        var id = $(this).attr('data-id');
        var status = $(this).attr('data-visibility');
        console.log(status);
        $.ajax({
            method: "GET",
            url: "includes/change-listing-visibility.php?id="+id+"&status="+status,
            
        }).done((data)=>{
            $(this).attr("data-visibility",data.trim());
            var span = $(this).find("span");
            $(this).html(span);
            $(this).append(data)
        })
    });
    $(".listing_availability").on("click", function() {
        var id = $(this).attr('data-id');
        var status = $(this).attr('data-availability');
        $.ajax({
            method: "GET",
            url: "includes/change-listing-availability.php?id="+id+"&status="+status,
            
        }).done((data)=>{
            console.log("success");
            console.log(data);
            $(this).attr("data-availability",data.trim());
            var span = $(this).find(".fas");
            if(span.hasClass("fa-check-circle")){
                span.removeClass("fa-check-circle");
                span.addClass("fa-times-circle");
            }else{
                span.addClass("fa-check-circle");
                span.removeClass("fa-times-circle");
            }
        }).fail(function() {
            alert( "error" );
          })
    });
    $('.contacts #first_email').on("blur", function (){
        var value = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/head-office-details.php?action=1&value="+value,
            
        }).done((data)=>{
            console.log(data);
        });
    });
    $('.contacts #second_email').on("blur", function (){
        var value = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/head-office-details.php?action=2&value="+value,
            
        }).done((data)=>{
            console.log(data);
        });
    })
    $('.contacts #first_mobile_no').on("blur", function (){
        var value = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/head-office-details.php?action=3&value="+value,
            
        }).done((data)=>{
            console.log(data);
        });
    })
    $('.contacts #second_mobile_no').on("blur", function (){
        var value = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/head-office-details.php?action=4&value="+value,
            
        }).done((data)=>{
            console.log(data);
        });
    })
    $('.contacts #address').on("blur", function (){
        var value = $(this).val();
        $.ajax({
            method: "GET",
            url: "includes/head-office-details.php?action=5&value="+value,
            
        }).done((data)=>{
            console.log(data);
        });
    })
    
    
});
