$(function() {
  $('input.getName').keyup("keyup", function() {
    $('.cName').html($('.getName').val());
  });
  $('.help').popover();
  //$('.progress-bar').css("width", "20%");
  $('.submit').click(function() {
    event.preventDefault();
    var darken = '<div class="darken" style="display:none;"></div>';
    $('body').prepend(darken);

    $(".darken").delay().show(0).animate({
      opacity: 0.8
    }, "fast");
    $('.thanks').removeClass('hide').addClass('fadeInDownBig');
  });
  var img_cnt = $('li.activate').index() + 1;

  var img_amt = $('li.form-group').length;
  $('.img_cnt').html(img_cnt);
  $('.img_amt').html(img_amt);
  var progress = ($('.img_cnt').text() / $('.img_amt').text()) * 100;
  $('.progress-bar').css("width", progress + "%");
  

  $('.nxt').click(function() {

    if ($('.progress-form li').hasClass('activate')) {

      $('p.alerted').removeClass('fadeInLeft').addClass('fadeOutUp');

      var $activate = $('li.activate');
      var $inactive = $('li.inactive');
      $activate.removeClass("fadeInRightBig activate").addClass('fadeOutLeftBig');
      $inactive.removeClass("hide inactive").addClass("activate fadeInRightBig").next().addClass('inactive');

      var img_cnt = $('li.activate').index() + 1;

      var img_amt = $('li.form-group').length;
      $('.img_cnt').html(img_cnt);
      $('.img_amt').html(img_amt);
      var progress = ($('.img_cnt').text() / $('.img_amt').text()) * 100;
      $('.progress-bar').css("width", progress + "%");

      if ($('.img_cnt').html() == $('.img_amt').html()) {

        $('.count, .nxt').hide();
        $('.submit').removeClass("hide");

      }

    } //End Else

  });

});

$(function() {
  for (let i = 1 ; i <=24 ; i++){
    $('#q'+i).keyup(function() {
      var nameValue = $(this).val();
      $('.answer'+i).html(nameValue);
    });  
  }

});

// var realAnswer = [0,1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24];
// var next = document.querySelector('.submit');
// next.addEventListener('click', addArray);
// function addArray(){
//   var userAnswer = Array.from(document.querySelectorAll('input.form-control'));
//   for (let i=0;i<userAnswer.length;i++){
//     console.log (userAnswer[i].value);
//   }
// }

$(function() {  
  let inputLength = $(".form-control").length;
  let tableName =['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'];
  let note = 0;
    $('.submit').click(function() {
      for(let i=1;i<=inputLength;i++){
      var nameValue = $('#j'+i).html();
      console.log(nameValue);
      

// var prepar = nameValue;
// console.log(prepar[0]);
      if(nameValue == tableName[i-1]){
        note++;
        console.log('uhlj');
      }
    }
    $('#validation').html("jbti a lwasse3  : " + note);
  });
});
