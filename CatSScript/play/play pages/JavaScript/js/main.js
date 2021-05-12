document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
      
      element.addEventListener('click', function (e) {
  
        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	
  
          if(nextEl) {
              e.preventDefault();	
              let mycollapse = new bootstrap.Collapse(nextEl);
              
              if(nextEl.classList.contains('show')){
                mycollapse.hide();
              } else {
                  mycollapse.show();
                  // find other submenus with class=show
                  var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                  // if it exists, then close all of them
                  if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                  }
              }
          }
      }); // addEventListener
    }) // forEach
  }); 
  // DOMContentLoaded  end








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
# Play area
--------------------------------------------------------------*/
function get_type() {
  var random = Math.random();
  if(random <= 0.5) return 1;
  else return 2;
}

var counter = 1;

/* Default */
$(document).ready(function(){
  $("#play-area").load("./play-area/question"+counter+"_"+get_type()+".html");
});

/*Links*/
$(document).ready(function(){
  $(".play-link").click(function(){
    counter++;
    if(counter <= 5) $("#play-area").load("./play-area/question"+counter+"_"+get_type()+".html");
    else {
      document.getElementById("confirm-btn").style.display = "none";
      $("#play-area").load("./play-area/end-game.html");
    }
  });
});
