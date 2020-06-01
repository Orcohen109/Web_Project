function validateForm() {
        
    var nameValidation = document.forms["applyForm"]["first_name"].value;
    var lastNameValidation = document.forms["applyForm"]["last_name"].value;
    var emailValidation = document.forms["applyForm"]["email"].value;
    var aboutValidation = document.forms["applyForm"]["about"].value;

    if (  nameValidation == "" ||lastNameValidation == "" ||emailValidation == ""||aboutValidation == "") {
        alert("אנא מלא את כל השדות בטופס");
        return false;
    }
    
}

    
    

    





