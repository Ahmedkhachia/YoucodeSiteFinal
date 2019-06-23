/*jslint browser: true*/
/*global $, jQuery, alert*/
(function ($) {
  'use strict';

  $(function () {

    $(document).ready(function () {
      function triggerClick(elem) {
        $(elem).click();
      }
      var $progressWizard = $('.stepper'),
        $tab_active,
        $tab_prev,
        $tab_next,
        $btn_prev = $progressWizard.find('.prev-step'),
        $btn_next = $progressWizard.find('.next-step'),
        $tab_toggle = $progressWizard.find('[data-toggle="tab"]'),
        $tooltips = $progressWizard.find('[data-toggle="tab"][title]');

      // To do:
      // Disable User select drop-down after first step.
      // Add support for payment type switching.

      //Initialize tooltips
      $tooltips.tooltip();

      //Wizard
      $tab_toggle.on('show.bs.tab', function (e) {
        var $target = $(e.target);

        if (!$target.parent().hasClass('active, disabled')) {
          $target.parent().prev().addClass('completed');
        }
        if ($target.parent().hasClass('disabled')) {
          return false;
        }
      });

      // $tab_toggle.on('click', function(event) {
      //     event.preventDefault();
      //     event.stopPropagation();
      //     return false;
      // });

      $btn_next.on('click', function () {
        $tab_active = $progressWizard.find('.active');

        $tab_active.next().removeClass('disabled');

        $tab_next = $tab_active.next().find('a[data-toggle="tab"]');
        triggerClick($tab_next);

      });
      $btn_prev.click(function () {
        $tab_active = $progressWizard.find('.active');
        $tab_prev = $tab_active.prev().find('a[data-toggle="tab"]');
        triggerClick($tab_prev);
      });
    });
  });

}(jQuery, this));
$(function () {
  $('input.getName').keyup("keyup", function () {
    $('.cName').html($('.getName').val());
  });

  // $('.progress-bar').css("width", "20%");
  var img_cnt = $('li.activate').index() + 1;
  var img_amt = $('li.form-group').length - 1;
  $('.img_cnt').html(img_cnt);
  $('.img_amt').html(img_amt);
  var progress = ($('.img_cnt').text() / $('.img_amt').text()) * 100;
  $('.progress-bar').css("width", progress + "%");


  $('.nxt').click(function () {

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

$(function () {
  for (let i = 1; i <= 24; i++) {
    $('#q' + i).keyup(function () {
      var nameValue = $(this).val();
      $('#jawab' + i).val(nameValue);
    });
  }
  for (let i = 1; i <= 6; i++) {
    $('#d' + i).keyup(function () {
      var nameValue = $(this).val();
      $('#donne' + i).val(nameValue);
    });
  }

});



$(function () {
  let tableName = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];
  let note = 0;
  $('.noteResult').click(function () {
    for (let i = 1; i <= 20; i++) {
      var nameValue = $('#jawab' + i).val();
      console.log(nameValue);
      if (nameValue == tableName[i - 1]) {
        note++;
      }
    }
    $('#validation').html("khouya jebtii  : " + note + "/20");
    $('#note').val(note);

  });
});

$('input[type="checkbox"]').click(function () {
  $("#donne7").val($(this).val());
});

$('input[type="checkbox"]').click(function () {
  if ($(this).val() == "homme") {
    $("#carreauHomme").addClass("checked");
    $("#carreauFemme").removeClass("checked");

  } else if ($(this).val() == "femme") {
    $("#carreauFemme").addClass("checked");
    $("#carreauHomme").removeClass("checked");
  }
});