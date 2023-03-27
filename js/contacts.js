const telInput2 = document.getElementById('tel2');
const telInput3 = document.getElementById('tel3');
IMask(telInput2, {
    mask: '+38 (000) 000 00 00'
});
IMask(telInput3, {
    mask: '+38 (000) 000 00 00'
});

const activeCheckbox = document.querySelector('#active');
const wrapper = document.querySelector('.wrapper');
const fas = document.querySelector('.fas');

activeCheckbox.addEventListener('change', function() {
    if (activeCheckbox.checked) {
        wrapper.classList.add('active');
        fas.classList.add('active');
        document.documentElement.classList.add('no-scroll')
    } else {
        wrapper.classList.remove('active');
        fas.classList.remove('active');
        document.documentElement.classList.remove('no-scroll')
    }
});

const modalPhoneForm = document.querySelector('.modal-phone-form');
const modalPhoneFormClose = document.querySelector('.modal-phone-form-close');
const buttonEnter = document.querySelector('.enter');
const buttonEnter2 = document.querySelector('.enter2');
const buttonEnter3 = document.querySelector('.enter3');
const closeMPF = document.querySelector('.close-mpf');

modalPhoneFormClose.addEventListener('click', function() {
    modalPhoneForm.classList.remove('active');
    document.documentElement.classList.remove('no-scroll');
});

closeMPF.addEventListener('click', function() {
    modalPhoneForm.classList.remove('active');
    document.documentElement.classList.remove('no-scroll');
});

buttonEnter.addEventListener('click', function() {
    modalPhoneForm.classList.add('active');
    document.documentElement.classList.add('no-scroll');
});

buttonEnter2.addEventListener('click', function() {
    modalPhoneForm.classList.add('active');
    document.documentElement.classList.add('no-scroll');
});

buttonEnter3.addEventListener('click', function() {
    modalPhoneForm.classList.add('active');
    document.documentElement.classList.add('no-scroll');
});

// script to create BLUR elements
const container = document.querySelector('.body-content.contacts');
let numberOfDivs = 5; // Set the number of divs you want to create (for desktop)
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
    numberOfDivs = 2; // Set the number of divs you want to create (for mobile)

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

// When the user scrolls down 50px from the top of the document, easily-animated remove middleSection
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.middle-section').slideUp(200);
    } else {
        $('.middle-section').slideDown(200);
    }
});

AOS.init();