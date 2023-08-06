$(document).ready(function() {
  // Update Hero Banner Form Submission
  $("#update-hero-form").submit(function(event) {
    event.preventDefault();

    var title = $("input[name='title']").val();
    var description = $("textarea[name='description']").val();

    $.ajax({
      type: "POST",
      url: "backend.php",
      data: {
        action: "update_hero",
        title: title,
        description: description
      },
      dataType: "json",
      success: function(response) {
        alert(response.message); // Display success message
      },
      error: function(error) {
        console.log(error);
        alert("Failed to update hero banner. Please try again.");
      }
    });
  });

  // Update Contact Details Form Submission
  $("#update-contact-form").submit(function(event) {
    event.preventDefault();

    var address = $("input[name='address']").val();
    var email = $("input[name='email']").val();

    $.ajax({
      type: "POST",
      url: "backend.php",
      data: {
        action: "update_contact",
        address: address,
        email: email
      },
      dataType: "json",
      success: function(response) {
        alert(response.message); // Display success message
      },
      error: function(error) {
        console.log(error);
        alert("Failed to update contact details. Please try again.");
      }
    });
  });
});
