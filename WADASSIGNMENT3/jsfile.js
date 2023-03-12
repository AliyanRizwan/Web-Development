function show() {
    var namecheck = document.getElementById('name');
    if (namecheck.value == "") {
        alert("Name Can't Be Empty");
    }
    var agecheck = document.getElementById('age');
    if (agecheck.value == "") {
        alert("Age Can't Be Empty");
    }
    var emailcheck = document.getElementById('email');
    var check = 1;
    if (emailcheck.value == "") {
        alert("Email Can't Be Empty");
    }
    else {
        var regex = /[A-Z a-z 0-9 _ \-\.]+[@][a-z]+[\.][a-z]{2,3}/;
        var str = emailcheck.value;

        if (regex.test(str)) {
            count = 0;
        } else {
            alert("Enter the correct format");
        }
    }

    if (namecheck.value != "" && agecheck.value != "" && count === 0) {
        var namestore = document.getElementById('name').value;
        var agestore = document.getElementById('age').value;
        var emailstore = document.getElementById('email').value;

        xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function () {

            document.getElementById("table").innerHTML = xmlhttp.responseText;

        }

        xmlhttp.open("GET", "phpfile.php?name=" + namestore + "&age=" + agestore + "&email=" + emailstore, true);
        xmlhttp.send();
        count = 1;
    }
}



