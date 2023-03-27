const swiper = new Swiper('.swiper', {
    direction: 'horizontal',

    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2.5,
            spaceBetween: 10,
        },
        // when window width is >= 960px
        960: {
            slidesPerView: 3.5,
            spaceBetween: 27,
        },
        // when window width is >= 1200px
        1200: {
            slidesPerView: 4,
            spaceBetween: 27,
        },
    }

});

const telInput = document.getElementById('tel');
const telInput3 = document.getElementById('tel3');
IMask(telInput, {
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
const modalLevel1Form = document.querySelector('.modal-level1-form');
const modalLevel1FormClose = document.querySelector('.modal-level1-form-close');
const buttonEnter = document.querySelector('.enter');
const buttonEnter3 = document.querySelector('.enter3');
const closeMPF = document.querySelector('.close-mpf');
const infoTrigger = document.querySelector('.info-trigger');
const closeMLF = document.querySelector('.close-mlf');

modalPhoneFormClose.addEventListener('click', function() {
    modalPhoneForm.classList.remove('active');
    document.documentElement.classList.remove('no-scroll');
});

modalLevel1FormClose.addEventListener('click', function() {
    modalLevel1Form.classList.remove('active');
    document.documentElement.classList.remove('no-scroll');
});

closeMPF.addEventListener('click', function() {
    modalPhoneForm.classList.remove('active');
    document.documentElement.classList.remove('no-scroll');
});

closeMLF.addEventListener('click', function() {
    modalLevel1Form.classList.remove('active');
    document.documentElement.classList.remove('no-scroll');
});

buttonEnter.addEventListener('click', function() {
    modalPhoneForm.classList.add('active');
    document.documentElement.classList.add('no-scroll');
});

buttonEnter3.addEventListener('click', function() {
    modalPhoneForm.classList.add('active');
    document.documentElement.classList.add('no-scroll');
});

infoTrigger.addEventListener('click', function() {
    modalLevel1Form.classList.add('active');
    document.documentElement.classList.add('no-scroll');
});

// script to create BLUR elements
const container = document.querySelector('.body-content.packages');
let numberOfDivs = 15; // Set the number of divs you want to create (for desktop)
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
    numberOfDivs = 7; // Set the number of divs you want to create (for mobile)

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





const items = document.querySelectorAll(".accordion button");
function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (let i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle === 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}
items.forEach(item => item.addEventListener('click', toggleAccordion));


// When the user scrolls down 50px from the top of the document, easily-animated remove middleSection
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.middle-section').slideUp(200);
    } else {
        $('.middle-section').slideDown(200);
    }
});

AOS.init();