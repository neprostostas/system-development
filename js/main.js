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
const numberOfDivs = 8; // Set the number of divs you want to create
let topPosition = 200;

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