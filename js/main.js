$('.slider_inner').slick({
      dots: true,
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true
    });

    var button = document.getElementById("add_button");
    button.addEventListener("click", function() {
          console.log("3"); 
          var terf = document.getElementById("messadge_add_to_cart");
          if (window.getComputedStyle(terf).display == 'none') {
                terf.style ='display:block'; 
                console.log("1"); 
          } else {
                terf.style ='display:none';
                console.log("2"); 
          }
    
    });

var btn = document.getElementById("search");
btn.addEventListener("click", function() {
      var block = document.getElementById("search_input");
      if (window.getComputedStyle(block).display == 'none') {
            block.style ='display:block';  
      } else {
            block.style ='display:none';
      }

});



function changeLine() {
      var line = document.getElementById("header_line");
      if (window.pageYOffset >45) {
            line.style = 'background-color: #D0D0D0';
      } else {
            line.style = 'background-color: #fff';
      }
}
setInterval(() => changeLine(), 5);


