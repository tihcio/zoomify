$(document).ready(function() {
  $("a.zoomBox").fancybox({
    openEffect  : 'elastic',
    closeEffect : 'elastic',
      helpers : {
        title : {
          type : 'inside'
        }
      }
  });
});

var min = -6;
var max = 6;
var random = Math.floor(Math.random() * (max - min + 1)) + min;
