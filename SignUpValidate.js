function check() {
    var n = document.getElementByName("name").value;
    var enr = document.getElementByName("enr").value;
    var pw = document.getElementByName("pw").value;
    var cpw = document.getElementByName("cpw").value;
    var eid = document.getElementByName("emailid").value;
    document.getElementById("pass").innerHTML = n;
    if ((pw != cpw)) {
        document.getElementById("display_message").innerHTML = "Passwords don't match";
    }
    else {
        document.getElementById("display_message").innerHTML = "Passwords matched";
    }
}