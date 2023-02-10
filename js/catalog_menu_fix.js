function fixedMenu() {
      var menu = document.getElementById("content_right");
      var replacer = document.getElementById("content_replacer");
      if (window.pageYOffset >350) {
            menu.style = 'position: fixed; margin-top: -350px;';
            replacer.style = 'display:block';
      } else {
            menu.style = 'position: relative';
            replacer.style = 'display:none';
      }

}
setInterval(() => fixedMenu(), 2);