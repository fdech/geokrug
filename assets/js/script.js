const loginLink = document.querySelector(".login__link");
const loginPopup = document.querySelector(".modal__login");
const loginClose = loginPopup.querySelector(".modal__close");

loginLink.addEventListener("click", function (evt) {
    evt.preventDefault()
    loginPopup.classList.add("modal__show")
});

loginClose.addEventListener('click', function (evt) {
    evt.preventDefault()
    loginPopup.classList.remove('modal__show')
})
