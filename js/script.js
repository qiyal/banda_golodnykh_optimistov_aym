"use strict"

const btnLogIn = document.querySelector('#btn-login');
const btnRegister = document.querySelector('#btn-register');

const parallax = document.querySelector('.paralax');
const paralaxBg = document.querySelector('.paralax-box');


btnLogIn.addEventListener('click', function () {
    console.log("Modal");
    const modal = `
        <div class="modal">
            <div class="modal-body">
                <div class="modal-head">
                    <h1 class="title-login">Log In</h1>
                    <button class="btn-modal-close">X</button>
                </div>
                <div class="form-auth">
                    <form action="">
                        <input class="modal-input" type="text" name="login" placeholder="Email">
                        <input class="modal-input" type="text" name="password" placeholder="Password">
                        <button class="btn-form-login" type="submit">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    `;

    document.querySelector('body').style.overflow = 'hidden';
    document.querySelector('body').insertAdjacentHTML('beforeEnd', modal);

    const modalCloseBtn = document.querySelector('.btn-modal-close');
    const modalSubmitBtn = document.querySelector('.btn-form-login');

    function closeModal() {
        console.log("close");
        document.querySelector('.modal-body').style.animation = 'modal-close .6s ease-in-out';
        setTimeout(function () {
            document.querySelector('body').removeChild(document.querySelector('.modal'));
            document.querySelector('body').style.overflow = '';
        }, 600);
    }

    function submitModal(event) {
        event.preventDefault();
    }

    modalCloseBtn.addEventListener('click', closeModal);
    modalSubmitBtn.addEventListener('click', submitModal);
});

function parallaxEffect(event) {
    // const origionPosition = '-340px ';
    // const position = origionPosition + ( -337 + (event.clientY / 5)) + 'px';
    // console.log(event.clientY);
    // console.log(position);
    // paralaxBg.style.backgroundPosition = position;
    
    
    console.log(pageYOffset);
 

    if(pageYOffset > 1353 && pageYOffset < 3044) {
        const position = '-340px ' + (-650 + (((pageYOffset)  / 5))) + 'px';
        paralaxBg.style.backgroundPosition = position;
        console.log(position);
    }
}

document.addEventListener('scroll', parallaxEffect);
