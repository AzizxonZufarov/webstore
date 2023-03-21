
$(document).ready(function($) {
  $(".cats").click(function(e){
  e.preventDefault();
  var id = $(this).data("id");

  $.ajax({
    type:"GET",//Каким методом делаем запрос
    url:"views/theme/pages/cats.php",// на какую страницу
    data:{view:'cats', id: id},// Передаем параметры. У нас GET все параметры будут в url строке.
    success:function(res){
          console.log(id);
  $(".cat-items").hide().fadeIn(2000);
    },
    error:function(xhr, status, error) {
  var err = eval("(" + xhr.responseText + ")");
  alert(err.Message);
}
      });
  });




$('.open-popup').click(function(e) {
    e.preventDefault();
    $('.popup-bg').fadeIn(800);
    $('html').addClass('no-scroll');
    $('.image').hide();
    $('.msg').hide();

});

$('.close-popup').click(function() {
    $('.popup-bg').fadeOut(800);
    $('html').removeClass('no-scroll');
});

});
