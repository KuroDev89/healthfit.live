

/*VALIDA EL NÃšMERO DE TELÃ‰FONO*/
function justNumbers(e) {
  var keynum = window.event ? window.event.keyCode : e.which;
  if (keynum == 8 || keynum == 46) return true;

  return /\d/.test(String.fromCharCode(keynum));
}





/*reCaptcha*/

function submitUserForm() {
  var response = grecaptcha.getResponse();
  if (response.length == 0) {
    document.getElementById('g-recaptcha-error').innerHTML =
      '<span style="color:red;">This field is required.</span>';
    return false;
  }
  return true;
}

function verifyCaptcha() {
  document.getElementById('g-recaptcha-error').innerHTML = '';
}

/*desactiva scroll horizontal*/
$(function() {

  var $body = $(document);
  $body.bind('scroll', function() {
      // "Desactivar" el scroll horizontal
      if ($body.scrollLeft() !== 0) {
          $body.scrollLeft(0);
      }
  });

}); 
