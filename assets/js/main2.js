document.getElementById('signup-fname').addEventListener('input', function (e) {
    
    e.target.value = e.target.value.replace(/[^A-Za-z]/g, '');
});

document.getElementById('signup-lname').addEventListener('input', function (e) {
    // Replace any non-alphabetic character with an empty string
    e.target.value = e.target.value.replace(/[^A-Za-z]/g, '');
});
document.getElementById('signup-number').addEventListener('input', function (e) {
    this.value = this.value.replace(/\D/g, '');
});
document.getElementById('signup-fname').addEventListener('input', function (e) {
    this.value = this.value.replace(/\d/g, '');
});
document.getElementById('signup-lname').addEventListener('input', function (e) {
    this.value = this.value.replace(/\d/g, '');
});
document.getElementById('signup-adhar').addEventListener('input', function (e) {
    this.value = this.value.replace(/\D/g, '');
});


