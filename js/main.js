const activeCheckbox = document.querySelector('#active');
const wrapper = document.querySelector('.wrapper');
const fas = document.querySelector('.fas');
activeCheckbox.addEventListener('change', function() {
    if (activeCheckbox.checked) {
        wrapper.classList.add('active');
        fas.classList.add('active');
    } else {
        wrapper.classList.remove('active');
        fas.classList.remove('active');
    }
});

// script to create BLUR elements
const container = document.querySelector('.body-content');
let numberOfDivs = 8; // Set the number of divs you want to create (for desktop)
let topPosition = 200;

if (window.innerWidth >= 1200) {
    console.log("desktop");

    for (let i = 0; i < numberOfDivs; i++) {
        const div = document.createElement("div");
        div.classList.add("blur");

        div.style.top = `${topPosition}px`;

        if (i % 4 === 0) {
            topPosition += 500;
            div.style.left = "20%";
        } else if (i % 4 === 1) {
            div.style.left = "70%";
        } else if (i % 4 === 2) {
            div.style.left = "30%";
        } else {
            div.style.left = "80%";
        }

        div.style.position = "absolute";
        div.style.transform = "translate(-50%,-50%)";
        div.style.width = "296px";
        div.style.height = "287px";
        div.style.background = "#05E900";
        div.style.filter = "blur(250px)";

        container.appendChild(div);
        topPosition += 500;
    }

} else {
    console.log("mobile");

    topPosition = 800;
    numberOfDivs = 4; // Set the number of divs you want to create (for mobile)

    for (let i = 0; i < numberOfDivs; i++) {
        const div = document.createElement("div");
        div.classList.add("blur");

        div.style.top = `${topPosition}px`;

        div.style.position = "absolute";
        div.style.transform = "translate(-50%,-50%)";
        div.style.left = "50%";
        div.style.width = "296px";
        div.style.height = "287px";
        div.style.background = "#05E900";
        div.style.filter = "blur(250px)";
        div.style.opacity = "0.5";

        container.appendChild(div);
        topPosition += 1500;
    }

}


