var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var response = JSON.parse(xhttp.responseText);

        document.getElementById('f_name').value = response.employees[1].firstName;
        document.getElementById('l_name').value = response.employees[1].lastName;
        document.getElementById('bday').value = response.employees[1].birthday;
        document.getElementById('female').checked = true;
        document.getElementById('known_language').innerHTML = '<li>' + response.employees[1].knownLanguage[0] + '</li>' + '<li>' + response.employees[1].knownLanguage[1] + '</li>';
    }
};
xhttp.open("GET", "data.json", true);
xhttp.send();