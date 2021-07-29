// function time(){
//     var date_d = document.getElementById("date_d").value;
//     var date_f = document.getElementById("date_f").value;
//     var day = 0;

//     day = (date_f - date_d) + " Day";
//     alert(day);
// }
var day;

function time() {
    var date1 = new Date(document.getElementById("date_d").value);
    var date2 = new Date(document.getElementById("date_f").value);
    console.log(date1, date2);
    if (date1 < date2) {
        day = (date2 - date1) / (1000 * 60 * 60 * 24);

    } else {
        alert("Error! : please I made a mistake in booking an incorrect date");

    }
    localStorage.setItem('day',day);
}


function type_ch() {
    var choixch = document.getElementById("inputGroupSelect01").value;
    var choixvu = document.getElementById("type_vue").value;
    // prix;
    var prix;


    if (choixch == "Simple") {
        if (choixvu == "exter") {
            prix = 40 + ((40 * 20) / 100); // 20% vue exterieur

        } else if (choixvu == "inter") {
            prix = 40;
        }
    }


    ///////////////double
    else if (choixch == "Double") {
        var choixlit = document.getElementById("lit").value;
        if (choixlit == "lit1") {
            if (choixvu == "exter") {
                prix = 60 + ((60 * 20) / 100); // 20% vue exterieur
            } else if (choixvu == "inter") {
                prix = 60;
            }
        } else if (choixlit == "lit2") {
            prix = 60;
        }
    }
     
    localStorage.setItem('prix',prix);
    localStorage.setItem('choixch', choixch);
    localStorage.setItem('choixvu', choixvu);
}


function type_pens(){
    var prix = localStorage.getItem('prix');
    var day = localStorage.getItem('day');

    var choixpens = document.getElementById("inputGroupSelect011").value;
    var total;
    var prix_2;

    if (choixpens == "demi"){
        var choixdemi = document.getElementById("chdemi").value;
        
        if(choixdemi == "dej"){
            prix_2 = parseInt(prix) + 10;

            total = prix_2 * day;

        }else if(choixdemi == "din"){
            prix_2 = parseInt(prix) + 10;

            total = prix_2 * day;
        }

        // console.log(choixdemi);

    }else if (choixpens == "sans"){

        prix_2 = prix;
        total = prix_2 * day;

    }else if (choixpens == "complete"){

        prix_2 = parseInt(prix) + 20;
        total = prix_2 * day;

        localStorage.setItem('total',total);
        localStorage.setItem('choixpens',choixpens);
        document.getElementById("totale").innerHTML = total + " $";

    }return 0;

}
