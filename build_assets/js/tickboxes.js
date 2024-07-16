document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('#serviceinterests input[type="checkbox"]');

    Array.prototype.forEach.call(checkboxes, function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                this.parentElement.classList.add('checked');
            } else {
                this.parentElement.classList.remove('checked');
            }
        });
    });
});
