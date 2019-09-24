
$(document).ready(function () {

  
/********************* MENU *********************/
  $menuLeft = $('.pushmenu-left');
  $nav_list = $('#sidebartoggle');

  $nav_list.click(function () {
    $(this).toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons">menu</i>');
    }
  });

  $(".pushmenu > a").click(function () {
    $nav_list.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons">menu</i>');
    }
  });

  
/********************* SLIDER *********************/
  $('.slider').slider();

  
/********************* INPUT MINUS/PLUS *********************/
  $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
})