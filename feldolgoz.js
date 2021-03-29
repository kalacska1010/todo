$(function (){
     $("#Add").on("click",beolvas);
});


var lista = [];
function beolvas(){
     $.ajax({
        type: "GET",
        url: "feldolgoz.php",
        success: function (result){
            console.log(result);
            lista= JSON.parse(result);
            console.log(lista);
            kiir();
        },
        error: function () {
            alert("Hiba az adatok betöltésekor!");
        }
    });
    
}
function kiir(){
    $("article").empty();
    for (var i = 0; i < lista.length; i++) {
        var szoveg = lista[i].szoveg;
        var datum = lista[i].datum;
        console.log(lista);
        var elem ="<ul><li>"+szoveg+"</li><li>"+datum+"</li></ul>";
        $("article").append(elem);
    }
    
}



function adBeir(){
    var esemeny = {
        szoveg: $("#szoveg").val(),
        datum:  $("#datum").val()
    };
    
    $.ajax({
        type: "POST",
        url: "beiras.php",
        data: esemeny,
        success: function (ujesemeny){
            console.log(ujesemeny);
            lista.push(JSON.parse(ujesemeny));
            console.log(lista);
            kiir();
        },
        error: function () {
            alert("Hiba az adatok mentésekor!");
        }
    });
}