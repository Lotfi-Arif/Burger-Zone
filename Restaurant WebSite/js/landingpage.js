// fires off once page loads
document.addEventListener("DOMContentLoaded", bodyAnimation);

function bodyAnimation() {
    const content = document.querySelector(".content");
    console.log(content);
    content.classList.add("contentAnime");
    const body = document.querySelector("body");
    body.classList.add("bodyAnimation");

    setTimeout(fireEffect, 3750);
    setTimeout(showMenuButton, 5000);
    const welcomeMsg = document.querySelector(".welcome-msg");
    setTimeout(function() {
        welcomeMsg.classList.add("animate")
    }, 6300);

    const successAlert = document.querySelector(".success");

    setTimeout(() => {


        console.log(`hidden`)
        successAlert.classList.add("hide-alert")
    }, 6000)

}

function fireEffect() {
    let content = document.querySelector(".effect");
    content.classList.add("fire");
}

function showMenuButton() {
    document.querySelector(".menu-button").classList.add("button-show");
}

const menu = document
    .querySelector(".menu")
    .addEventListener("click", getToMenu);


// routing functionalities

function getToMenu() {
    // next page href
    let next = {
        href: "menu.html",
    };

    localStorage.setItem("next", JSON.stringify(next));

    setTimeout(() => (window.location.href = "loading.html"), 500);
}

const login = document.querySelector(".login");

login.addEventListener("click", getLoginPage);

function getLoginPage() {
    let next = {
        href: "newlogin.php",
    };

    localStorage.setItem("next", JSON.stringify(next));

    setTimeout(() => (window.location.href = "loading.html"), 500);
}

const signup = document.querySelector(".signup");
signup.addEventListener("click", getSignupPage);

function getSignupPage() {
    let next = {
        href: "newsignup.php",
    };

    localStorage.setItem("next", JSON.stringify(next));

    setTimeout(() => (window.location.href = "loading.html"), 500);
}
document.querySelector(".reserve").addEventListener("click", () => {
    let next = {
        href: "reserve.html",
    };

    localStorage.setItem("next", JSON.stringify(next));

    setTimeout(() => (window.location.href = "loading.html"), 500);
});