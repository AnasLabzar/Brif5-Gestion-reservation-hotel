
function populote(){
    var affichage = document.getElementById("affichage") ;
    var s1 = document.getElementById("inputGroupSelect01").value;
    console.log(s1);
    var cls = document.getElementsByClassName("vue");
    for (i = 0; i<cls.length; i++) {
        cls[i].style.display="none";
    }
    if (s1 == "demi") {
        affichage.innerHTML = "<select class='form-select vue' name='selectdej' style='margin-top: 30px;'><option selcted>Choisie Type de Demi</option> <option value='dej'  id ='opt1'>Petit dej/dej</option> <option value='din' id='opt2'>Petit dej/din</option></select>";

    }
    else{
        
    }

}
// function lit(x){
//     var affichage2 = document.getElementById("affichage2") ;
//     var s2 = x.value;
//     console.log(s2);
    
//     if (s2 == "lit1") {
//         affichage2.innerHTML = "<select class='form-select vue' style='margin-top: 30px;'><option selcted>Choisie Type de vue</option> <option value='inter'  id ='opt1'>Vue Interieure</option> <option value='exter' id='opt2'>Vue Extérieur</option></select>";
//     }else if (s2 == "lit2") {
//         affichage2.innerHTML= "<select  ><option disabled selected>Vue Intérieur</option></select>";
//     }
// }
