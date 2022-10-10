const bglogin =document.querySelector('.bg_log_in');
const color_login =document.querySelector('.text_login');
const color_signup =document.querySelector('.text_Signup');
const hideboxlogin =document.querySelector('.box-login');
const showapply =document.querySelector('.box-apply');
const hide=document.querySelector('.box-apply');

hide.style.display = "none";

function sign_in(){
     bglogin.setAttribute('class','bg_log_in');
     color_login.style.color="#82288c";
     color_signup.style.color="#fff";
     showapply.style.display = "none";
     hideboxlogin.style.display = "block";
}
function apply(){
     bglogin.setAttribute('class','bg_log_in_1');
     color_login.style.color="#fff";
     color_signup.style.color="#82288c";
     showapply.style.display = "block";
     hideboxlogin.style.display = "none";
}
