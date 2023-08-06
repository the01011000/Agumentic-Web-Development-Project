$(document).ready(function() {
  // Fetch dynamic content from the backend
  $.ajax({
    url: "get_hero_content.php",
    type: "GET",
    success: function(data) {
      // Update hero banner content with data received
      $("#hero-title").text(data.title);
      $("#hero-description").text(data.description);
    },
    error: function() {
      // Handle error if fetching content fails
      console.error("Failed to fetch dynamic content.");
    }
  });
});
