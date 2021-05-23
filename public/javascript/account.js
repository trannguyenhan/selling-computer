var Form1 = document.getElementById('form1');
var Form2 = document.getElementById('form2');
var Form3 = document.getElementById('form3');
var Next1 = document.getElementById('next1');
var Next2 = document.getElementById('next2');
var Back1 = document.getElementById('back1');
var Back2 = document.getElementById('back2');
var Progress = document.getElementById('progress');
// form 1
Next1.onclick = function() {
    // get username, password, re-password
    let password = document.getElementById("password").value;
    let check_password = document.getElementById("check_password").value;
    let username = document.getElementById("username").value;

    // check username have length character between 0 and 50
    if (username === "" || username.length > 50) {
        document.getElementById("username").style.border = "1px solid red"; // set border color to red
        return;
    }

    // check password have length character between 0 and 50
    if (password === "" || password.length > 50) {
        document.getElementById("username").style.border = "";
        document.getElementById("password").style.border = "1px solid red";
        return;
    }

    // check re-password same with password
    if (password === check_password) {
        Form1.style.left = "-450px";
        Form2.style.left = "40px";
        Progress.style.width = "240px";

        document.getElementById("username").style.border = "";
        document.getElementById("password").style.border = "";
        document.getElementById("check_password").style.border = "";
    } else {
        document.getElementById("password").style.border = "1px solid red";
        document.getElementById("check_password").style.border = "1px solid red";
    }
}

Back1.onclick = function() {
    Form1.style.left = "40px";
    Form2.style.left = "450px";
    Progress.style.width = "120px";
}

// form 2
Next2.onclick = function() {
    let add_1 = document.getElementById("add_1").value;
    let add_2 = document.getElementById("add_2").value;
    let add_3 = document.getElementById("add_3").value;
    let add = add_1 + " " + add_2 + " " + add_3;
    if (add_1 === "" && add_2 === "" && add_3 === "") { // check input of address
        document.getElementById("add_1").style.border = "1px solid red";
        document.getElementById("add_2").style.border = "1px solid red";
        document.getElementById("add_3").style.border = "1px solid red";
        return;
    }

    let password = document.getElementById("password").value;
    let username = document.getElementById("username").value;
    let address = add;

    document.getElementById("user_name").value = username;
    document.getElementById("your_password").value = password;
    document.getElementById("address").value = address;

    Form2.style.left = "-450px";
    Form3.style.left = "40px";
    Progress.style.width = "360px";

    // return color for input tag if input true
    document.getElementById("add_1").style.border = "";
    document.getElementById("add_2").style.border = "";
    document.getElementById("add_3").style.border = "";
}

Back2.onclick = function() {
    Form2.style.left = "40px";
    Form3.style.left = "450px";
    Progress.style.width = "240px";
}