function otherGender1(){
    var check = document.getElementById("gender");
    if(check.value == 'Others'){
        document.getElementById("othersInput").style.visibility = "visible";
        document.getElementById("othersInput").setAttribute("required", "");
    }
    else{
        document.getElementById("othersInput").style.visibility = "hidden";
        document.getElementById("othersInput").removeAttribute("required");
    }
}