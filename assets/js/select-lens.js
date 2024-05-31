$(document).ready(function () {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
  
    $(".next").click(function () {
      current_fs = $(this).closest("fieldset");
      next_fs = current_fs.next("fieldset");
  
      // Show the next fieldset
      next_fs.show();
      // Hide the current fieldset with style
      current_fs.animate(
        { opacity: 0 },
        {
          step: function (now) {
            // for making fieldset appear animation
            opacity = 1 - now;
  
            current_fs.css({
              display: "none",
              position: "relative",
            });
            next_fs.css({ opacity: opacity });
          },
          duration: 500,
        }
      );
    });
  
    $(".previous").click(function () {
      current_fs = $(this).closest("fieldset");
      previous_fs = current_fs.prev("fieldset");
  
      // Show the previous fieldset
      previous_fs.show();
  
      // Hide the current fieldset with style
      current_fs.animate(
        { opacity: 0 },
        {
          step: function (now) {
            // for making fieldset appear animation
            opacity = 1 - now;
  
            current_fs.css({
              display: "none",
              position: "relative",
            });
            previous_fs.css({ opacity: opacity });
          },
          duration: 500,
        }
      );
    });
  
    $(".submit").click(function () {
      return false;
    });
  });
  