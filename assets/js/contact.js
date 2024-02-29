/* document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    // Collect form data
    var formData = {
       name: document.getElementById('name').value,
       email: document.getElementById('email').value,
       subject: document.getElementById('subject').value,
       message: document.getElementById('message').value
    };

    // Define the email details
    var emailRecipient = "ahmetsabahyeli@outlook.com"; // Specify your email address here
    var emailSubject = "New Contact Form Submission";
    var emailBody = `Name: ${formData.name}%0AEmail: ${formData.email}%0A%0ASubject: ${formData.subject}%0A%0AMessage: ${formData.message}`;

    // Send the email
    window.open(`mailto:${emailRecipient}?subject=${emailSubject}&body=${emailBody}`);
 }); */

 const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
