$(document).ready(function(){
    var preVal;
    console.log('file connected');
    $(".make_items").on("focus",function(){
        preVal = $(this).text().trim();
        console.log(preVal);
    })
    $(".make_items").on("blur",function(){
        var val = $(this).text().trim();
        $.ajax({
            method: "GET",
            url: "includes/update_make.php?new="+val+"&preVal="+preVal,
            success: function (response) {
                console.log(response);
             }
        })
    }); 
    // for manage feature page 
    $(".feature_items").on("focus",function(){
        preVal = $(this).text().trim();
        console.log(preVal);
    })
    $(".feature_items").on("blur",function(){
        var val = $(this).text().trim();
        console.log(val)
        $.ajax({
            method: "GET",
            url: "includes/update_feature.php?new="+val+"&preVal="+preVal,
            success: function (response) {
                console.log(response);
             }
        })
    });
});

// var makes = Array.from(document.getElementsByClassName('make_items'));
// console.log(makes);
// console.log('helo');
// for(var i = 0; i < makes.length;i++){
//     makes[i].addEventListener('blur',function(){
//         console.log(this.innerText);
//     })
// }