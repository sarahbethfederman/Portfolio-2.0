$(document).ready(function() {
  $('.container, .post-container').css("background", function() {
    return $(this).data('color');
  });
});
