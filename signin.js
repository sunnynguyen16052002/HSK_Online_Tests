    const modalContainer = document.querySelector('.js-modal-signin-container');
    const signUp = document.querySelector('.js-signup');
    const itemModalSignUp = document.querySelector('.js-form-modal-signin')
    // const modalSignUp = document.querySelector('.js-modalsu');

    function showSignUpForm() {
        modalContainer.classList.add('open');
    }

    function hideSignUpForm() {
        modalContainer.classList.remove('open');
    }

    signUp.addEventListener('click', showSignUpForm)

    modalContainer.addEventListener('click', hideSignUpForm);
    itemModalSignUp.addEventListener('click', function(event){
        event.stopPropagation();
    });

