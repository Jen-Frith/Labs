$("input:text").each(function(index, element) {
    $(element).change(function () {
      var value = $(this).val();
      $(element).removeClass("animate");
      if (!value) {
        $(element).addClass("animate");
      }
    });
  });





//   let addSpan
// window.addSpan=()=>{
 
// let input1= document.getElementById('input1').value;
// input1.innerHTML='<span></span>';

// }

