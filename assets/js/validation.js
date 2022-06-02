function validate(){
    var name = document.getElementById('name').value;
    if(name == ""){
        name = "Anonymous User";
    }
    alert("Thank you " + name);
    window.location.reload();
}

