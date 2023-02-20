const modalContainerLogin = document.querySelector('.js-modal-login-container');
const logIn = document.querySelector('.js-login');
const itemModalLogIn = document.querySelector('.js-form-modal-login');
// const modalSignUp = document.querySelector('.js-modalsu');
const eyeIcon = document.querySelector('.ti-eye');


function showLogInForm() {
    modalContainerLogin.classList.add('open');
}

function hideLogInForm() {
    modalContainerLogin.classList.remove('open');
}

logIn.addEventListener('click', showLogInForm)

modalContainerLogin.addEventListener('click', hideLogInForm);
itemModalLogIn.addEventListener('click', function(event){
    event.stopPropagation();
});





