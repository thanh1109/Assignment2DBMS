function authen(){
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var user = username.value;
    var pass = password.value;

    if(user==""){
        alert("Please enter username!");
    }
    if(pass==""){
        alert("Please enter password!");
    }
    if(user == "thanh1109"){
        if(pass == "123456789"){
            window.location.href = "home.php";
        } else{
            alert("Wrong password!");
        }
    } else {
        alert("Wrong username!");
    }
}