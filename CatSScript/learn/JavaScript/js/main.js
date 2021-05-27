document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;

        if(nextEl) {
            e.preventDefault();
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){ //clicco su un padre aperto
              mycollapse.hide(); //richiudo un padre
            } else { //clicco su un padre chiuso
                mycollapse.show(); //apro il padre e chiudo gli altri padri aperti
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); 
  }) 
}); 








/*--------------------------------------------------------------
# Back to top
--------------------------------------------------------------*/

  //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



/*--------------------------------------------------------------
# Text area
--------------------------------------------------------------*/
/* Default */
$(document).ready(function(){
  $('#text-area').load('./text-area/introduction.html');
});

/*Links*/
$(document).ready(function(){
  $(".learn-link").click(function(){
    $("#text-area").load("./text-area/"+this.id+".html");
  });
});



/* NAVBAR */
$(document).ready(function(){
  $('#navbar').load(navbarType);
});