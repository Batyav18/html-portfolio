

 $(document).ready(function(){
    $("#loginBtn").click(function(){
      $("#dialogBox").fadeIn(200);
    });

    $("#closeBtn").click(function(){
      $("#dialogBox").fadeOut(200);
    });

    $("#signupLink").click(function(){
      $("#loginForm").hide(500);
      $("#signupForm").show(500);
    });

    $("#loginLink").click(function(){
      $("#signupForm").hide(500);
      $("#loginForm").show(500);


    });

 $("#universitySelector").submit(function(){
      $("#progressIndicator").show();
  });


       $("#submitBtn").click(function(){
      // Perform form validation here
      var form = $("#universitySelector")[0];
      if (form.checkValidity()) {
        // If form is valid, submit the form


        form.submit();
      

      } else {
        // If form is invalid, show error message
        alert("Please fill out all fields.");
      }
    });
  });


const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const signupLink = document.querySelector('.signup-link');
const iconClose = document.querySelector('.close');

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup')
});


let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');
window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
};
