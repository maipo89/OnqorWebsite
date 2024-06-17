document.addEventListener("DOMContentLoaded", function() {
    var buttons = $('.smooth-scroll');
    Array.prototype.forEach.call(buttons, function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            var anchor = button.closest('a');
            var targetId = anchor.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});
