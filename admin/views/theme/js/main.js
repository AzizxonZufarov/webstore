 $(document).ready(function(){
$("td").each(function(){
    if($(this).text() == "0"){
      $(this).css("background-color", "red");
    }
    if($(this).text() == "1"){
      $(this).css("background-color", "green");
    }

  })


  window.onload = function() {
      if (window.jQuery) {
          // jQuery is loaded
          alert("Yeah!");
      } else {
          // jQuery is not loaded
          alert("Doesn't Work");
      }
  }
});
