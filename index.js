"use strict";

$('a[href^="#"').on('click', function() {

let href = $(this).attr('href');

$('html, body').animate({
    scrollTop: $(href).offset().top
}, {
    duration: 500,
    easing: "linear"
});

return false;
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);
    
    async function formSend(e) {
        e.preventDefault();

        let formData = new FormData(form);
        let response = await fetch('sendemail.php', {
            method: "POST",
            body: formData
        });
    }
});