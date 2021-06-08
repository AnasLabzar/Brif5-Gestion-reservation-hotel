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
  
    if (date1 < date2) {
      day = (date2 - date1) / (1000 * 60 * 60 *24);
    } else{
      alert("Error! : please I made a mistake in booking an incorrect date");
    }
}

function type_ch(){

    var choixch = document.getElementById("inputGroupSelect01").value;
    var choixvu = document.getElementById("type_vue").value;
    var choixvulit = document.getElementById("type_vue_lit").value;
    var choixlit = document.getElementById("lit").value;
    var prix;

    if(choixch == "Simple"){

        if(choixvu == "exter"){
            prix =40 + ((40*20) /100); // 20% vue exterieur
            
        }else if(choixvu == "inter"){
            prix = 40;
        }
    }else if(choixch == "Double"){
       if(choixlit == "lit1"){
            if(choixvulit == "exter"){
               prix=60 + ((60*20)  /100); // 20% vue exterieur
            }else if(choixvulit == "inter"){
                prix = 60;
            }
        }else if(choixlit == "lit2"){
            prix = 66;
        }

    }
    alert(prix + " $");

}