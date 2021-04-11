
$(function () {
    
    
    $("#betolt").on("click", beolvas);
    $("#Add").on("click", adatbeir);
    $("article").delegate(".torol", "click", adTorol);
    $("article").delegate(".modosit", "click", modosit);
    
});
var todo = [];
function beolvas() {
    $.ajax({
        type: "GET",
        url: "feldolgoz.php",
        success: function (result) {
            console.log(result);
            todo = JSON.parse(result);
            console.log(todo);
//            adatbeir(kiir);
            kiir(todo);

        },
        error: function () {
            alert("Hiba az adatok betöltésekor!");
        }
    });
}
function kiir(todo) {
      var txt = "<table>";
    $("article").empty();
    for (var i = 0; i < todo.length; i++) {

        var id = todo[i].id;
        var szoveg = todo[i].todo;
        var datum = todo[i].datum;
        var elem = "<tr><td>" + szoveg + "</td><td>" + datum + "</td><td><button class='torol' id='" + id + "'>Törlés</button></td><td><button class='modosit' id='" + id + "'>Pipa</button></td></tr>";
         txt += "</table>";
        $("article").append(elem);
    }

}

function adatbeir() {
    var szemely = {
        szoveg: $("#szoveg").val(),
        datum: $("#datum").val()

    };

    $.ajax({
        type: "POST",
        url: "beiras.php",
        data: szemely,
        success: function (ujSzemely) {
            todo.push(JSON.parse(ujSzemely));
        },
        error: function () {
            alert("Hiba az adatok mentésekor!");
        }
    });
     
}

function adTorol() {
    var aktelem = $(this).closest("div");
    var id = $(this).attr("id");
   console.log("Törlés "+id);

    $.ajax({
        type: "GET",
        url: "torol.php?id="+id,
        success: function () {
            aktelem.remove();
            
        },
        error: function () {
            alert("Hiba az adatok törlésekor!");
        }
    });
    
}

function modosit(){
   
    var id = $(this).attr("id");
   console.log("módosít"+id);
    
    $.ajax({
        type: "GET",
        url: "modosit.php?id="+id,
        success: function (){
            beolvas();
           
        },
        error: function () {
            alert("Hiba az adatok módosításakor!");
        }
    });
    
}
function rendez(){
    
    todo.sort(function(a,b){
        return Number(b.todo< a.todo)-0.5;
        
    });
   
}
