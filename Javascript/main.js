$(document).ready(function () {
    $('.menu-toggler').on('click', function () {
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');
    });


    $('.top-nav .nav-link').on('click', function() {
        $('.menu-toggler').removeClass('open');
        $('.top-nav').removeClass('open');
    });

    $('nav a[href*="#"]').on('click', function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
        }, 2000);
   });

   $('#up').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
    });

    AOS.init({
        easing: 'ease',
        duration: 1800,
        once: true
    })

});

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function expand(id){
    var divelement = document.getElementById(id);
    if(divelement.style.display == 'none')
        divelement.style.display = 'block';
    else
        divelement.style.display = 'none';
}

function switchForms(id){
    var personal = document.getElementById('details-form');
    var password = document.getElementById('password-form');
    if(id == 'personalDetails'){
        personal.style.display = 'flex';
        password.style.display = 'none';
    } else if(id == 'changePassword'){
        password.style.display = 'flex';
        personal.style.display = 'none';
    }
}


function changeBG(btnID){
    var card = document.getElementById('edit');
    if(btnID == 'default') {
        card.style.backgroundImage = "url('')";
        $("card").load("customize.php");
        
    }
    if(btnID == 'btn1') {
        card.style.backgroundImage = "url('Images/1.JPG')";
        $("card").load("customize.php");
    }
    else if(btnID == 'btn2') {
        card.style.backgroundImage = "url('Images/2.jpg')";
        $("card").load("customize.php");
    }
    else if(btnID == 'btn3'){
        card.style.backgroundImage = "url('Images/3.jpg')";
        $("card").load("customize.php");
    }
    else if(btnID == 'btn4'){
        card.style.backgroundImage = "url('Images/4.jpg')";
        $("card").load("customize.php");
    }
}

