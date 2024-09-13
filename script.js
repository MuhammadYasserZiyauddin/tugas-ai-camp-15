document.getElementById('contactForm').addEventListener('submit', function(event) {
    // Prevent form submission
    event.preventDefault();

    // Get form values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Simple validation
    if (name === '' || email === '' || message === '') {
        alert('Harap isi semua field.');
        return;
    }

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert('Harap masukkan alamat email yang valid.');
        return;
    }

    // If validation passes
    alert('Form berhasil disubmit!');
    // You can now send the form data to the server or handle it as needed
});