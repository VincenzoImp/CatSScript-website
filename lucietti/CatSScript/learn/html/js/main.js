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
# Text area
--------------------------------------------------------------*/
/*function loadText(id){
  var httpRequest = new XMLHttpRequest();
  httpRequest.onreadystatechange = function(id){
    if(this.readyState == 4 && this.status == 200){
      document.getElementById("text-area").innerHTML = 
      this.responseText;
    }
  };
  httpRequest.open("GET", "../"+id+".html", true);
  httpRequest.send();
}*/


/* Default */
$(document).ready(function(){
  $('#text-area').load('./text-area/introduction.html');
});

/* Links */
$('#introduction').click(() => {
  $('#text-area').load('./text-area/introduction.html');
});

$('#tag_1').click(() => {
  $('#text-area').load('./text-area/tag_1.html');
});

$('#tag_2').click(() => {
  $('#text-area').load('./text-area/tag_2.html');
});

$('#tag_3').click(() => {
  $('#text-area').load('./text-area/tag_3.html');
});

$('#forms').click(() => {
  $('#text-area').load('./text-area/forms.html');
});

$('#example_1').click(() => {
  $('#text-area').load('./text-area/example_1.html');
});

$('#example_2').click(() => {
  $('#text-area').load('./text-area/example_2.html');
});

$('#example_3').click(() => {
  $('#text-area').load('./text-area/example_3.html');
});


/*$(document).ready(function(){
  var documenti = document.getElementsByClassName("learn-link");
  for(var i = 0; i<documenti.length; i++){
    $(documenti[i]).click(function(){
      $("text-area").load("./text-area/tag_1.html");
    })
  }
});*/



