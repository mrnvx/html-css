// app.js
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("registrationForm");

    // Add an event listener for form submission
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the values from the input fields
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const level = document.getElementById("level").value;

        // Create a query string for redirection
        const queryString = `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&level=${encodeURIComponent(level)}`;

        // Redirect to confirmation.php with query parameters
        window.location.href = `confirmation.php?${queryString}`;
        console.log(name);
    });
    
});
