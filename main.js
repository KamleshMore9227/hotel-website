

function validateform() {
    var name = document.myform.name.value;
    var number = document.myform.number.value;
    var pplnumber = document.myform.pplnumber.value;


    if (pplnumber > 100) {
        alert("Number of people cannot be more than 100");
        return false;
    } 
    else if (number.length != 10) {
        alert("Phone number should have 10 digits");
        return false;
    } 
    else {
        return true;
    }

}

