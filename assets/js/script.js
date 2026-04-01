// FORM VALIDATION
function validateForm(formType) {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("All fields are required!");
        return false;
    }

    if (!email.includes("@")) {
        alert("Enter valid email!");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters!");
        return false;
    }

    if (formType === "register") {
        let confirmPassword = document.getElementById("confirm_password").value;

        if (password !== confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }
    }

    return true;
}


// SHOW / HIDE PASSWORD
function togglePassword(id) {
    let input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}


// SIMPLE ALERT MESSAGE (OPTIONAL)
function showMessage(msg, type = "success") {
    let div = document.createElement("div");
    div.className = "alert";
    div.innerText = msg;

    document.body.prepend(div);

    setTimeout(() => {
        div.remove();
    }, 3000);
}