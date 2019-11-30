

$(document).ready(function(){

    chargerCategories();
});


function chargerCategories(){
    $.get("categories.php" , function(rep){
        $("#divCat").html(rep);
    });
}