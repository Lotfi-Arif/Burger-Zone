// getting data from localStorage
class Store {
    constructor() {}
    getInfo() {
        let userInfo;

        if (localStorage.getItem("User Info") === null) {
            userInfo = [];
        } else {
            userInfo = JSON.parse(localStorage.getItem("User Info"));
        }

        return userInfo;
    }
}

const login = document.querySelector(".btn-secondary");

login.addEventListener("click", captureInfo);

function captureInfo(e) {
    // getting input values

    const username = document.querySelector(".user").value;
    const password = document.querySelector(".pass").value;

    const capture = new Capture(username, password);
    const store = new Store();
    const storedInfo = store.getInfo();
    const validate = new Validate();
    // comparing input and localstorage stored accounts
    validate.compare(capture, storedInfo);
    e.preventDefault();
}

class Capture {
    // getting input from user
    constructor(username, password) {
        this.username = username;
        this.password = password;
    }
}

// validating user input and  through accounts database

class Validate {
    constructor() {}

    compare(input, stored) {
        console.log(input.password);
        console.log(stored[0].password);
        console.log(stored[0].userName);
        console.log(input.username);

        stored.forEach((user) => {
            if (input.username === user.userName) {
                // validating user name then password


                if (input.password === user.password) {
                    // setting the href to landingpage

                    const anchor = document.querySelector(".btn-secondary");

                    const ui = new UI();
                    ui.showAlert("Success", "success");
                    const next = {
                        href: "index.php",
                    };
                    localStorage.setItem("next", JSON.stringify(next));

                    setTimeout(() => (window.location.href = "loading.html"), 500);
                } else {
                    const ui = new UI();
                    ui.showAlert("Invalid input", "alert");
                }
            }
        });
    }
}

// UI functionality
class UI {
    constructor() {}
    showAlert(message, className) {
        const ui = new UI();
        ui.clearAlert();

        const div = document.createElement("div");
        div.className = className;
        div.appendChild(document.createTextNode(message));

        const container = document.querySelector(".login");
        const form = document.querySelector(".btn-secondary");

        container.insertBefore(div, form);

        setTimeout(ui.clearAlert, 3000);
    }
    clearAlert() {
        if (document.querySelector(".alert") != null) {
            document.querySelector(".alert").remove();
        } else if (document.querySelector(".success") != null) {
            document.querySelector(".success").remove();
        }
    }
}

// body animation

document.addEventListener("DOMContentLoaded", bodyAnimation);

function bodyAnimation() {
    const body = document.querySelector("body");
    body.classList.add("animate");

    setTimeout(
        function() {
            body.classList.remove("animate");
        },

        3000
    );
}

document.querySelector("#backBtn").addEventListener("click", () => {
    const next = {
        href: "index.php",
    };

    localStorage.setItem("next", JSON.stringify(next));

    setTimeout(() => (window.location.href = "loading.html"), 500);
});