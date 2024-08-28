document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        var isValid = true;

        // Select all required input fields
        var requiredFields = form.querySelectorAll('input[required], textarea[required]');

        // Remove previous error classes
        for (var i = 0; i < requiredFields.length; i++) {
            requiredFields[i].classList.remove('error');
        }

        // Check each required field
        for (var j = 0; j < requiredFields.length; j++) {
            var field = requiredFields[j];
            if (!field.value.trim()) {
                field.classList.add('error');
                isValid = false;
            }
        }

        // Prevent form submission if any required field is empty
        if (!isValid) {
            event.preventDefault();
        }
    });
});
