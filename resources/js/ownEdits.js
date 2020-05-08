$("input:text").each(function(index, element) {
    $(element).change(function () {
      var value = $(this).val();
      $(element).removeClass("animate");
      if (!value) {
        $(element).addClass("animate");
      }
    });
  });



