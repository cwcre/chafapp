const pswrdField = document.querySelector(".form .field input[type='password']");
const toggleBtn = document.querySelector(".form .field i");
toggleBtn.onclick = () => {

    if (pswrdField.type == "password") {
        toggleBtn.classList.add("fa-eye-slash");
        toggleBtn.classList.remove("fa-eye");
        pswrdField.type = "text";
    } else {
        toggleBtn.classList.remove("fa-eye-slash");
        toggleBtn.classList.add("fa-eye");
        pswrdField.type = "password";
    }

}