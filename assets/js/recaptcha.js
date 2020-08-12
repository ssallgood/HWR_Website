// var onLoad = function() {
//   widgetId = grecaptcha.render('componentId', {
//     'sitekey' : '6LeDkdYUAAAAAAdki4z2MjgqeZ7613JMNH4DFRLO',
//     'callback' : onSubmit,
//   });
// };

// var onSubmit = function(response) {
//   alert("running custom onSubmit");
//   grecaptcha.execute();
//   document.getElementById("contact-form").submit(); // send response to your backend service
// };



function onSubmit(token) {
  document.getElementById('contact-form').submit();
}

// function validate(event) {
//   event.preventDefault();
//   if (!document.getElementById('online_name').value) {
//     alert("You must add text to the required field");
//   } else {
//     grecaptcha.execute();
//   }
// }
//
// function onload() {
//   var element = document.getElementById('contact-form');
//   element.onclick = validate;
// }
