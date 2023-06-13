const handlesignup = () => {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const conpassword = document.getElementById('conpassword').value;
    
    if(/^[a-zA-Z0-9_.]{4,}@[a-zA-Z]+(.[a-z]+)+/gm.test(email) === false) {
        document.getElementById('emailerr').innerHTML = "Enter valid email";
        return false;
    }
    else {
        document.getElementById('emailerr').innerHTML = "&nbsp;";
    }

    if(password.length < 8 || /([a-zA-z0-9]+[^a-zA-Z0-9 \t\n]+)+/gm.test(password) === false) {
        document.getElementById('passerr').innerHTML = "Enter valid password";
        return false;
    }
    else {
        document.getElementById('passerr').innerHTML = "&nbsp;";
    }

    if(password != conpassword) {
        document.getElementById('conpasserr').innerHTML = "Password does not match";
        return false;
    }
    else {
        document.getElementById('conpasserr').innerHTML = "&nbsp;"
    }

    return true;
}

const handlesignin = () => {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if(/^[a-zA-Z0-9_.]{4,}@[a-zA-Z]+(.[a-z]+)+/gm.test(email) === false) {
        document.getElementById('emailerr').innerHTML = "Enter valid email";
        return false;
    }
    else {
        document.getElementById('emailerr').innerHTML = "&nbsp;";
    }

    if(password.length < 8 || /([a-zA-z0-9]+[^a-zA-Z0-9 \t\n]+)+/gm.test(password) === false) {
        document.getElementById('passerr').innerHTML = "Enter valid password";
        return false;
    }
    else {
        document.getElementById('passerr').innerHTML = "&nbsp;";
    }
    return true;
}