//////////////////////////////////////////////////////////////////////
const errorName = document.getElementById("error-name");
const errorPhone = document.getElementById("error-phone");
const errorEmail = document.getElementById("error-email");
const errorDepartment = document.getElementById("error-department");
const errorUniversity = document.getElementById("error-university");
const errorFaculty = document.getElementById("error-faculty");
const errorGrad = document.getElementById("error-grad");
const errorNumberOfTeam = document.getElementById("error-numberOfTeam");
const errorCV = document.getElementById("error-cv");
///////////////////////////////////////////////////////////////////////
const buttonTag = document.getElementById("submit-button-b");
const aTag = document.getElementById("submit-button-a");
function submit(event) {
    buttonTag.click();
}
//////////////////////////////////////////////////////////////////////

$(function() {


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


//email
	$("#email").blur(function(){
        checkEmail($(this),errorEmail);
    });


//university
    $("#university").change(function(){
        uni = true;
        if($("#university option:selected").val() === "Other"){
            $("#otherUniversity").attr("style","");
        }
        else {
            $("#otherUniversity").attr("style","display:none;");
        } 

    });

    $("#otherUniversity").blur(function(){
        checkOnBlur($(this),errorUniversity);
    });

    $("#otherUniversity").keyup(function(){
        checkOnKeyUp($(this),errorUniversity);
    });

    //faculty
        $("#faculty").change(function(){
            fac = true;
            if($("#faculty option:selected").val() === "Other"){
                $("#otherFaculty").attr("style","");
            }
            else {
                $("#otherFaculty").attr("style","display:none;");
            }
        });

    //faculty
        $("#faculty").change(function(){
            fac = true;
            if($("#faculty option:selected").val() === "Other"){
                $("#otherFaculty").attr("style","");
            }
            else {
                $("#otherFaculty").attr("style","display:none;");
            }
        });

    
    $("#otherFaculty").blur(function(){
        checkOnBlur($(this),errorFaculty);
    });

    $("#otherFaculty").keyup(function(){
        checkOnKeyUp($(this),errorFaculty);
    });



    $("#department").change(function(){
        depart = true;
        if($("#department option:selected").val() === "Other"){
            $("#other-department").attr("style","");
        } else {
            $("#other-department").attr("style","display:none;");
            
        }
        
    });

    $("#other-department").blur(function(){
        checkOnBlur($(this),errorDepartment);
    });

    $("#other-department").keyup(function(){
        checkOnKeyUp($(this),errorDepartment);
    });

    $("#submit-button-a").click(function(){
        checkOnBlur($("#name"),errorName);
        checkPhoneOnBlur($("#phone"),errorPhone);
        checkEmail($("#email"),errorEmail);
        checkSelect($("#faculty option:selected"),errorFaculty,$("#otherFaculty"));
        checkSelect($("#university option:selected"),errorUniversity,$("#otherUniversity"));
        checkSelect($("#department option:selected"),errorDepartment,$("#other-department"));
        check($("#grad option:selected"),errorGrad);
        check($("#numberOfTeam option:selected"),errorNumberOfTeam);
        checkCV($("#cv"),errorCV);

        if (checkCV($("#cv"),errorCV) && checkOnBlur($("#name"),errorName) && checkPhoneOnBlur($("#phone"),errorPhone) && checkEmail($("#email"),errorEmail) && checkSelect($("#faculty option:selected"),errorFaculty,$("#otherFaculty"))&& checkSelect($("#university option:selected"),errorUniversity,$("#otherUniversity")) && checkSelect($("#department option:selected"),errorDepartment,$("#other-department")) && check($("#grad option:selected"),errorGrad)&&check($("#numberOfTeam option:selected"),errorNumberOfTeam)) {
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
    } else if(element.val().slice(0,3) === "011" || 
        element.val().slice(0,3) === "012" || element.val().slice(0,3) === "010" ||
        element.val().slice(0,3) === "015") {
        errorElement.textContent="";
        element.removeClass("invalid");
        return true;
    } else {
        errorElement.textContent="Please enter a valid number";
        element.addClass("invalid");
        return false;
    }
      
}
function checkPhoneOnKeyUp(element,errorElement){
    if( element.val().length > 11 || /[^0-9]/.test(element.val())){
        errorElement.textContent="Please enter a valid number";
        element.addClass("invalid");
    } else {
        errorElement.textContent="";
        element.removeClass("invalid");
    }
}

function checkEmail(element,errorElement){
    if(element.val().length == 0) {
        errorElement.textContent="This field is required";
        element.addClass("invalid");
        return false;
    }
    else if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}
        \.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(element.val())){
        errorElement.textContent="";
        element.removeClass("invalid");
        return true;
    }
    else{
        errorElement.textContent="Please enter a valid e-mail";
        element.addClass("invalid");
        return false;
    }
}

function checkOnBlur(element,errorElement){
    if(element.val().length == 0) {
        errorElement.textContent = "This field is required";
        element.addClass("invalid");
        return false;
    } else if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA
        -\u06FFa-zA-Z ]*$/.test(element.val())) {
        errorElement.textContent="";  
        element.removeClass("invalid");
        return true;
    } else {
        errorElement.textContent="The name should include only letters";
        element.addClass("invalid");
        return false;
    }
}

function checkOnKeyUp(element,errorElement){
    if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+
        [\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(element.val())) {
        errorElement.textContent="";  
        element.removeClass("invalid");

    } else {
        errorElement.textContent="The name should include only letters";
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

function checkSelect(selected,errorElement,other){

     if (selected.val() === "Other") {
        if(other.val().length == 0) {
            errorElement.textContent = "This field is required";
            other.addClass("invalid");
            return false;
        } else if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+
            [\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(other.val())) {
            errorElement.textContent="";  
            other.removeClass("invalid");
            return true; 

        } else {
            errorElement.textContent="The name should include only letters";
            other.addClass("invalid");
            return false;
        }
    } 
    else if (!check(selected,errorElement)) {
        errorElement.textContent = "This field is required";
        return false;
    } else {
        errorElement.textContent = "";
        return true;
    }
}

function checkCV(cvSelected,error){
    if(cvSelected.val() == ""){
        error.textContent = "This field is required";
        return false;
    }
    else{
        error.textContent = "";
        return true;
    }
}