function validateform(){
    var name = document.getElementById("name").ariaValueMax;

    if(name == "" || name == null){
        alert("name cannot be empty");
        return false;
    } 
}