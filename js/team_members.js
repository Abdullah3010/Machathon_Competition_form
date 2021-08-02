////////////////////////SECTION 1///////////////////////////
const errorName1 = document.getElementById("error-name1");
const errorPhone1 = document.getElementById("error-phone1");
const errorEmail1 = document.getElementById("error-email1");
const errorDepartment1 = document.getElementById("error-department1");
const errorUniversity1 = document.getElementById("error-university1");
const errorFaculty1 = document.getElementById("error-faculty1");
const errorGrad1 = document.getElementById("error-grad1");
const errorCV1 = document.getElementById("error-cv1");
////////////////////////SECTION 2///////////////////////////
const errorName2 = document.getElementById("error-name2");
const errorPhone2 = document.getElementById("error-phone2");
const errorEmail2 = document.getElementById("error-email2");
const errorDepartment2 = document.getElementById("error-department2");
const errorUniversity2 = document.getElementById("error-university2");
const errorFaculty2 = document.getElementById("error-faculty2");
const errorGrad2 = document.getElementById("error-grad2");
const check1 = document.getElementById("check1");
const errorCV2 = document.getElementById("error-cv2");
////////////////////////SECTION ${i}///////////////////////////
const errorName3 = document.getElementById("error-name3");
const errorPhone3 = document.getElementById("error-phone3");
const errorEmail3 = document.getElementById("error-email3");
const errorDepartment3 = document.getElementById("error-department3");
const errorUniversity3 = document.getElementById("error-university3");
const errorFaculty3 = document.getElementById("error-faculty3");
const errorGrad3 = document.getElementById("error-grad3");
const check2 = document.getElementById("check2");
const errorCV3 = document.getElementById("error-cv3");
////////////////////////////////////////////////////////////////////

const buttonTag = document.getElementById("submit-button-b");
const aTag = document.getElementById("submit-button-a");
function submit() {
    //event.preventDefault();
    buttonTag.click();
}



$(function(){

////////////////////////SECTION 1///////////////////////////

	//check the validation of name.
	$("#name1").blur(function(){
		checkOnBlur($(this),errorName1);
	});
	$("#name1").keyup(function(){
		checkOnKeyUp($(this),errorName1);
	});

	//check the validation of email.
	$("#email1").blur(function(){
		checkEmail($(this),errorEmail1);
    });



	//check the validation of phone.
	$("#phone1").blur(function(){
		checkPhoneOnBlur($(this),errorPhone1);
    });
    $("#phone1").keyup(function(){
    	checkPhoneOnKeyUp($(this),errorPhone1);
    });


    //check the validation of university.
    $("#uni1").change(function(){
        if($("#uni1 option:selected").val() === "Other"){
            $("#otherUni1").attr("style","");
        }
        else {
            $("#otherUni1").attr("style","display:none;");
        } 

    });
    //check the validation of other university.
    $("#otherUni1").blur(function(){
        checkOnBlur($(this),errorUniversity1);
    });

    $("#otherUni1").keyup(function(){
        checkOnKeyUp($(this),errorUniversity1);
    });

	//check the validation of faculty
    $("#fac1").change(function(){
        if($("#fac1 option:selected").val() === "Other"){
            $("#otherFac1").attr("style","");
        }
        else {
            $("#otherFac1").attr("style","display:none;");
        }
    });

	//check the validation of other faculty.
    $("#otherFac1").blur(function(){
    	checkOnBlur($(this),errorFaculty1);
    });

    $("#otherFac1").keyup(function(){
        checkOnKeyUp($(this),errorFaculty1);
    });


    //check the validation of department.
    $("#depart1").change(function(){
        if($("#depart1 option:selected").val() === "Other1"){
            $("#otherDepart1").attr("style","");
        } else {
            $("#otherDepart1").attr("style","display:none;");
            
        }
        
    });
    //check the validation of other department.
    $("#otherDepart1").blur(function(){
    	checkOnBlur($(this),errorDepartment1);
    });

    $("#otherDepart1").keyup(function(){
        checkOnKeyUp($(this),errorDepartment1);
    });

	//check the validation of all inputs on click next button.
    $("#next2").click(function(){
        
        checkOnBlur($("#name1"),errorName1);
        checkPhoneOnBlur($("#phone1"),errorPhone1);
        checkEmail($("#email1"),errorEmail1);
        checkSelect($("#fac1 option:selected"),errorFaculty1,$("#otherFac1"));
        checkSelect($("#uni1 option:selected"),errorUniversity1,$("#otherUni1"));
        checkSelect($("#depart1 option:selected"),errorDepartment1,$("#otherDepart1"));
        check($("#grad1 option:selected"),errorGrad1);
        checkCV($("#cv1"),errorCV1);

        if (checkOnBlur($("#name1"),errorName1) &&
            checkPhoneOnBlur($("#phone1"),errorPhone1) &&
            checkEmail($("#email1"),errorEmail1) &&
            checkSelect($("#fac1 option:selected"),errorFaculty1,$("#otherFac1"))&&
            checkSelect($("#uni1 option:selected"),errorUniversity1,$("#otherUni1")) &&
            checkSelect($("#depart1 option:selected"),errorDepartment1,$("#otherDepart1")) &&
            check($("#grad1 option:selected"),errorGrad1) &&
            checkCV($("#cv1"),errorCV1)) {
            if (check1.checked){
                submit();
            } else {
                $("#section2").slideUp(500,function(){
                    $("#section3").slideDown(500);
                });
            }
        } else {
            alert("Please fill in all required fields!");
        }
    });


////////////////////////SECTION 2///////////////////////////


	//check the validation of name.
	$("#name2").blur(function(){
		checkOnBlur($(this),errorName2);
	});
	$("#name2").keyup(function(){
		checkOnKeyUp($(this),errorName2);
	});

	//check the validation of email.
	$("#email2").blur(function(){
		checkEmail($(this),errorEmail2);
    });



	//check the validation of phone.
	$("#phone2").blur(function(){
        checkPhoneOnBlur($(this),errorPhone2);
    });
    $("#phone2").keyup(function(){
        checkPhoneOnKeyUp($(this),errorPhone2);
    });


    //check the validation of university.
    $("#uni2").change(function(){
        if($("#uni2 option:selected").val() === "Other"){
            $("#otherUni2").attr("style","");
        }
        else {
            $("#otherUni2").attr("style","display:none;");
        } 

    });
    //check the validation of other university.
    $("#otherUni2").blur(function(){
    	checkOnBlur($(this),errorUniversity2);
    });

    $("#otherUni2").keyup(function(){
    	checkOnKeyUp($(this),errorUniversity2);
    });

	//check the validation of faculty
    $("#fac2").change(function(){
        if($("#fac2 option:selected").val() === "Other"){
            $("#otherFac2").attr("style","");
        }
        else {
            $("#otherFac2").attr("style","display:none;");
        }
    });

    //check the validation of other faculty.   
    $("#otherFac2").blur(function(){
    	checkOnBlur($(this),errorFaculty2);
    });

    $("#otherFac2").keyup(function(){
    	checkOnKeyUp($(this),errorFaculty2);
    });


    //check the validation of department.
    $("#depart2").change(function(){
        if($("#depart2 option:selected").val() === "Other2"){
            $("#otherDepart2").attr("style","");
        } else {
            $("#otherDepart2").attr("style","display:none;");
            
        }
        
    });
    //check the validation of other department.
    $("#otherDepart2").blur(function(){
    	checkOnBlur($(this),errorDepartment2);
    });

    $("#otherDepart2").keyup(function(){
        checkOnKeyUp($(this),errorDepartment2);
    });

	//check the validation of all inputs on click next button.
    $("#next3").click(function(){
        
        checkOnBlur($("#name2"),errorName2);
        checkPhoneOnBlur($("#phone2"),errorPhone2);
        checkEmail($("#email2"),errorEmail2);
        checkSelect($("#fac2 option:selected"),errorFaculty2,$("#otherFac2"));
        checkSelect($("#uni2 option:selected"),errorUniversity2,$("#otherUni2"));
        checkSelect($("#depart2 option:selected"),errorDepartment2,$("#otherDepart2"));
        check($("#grad2 option:selected"),errorGrad2);
        checkCV($("#cv2"),errorCV2);
        if (checkOnBlur($("#name2"),errorName2) && checkPhoneOnBlur($("#phone2"),errorPhone2) 
            && checkEmail($("#email2"),errorEmail2) && checkSelect($("#fac2 option:selected")
                ,errorUniversity2,$("#otherUni2")) && checkSelect($("#uni2 option:selected"),
                errorFaculty2,$("#otherFac2")) && checkSelect($("#depart2 option:selected"),
                errorDepartment2,$("#otherDepart2")) && check($("#grad2 option:selected"),errorGrad2)
                 && checkCV($("#cv2"),errorCV2)) {
            
            if (check2.checked){
                submit();
            } else {
                $("#section3").slideUp(500,function(){
                    $("#section4").slideDown(500);
                });
            }
        } else {
            alert("Please fill in all required fields!");
        }
    });

    $("#prev2").click(function(){
    	$("#section3").slideUp(500,function(){
        		$("#section2").slideDown(500);
        	});
    });

////////////////////////SECTION 3///////////////////////////


	//check the validation of name.
	$("#name3").blur(function(){
		checkOnBlur($(this),errorName3);
	});
	$("#name3").keyup(function(){
		checkOnKeyUp($(this),errorName3); 
	});

	//check the validation of email.
	$("#email3").blur(function(){
		checkEmail($(this),errorEmail3);
    });



	//check the validation of phone.
	$("#phone3").blur(function(){
        checkPhoneOnBlur($(this),errorPhone3);
    });
    $("#phone3").keyup(function(){
    	checkPhoneOnKeyUp($(this),errorPhone3);
    });


    //check the validation of university.
    $("#uni3").change(function(){
        if($("#uni3 option:selected").val() === "Other"){
            $("#otherUni3").attr("style","");
        }
        else {
            $("#otherUni3").attr("style","display:none;");
        } 

    });
    //check the validation of other university.
    $("#otherUni3").blur(function(){
    	checkOnBlur($(this),errorUniversity3);
    });

    $("#otherUni3").keyup(function(){
        checkOnKeyUp($(this),errorUniversity3);
    });

	//check the validation of faculty
    $("#fac3").change(function(){
        if($("#fac3 option:selected").val() === "Other"){
            $("#otherFac3").attr("style","");
        }
        else {
            $("#otherFac3").attr("style","display:none;");
        }
    });

    //check the validation of other university.    
    $("#otherFac3").blur(function(){
        checkOnBlur($(this),errorFaculty3);
    });

    $("#otherFac3").keyup(function(){
        checkOnBlur($(this),errorFaculty3);
    });


    //check the validation of department.
    $("#depart3").change(function(){
        if($("#depart3 option:selected").val() === "Other3"){
            $("#otherDepart3").attr("style","");
        } else {
            $("#otherDepart3").attr("style","display:none;");
            
        }
        
    });

    $("#otherDepart3").blur(function(){
    	checkOnBlur($(this),errorDepartment3);
    });

    $("#otherDepart3").keyup(function(){
        checkOnKeyUp($(this),errorDepartment3);
    });

	//check the validation of all inputs on click next button.
    $("#submit-button-a").click(function(){
        
        checkOnBlur($("#name3"),errorName3);
        checkPhoneOnBlur($("#phone3"),errorPhone3);
        checkEmail($("#email3"),errorEmail3);
        checkSelect($("#fac3 option:selected"),errorFaculty3,$("#otherFac3"));
        checkSelect($("#uni3 option:selected"),errorUniversity3,$("#otherUni3"));
        checkSelect($("#depart3 option:selected"),errorDepartment3,$("#otherDepart3"));
        check($("#grad3 option:selected"),errorGrad3);
        checkCV($("#cv3"),errorCV3);
        if (checkOnBlur($("#name3"),errorName3) &&
            checkPhoneOnBlur($("#phone3"),errorPhone3) &&
            checkEmail($("#email3"),errorEmail3) &&
            checkSelect($("#fac3 option:selected"),errorFaculty3,$("#otherFac3")) &&
            checkSelect($("#uni3 option:selected"),errorUniversity3,$("#otherUni3")) &&
            checkSelect($("#depart3 option:selected"),errorDepartment3,$("#otherDepart3")) &&
            check($("#grad3 option:selected"),errorGrad3) 
            && checkCV($("#cv3"),errorCV3)) {
        		submit();
        } else {
            alert("Please fill in all required fields!");
        }
    });

    $("#prev3").click(function(){
    	$("#section4").slideUp(500,function(){
        		$("#section3").slideDown(500);
        	});
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
    else if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(element.val())){
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
    } else if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(element.val())) {
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
	if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(element.val())) {
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
        } else if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(other.val())) {
            errorElement.textContent="";  
            other.removeClass("invalid");
            return true; 

        } else {
            errorElement.textContent="The name should include only letters";
            other.addClass("invalid");
            return false;
        }
	} else if (selected.val() === "Other1" || selected.val() === "Other2" || selected.val() === "Other3") {
		if(other.val().length == 0) {
            errorElement.textContent = "This field is required";
            other.addClass("invalid");
            return false;
        } else if (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z ]*$/.test(other.val())) {
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


function disabledAll(i){
	$(`#next${i+1}`).html(`<span></span><span></span><span></span><span></span>Submit`);
}

function abledAll(i){
	$(`#next${i+1}`).html("<span></span><span></span><span></span><span></span>Next");
}

function goBack() {
    window.history.back();
  }