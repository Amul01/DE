function check() {
    var n = document.getElementById("name").value;
    var enr = document.getElementById("enr").value;
    var pw = document.getElementById("pw").value;
    var cpw = document.getElementById("cpw").value;
    var eid = document.getElementById("emailid").value;

    if ((pw != cpw) || n.length == 0) {
        document.getElementById("display_message").innerHTML = "Passwords don't match";
    }
}