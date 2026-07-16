const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 50) {

        navbar.style.background = "rgba(255,255,255,0.95)";
        navbar.style.boxShadow = "0 5px 20px rgba(0,0,0,.2)";

    } else {

        navbar.style.background = "rgba(255,255,255,.25)";
        navbar.style.boxShadow = "0 5px 20px rgba(0,0,0,.1)";

    }

});


const revealElements = document.querySelectorAll(
    ".card,.pet-card,.step,.box"
);

function reveal() {

    revealElements.forEach(el => {

        const top = el.getBoundingClientRect().top;

        if (top < window.innerHeight - 100) {

            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
        }

    });

}

revealElements.forEach(el => {

    el.style.opacity = "0";
    el.style.transform = "translateY(70px)";
    el.style.transition = "all .8s ease";

});

window.addEventListener("scroll", reveal);
reveal();


const counters = document.querySelectorAll(".box h3");

let started = false;

window.addEventListener("scroll", () => {

    const about = document.querySelector(".about");

    const pos = about.getBoundingClientRect().top;

    if (pos < 300 && !started) {

        started = true;

        counters.forEach(counter => {

            const target = parseInt(counter.innerText);

            let count = 0;

            const speed = target / 120;

            const update = () => {

                count += speed;

                if (count < target) {

                    counter.innerText = Math.floor(count) + "+";

                    requestAnimationFrame(update);

                } else {

                    counter.innerText = target + "+";

                }

            };

            update();

        });

    }

});


document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (e) {

        e.preventDefault();

        document.querySelector(this.getAttribute("href"))
            .scrollIntoView({
                behavior: "smooth"
            });

    });

});


const form = document.querySelector("form");

if (form) {

    form.addEventListener("submit", (e) => {

        e.preventDefault();

        const inputs = form.querySelectorAll("input,textarea");

        let valid = true;

        inputs.forEach(input => {

            if (input.value.trim() == "") {

                valid = false;

                input.style.border = "2px solid red";

            } else {

                input.style.border = "2px solid #4CAF50";

            }

        });

        if (valid) {

            alert("✅ Thank you! Your message has been sent successfully.");

            form.reset();

        }

    });

}

const topBtn = document.createElement("button");

topBtn.innerHTML = "⬆";

document.body.appendChild(topBtn);

topBtn.style.position = "fixed";
topBtn.style.right = "25px";
topBtn.style.bottom = "25px";
topBtn.style.padding = "15px 18px";
topBtn.style.border = "none";
topBtn.style.borderRadius = "50%";
topBtn.style.background = "#ff4081";
topBtn.style.color = "white";
topBtn.style.cursor = "pointer";
topBtn.style.fontSize = "20px";
topBtn.style.display = "none";
topBtn.style.zIndex = "999";

window.addEventListener("scroll", () => {

    if (window.scrollY > 500) {

        topBtn.style.display = "block";

    } else {

        topBtn.style.display = "none";

    }

});

topBtn.onclick = () => {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

};

setTimeout(() => {

    alert("🐾 Welcome to PetAdopt! Find your perfect companion today ❤️");

}, 1200);


const darkBtn = document.createElement("button");

darkBtn.innerHTML = "🌙";

document.body.appendChild(darkBtn);

darkBtn.style.position = "fixed";
darkBtn.style.left = "25px";
darkBtn.style.bottom = "25px";
darkBtn.style.padding = "15px";
darkBtn.style.border = "none";
darkBtn.style.borderRadius = "50%";
darkBtn.style.cursor = "pointer";
darkBtn.style.fontSize = "20px";
darkBtn.style.background = "#222";
darkBtn.style.color = "white";

let dark = false;

darkBtn.onclick = () => {

    dark = !dark;

    if (dark) {

        document.body.style.background = "#1b1b1b";
        document.body.style.color = "white";
        darkBtn.innerHTML = "☀";

    } else {

        document.body.style.background = "#f8fbff";
        document.body.style.color = "#333";
        darkBtn.innerHTML = "🌙";

    }

};

document.querySelectorAll("button").forEach(btn => {

    btn.addEventListener("mouseenter", () => {

        btn.style.transform = "scale(1.08)";

    });

    btn.addEventListener("mouseleave", () => {

        btn.style.transform = "scale(1)";

    });

});