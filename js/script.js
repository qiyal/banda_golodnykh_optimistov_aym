const btnLogIn = document.querySelector('#btn-login');
const btnRegister = document.querySelector('#btn-register');

btnLogIn.addEventListener('click', function () {
    console.log("Modal");
    const modal = `
        <div class="modal">
            <div class="modal-body">
                <button class="btn-modal-close">X</button>
                <h1 class="title-login">Log In</h1>
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

    document.querySelector('body').insertAdjacentHTML('beforeEnd', modal);

    const modalCloseBtn = document.querySelector('.btn-modal-close');
    const modalSubmitBtn = document.querySelector('.btn-form-login');

    function closeModal() {
        console.log("close");
        document.querySelector('body').removeChild(document.querySelector('.modal'));
    }

    function submitModal(event) {
        event.preventDefault();
        localStorage.setItem('modal', 1);
    }

    modalCloseBtn.addEventListener('click', closeModal);
    modalSubmitBtn.addEventListener('click', submitModal);
});
