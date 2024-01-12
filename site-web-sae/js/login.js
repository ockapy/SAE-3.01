function eyeOFF(){
    var x = document.getElementById("password"), y=document.getElementById("passwordc");
   
    if (x.type === "password") {
    x.type = "text";
    y.type = "text";
    } else {
    x.type = "password";
    y.type = "password";
    }
}


