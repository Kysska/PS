var btn0 = document.getElementById("about");
btn0.addEventListener("click", function() {
      document.getElementById("text_about").style ='display:block';
      document.getElementById("text_application").style ='display:none';
      document.getElementById("text_structure").style ='display:none';

});

var btn1 = document.getElementById("application");
btn1.addEventListener("click", function() {
      document.getElementById("text_about").style ='display:none';
      document.getElementById("text_application").style ='display:block';
      document.getElementById("text_structure").style ='display:none';

});

var btn2 = document.getElementById("structure");
btn2.addEventListener("click", function() {
      document.getElementById("text_about").style ='display:none';
      document.getElementById("text_application").style ='display:none';
      document.getElementById("text_structure").style ='display:block';

});