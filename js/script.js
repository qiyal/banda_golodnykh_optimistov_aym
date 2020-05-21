"use strict"

// Write Yerbolat Pazyl Start
const formSaveNewUser = document.querySelector('#regFormData');
// FUNCTIONS

function checkFormReg(event) {
    event.preventDefault(this);
    const inputs = this.querySelectorAll('input');
    const smalls = this.querySelectorAll('small');
    let status = true;

    for (let i = 0; i < 3; i++) {
        const input = inputs[i].value;

        if(!input) {
            console.log("YES")
            smalls[i].style.display = 'block';
            status = false;
        } else {
            console.log("NO");
            smalls[i].style.display = 'none';
        }
    }

    if (inputs[4].value || inputs[3].value) {
        if (inputs[4].value === inputs[3].value && inputs[4] && inputs[3]){
            smalls[3].style.display = 'none';
        } else {
            smalls[3].innerText = 'Password mismatch!';
            smalls[3].style.display = 'block';
            status = false;
        }
    } else {
        smalls[3].innerText = 'Input passwords!';
        smalls[3].style.display = 'block';
        status = false;
    }

    if(status) {
        const data = new URLSearchParams();

        for(const p of new FormData(formSaveNewUser)) {
            data.append(p[0], p[1]);
        }

        fetch('action/registration.php', {
            method: 'POST',
            body: data
        }).then(
            response => response.text()
        ).then( response => {
                if (response === '-1') {
                    smalls[3].innerText = 'Input another login!';
                    smalls[3].style.display = 'block';
                } else {
                    console.log(response);
                    smalls[3].innerText = '';
                    smalls[3].style.display = 'none';
                    document.querySelector('.window').style.animation='modal-reg-close .6s ease-in-out';
                    setTimeout(function () {
                        document.querySelector('.window-box').style.display='none';
                        document.querySelector('.window').style.animation='';
                    }, 600);
                    setTimeout(function () {
                        location.reload();
                    }, 600);
                }
            }
        ).catch(error => console.log(error));
    }
}
// CLOSE FUNCTIONS

// ADD EVENTS
formSaveNewUser.addEventListener('submit', checkFormReg);

function init() {
    if(document.querySelector('#btn-login')) {
        // VARIABLES
        const btnLogIn = document.querySelector('#btn-login');

        // Write Yerbolat Pazyl End
        // Write Munira Kasymova Start
        const btnRegister = document.querySelector('#btn-register');
        const btnCloseModalReg = document.querySelector('.close');

        btnRegister.addEventListener('click', function () {
            document.querySelector('.window-box').style.display='block';
            document.querySelector('body').style.overflow = 'hidden';
        });

        function closeModalReg() {
            document.querySelector('.window').style.animation='modal-reg-close .6s ease-in-out';
            setTimeout(func => {
                document.querySelector('.window-box').style.display='none';
                document.querySelector('.window').style.animation='';
            }, 600);
        }

        btnCloseModalReg.addEventListener('click', closeModalReg);
        // Write Munira Kasymova End

        // Write Yerbolat Pazyl Start
        btnLogIn.addEventListener('click', function () {
            const modal = `
        <div class="modal">
            <div class="modal-body">
                <div class="modal-head">
                    <h1 class="title-login">Log In</h1>
                    <button class="btn-modal-close">X</button>
                </div>
                <div class="form-auth">
                    <form action="../action/login.php" method="POST" class="form-login-modal">
                        <input class="modal-input" type="text" name="login" placeholder="Email" id="input-modal-login">
                        <input class="modal-input" type="password" name="password" placeholder="Password" id="input-modal-password">
                        <button class="btn-form-login" type="submit">Log in</button>
                        <small id="valid-one"></small>
                    </form>
                </div>
            </div>
        </div>
    `;

            document.querySelector('body').style.overflow = 'hidden';
            document.querySelector('body').insertAdjacentHTML('beforeEnd', modal);

            const modalCloseBtn = document.querySelector('.btn-modal-close');
            const formLogin = document.querySelector('.form-login-modal');
            // const btnFormSent = document.querySelector('.btn-form-login');

            function closeModal() {
                console.log("close");
                formLogin.removeEventListener('submit', sendForm);
                document.querySelector('.modal-body').style.animation = 'modal-close .6s ease-in-out';
                setTimeout(function () {
                    document.querySelector('body').removeChild(document.querySelector('.modal'));
                    document.querySelector('body').style.overflow = '';
                }, 600);
            }

            function sendForm(event) {
                event.preventDefault();

                const data = new URLSearchParams();

                for(const p of new FormData(formLogin)) {
                    data.append(p[0], p[1]);
                }

                fetch('action/login.php', {
                    method: 'POST',
                    body: data
                }).then(
                    response => response.text()
                ).then( response => {
                        if (response === '-1') {
                            document.querySelector('#valid-one').innerHTML = 'The username or password you entered is incorrect. Try again.';
                        } else {
                            document.querySelector('#valid-one').innerHTML = '';
                            closeModal();
                            setTimeout(function () {
                                location.reload();
                            }, 600)
                        }
                    }
                ).catch(error => console.log(error));

            }

            modalCloseBtn.addEventListener('click', closeModal);

            formLogin.addEventListener('submit', sendForm);
        });
        // Write Yerbolat Pazyl End
    } else {
        // Write Ayaulym Sibaeva Start
        const btnLogout = document.querySelector('#btn-logout-exit');
        const loginText = document.querySelector('.login-name');

        btnLogout.addEventListener('click', function (event) {
            fetch('action/logout.php').then(
                response => response.text()
            ).then( response => {
                   console.log(response);
                   location.reload();
            }).catch(error => console.log(error));
        });
        // Write Ayaulym Sibaeva End
    }
}

init();
