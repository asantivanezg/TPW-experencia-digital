//$('html, body').hide().fadeIn(1500);
// JavaScript Document
window.sr=ScrollReveal();
sr.reveal('.logo',{
    duration:2000,
    origin:'left',
    distance:'150px'
});


sr.reveal('.flexslider',{
    duration:1500,
    origin:'bottom',
    distance:'150px'
});

sr.reveal('#galeria',{
    duration:1500,
    origin:'left',
    distance:'150px'
});

sr.reveal('.conta',{
    duration:1500,
    origin:'bottom',
    distance:'150px'
});

//Script del Boton Subir.
$('#subir').click(function(){
    $('html, body').animate({scrollTop:0},500);
});

$(window).scroll(function(){
    if($(this).scrollTop()>0){
        $('#subir').slideDown(300);
    }else{
        $('#subir').slideUp(300);
    }
});

const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn  = document.querySelector('.sign-in');

document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});