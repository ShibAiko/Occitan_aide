const register_link = document.querySelector(".register_link");
const login_link = document.querySelector(".login_link");
const login_form = document.querySelector(".login_form");
const register_form = document.querySelector(".register_form");

    register_link.addEventListener("click", () => {
        register_form.classList.toggle("hidden");
        login_form.classList.toggle("hidden");
    });
    login_link.addEventListener("click", () => {
        register_form.classList.toggle("hidden");
        login_form.classList.toggle("hidden");
    });
