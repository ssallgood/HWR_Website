(function ($) {
    'use strict';

    var form = $('#contact-form'),
        //message = $('.contact__msg'),
        form_data;

    // Success function
    function done_func(response) {
        if (response.length == 0 ) {
          alert('recaptcha failed');
        }
        else {
          alert(response);
          $('#contact-form').submit();
        }
    }

    // fail function
    function fail_func(data) {
        message.fadeIn()
        message.html(data.responseText);
        setTimeout(function () {
            message.fadeOut(5000);
        }, 5000);
    }

    form.submit(function (e) {
        e.preventDefault();
        alert('grecaptcha about to execute');
        grecaptcha.execute(recapWidgetId);
        alert('grecaptcha executed');
        //e.submit();
        // form_data = $(this).serialize();
        // $.ajax({
        //     type: 'POST',
        //     url: form.attr('action'),
        //     data: form_data
        // })
        // .done(done_func)
        // .fail(fail_func);
    });
})(jQuery);
function tokenSubmit(token) {
  alert('about to submit document form ' + token);
  document.getElementById('contact-form').submit();
}
