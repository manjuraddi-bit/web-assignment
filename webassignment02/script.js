$(document).ready(function(){

    $("#regForm").submit(function(){
        let phone = $("#phone").val();
        
        if(!/^\d{10}$/.test(phone)){
            alert("Phone number must be 10 digits!");
            return false;
        }

        alert("Form submitted successfully!");
        return true;
    });

});
