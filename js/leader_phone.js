/////////////////////////////////////////////////////////////////////
const errorName = document.getElementById("error-name");
const errorPhone = document.getElementById("error-phone");
///////////////////////////////////////////////////////////////////
const buttonTag = document.getElementById("submit-button-b")
const aTag = document.getElementById("submit-button-a")
function submit() {
  buttonTag.click()
}
////////////////////////////////////////////////////////////////////

$(function(){


	//check the validation of name.
    $("#name").blur(function(){
        checkOnBlur($(this),errorName);
    });
    $("#name").keyup(function(){
        checkOnKeyUp($(this),errorName);
    });

    //check the validation of name.
    $("#phone").blur(function(){
        checkPhoneOnBlur($(this),errorPhone);
    });
    $("#phone").keyup(function(){
        checkPhoneOnKeyUp($(this),errorPhone);
    });

    $("#submit-button-a").click(function(){
    	checkOnBlur($("#name"),errorName);
        checkPhoneOnBlur($("#phone"),errorPhone);
        if (checkOnBlur($("#name"),errorName) && checkPhoneOnBlur($("#phone"),errorPhone)) {
                submit();
        } else {
            alert("Please fill in all required fields!");
        }
    });


});

//////////////////////FUNCTIONS///////////////////////////

function checkPhoneOnBlur(element,errorElement){
    if(element.val().length == 0) {
        errorElement.textContent="This field is required";
        element.addClass("invalid");
        return false;
    } else if(element.val().length < 11 || element.val().length > 11 || /[^0-9]/.test(element.val())){
        errorElement.textContent="Please enter a valid number";
        element.addClass("invalid");
        return false;
    } else if(element.val().slice(0,3) === "011" || element.val().slice(0,3) === "012" || element.val().slice(0,3) === "010" ||element.val().slice(0,3) === "015") {
        errorElement.textContent="";
        element.removeClass("invalid");
        return true;
    } else {
        errorElement.textContent="Please enter a valid number";
        element.addClass("invalid");
        return false;
    }
}

function checkPhoneOnBlur(element,errorElement){
    if(element.val().length == 0) {
        errorElement.textContent="This field is required";
        element.addClass("invalid");
        return false;
    } else if(element.val().slice(0,2) != 01) {
        errorElement.textContent="Please enter a valid number";
        element.addClass("invalid");
        return false;
    } else if( element.val().length > 11 || /[^0-9]/.test(element.val())){
        errorElement.textContent="Please enter a valid number";
        element.addClass("invalid");
        return false;
    } else {
        errorElement.textContent="";
        element.removeClass("invalid");
        return true;
    }
}

function checkOnBlur(element,errorElement){
    if(element.val().length == 0) {
        errorElement.textContent = "This field is required";
        element.addClass("invalid");
        return false;
    } else if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9 ]*$/.test(element.val())) {
        errorElement.textContent="";  
        element.removeClass("invalid");
        return true;
    } else {
        errorElement.textContent="The name should include only letters/numbers";
        element.addClass("invalid");
        return false;
    }
}


function checkOnKeyUp(element,errorElement){
    if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9 ]*$/.test(element.val())) {
        errorElement.textContent="";  
        element.removeClass("invalid");

    } else {
        errorElement.textContent="The name should include only letters/numbers";
        element.addClass("invalid");
    }
}

function check(element,errorElement){
    if (element.val() === ""){
        element.addClass("invalid");
        errorElement.textContent = "This field is required";
        return false;
    }
    else {
        element.removeClass("invalid");
        errorElement.textContent = "";
        return true;
    }
}