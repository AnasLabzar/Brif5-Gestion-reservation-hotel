
function populate(){
    // console.log("im in");
    var affichage = document.getElementById("affichage") ;
    var s1 = document.getElementById("inputGroupSelect01").value;
    // console.log(s1);
    var cls = document.getElementsByClassName("vue");
    for (i = 0; i<cls.length; i++) {
        cls[i].style.display="none";
    }
    if (s1 == "Simple") {
        affichage.innerHTML = "<select class='form-select vue' id='type_vue' name='selectvue' style='margin-top: 30px;'><option>Choisie Type de vue</option> <option value='inter'  id ='opt1'>Vue Interieure</option> <option value='exter' id='opt2'>Vue Extérieur</option></select>";
        

    }
    else if (s1 == "Double"){
        affichage.innerHTML = "<select class='form-select vue' id='lit'  name='selectlit' style='margin-top: 30px;' onchange='litt(this)'><option>Choisie Type de lit</option> <option value='lit1' >1 Lit</option> <option value='lit2'>2 lit</option></select><div id='affichage2'></div>";
    }

}
function litt(x){
    var affichage2 = document.getElementById("affichage2") ;
    var s2 = x.value;
    console.log(s2);
    
    if (s2 == "lit1") {
        affichage2.innerHTML = "<select class='form-select vue' name='selectvue' id='type_vue' style='margin-top: 30px;'><option >Choisie Type de vue</option> <option value='inter'  id ='opt1'>Vue Interieure</option> <option value='exter' id='opt2'>Vue Extérieur</option></select>";
    }else if (s2 == "lit2") {
        affichage2.innerHTML= "<select  name='selectvue' id='type_vue'   ><option value='inter'>Vue Intérieur</option></select>";
    }
}
