 document.getElementById('signup-fname').addEventListener('input', function (e) {
        // Replace any non-alphabetic character with an empty string
        e.target.value = e.target.value.replace(/[^A-Za-z]/g, '');
    });

    document.getElementById('signup-lname').addEventListener('input', function (e) {
        // Replace any non-alphabetic character with an empty string
        e.target.value = e.target.value.replace(/[^A-Za-z]/g, '');
    });
