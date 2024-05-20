<?php include 'templates/header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center">Contact Us</h2>
    <p class="text-center">Feel free to reach out to us with any questions or concerns.</p>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="process_contact.php" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">Please provide your name.</div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
                <div class="form-group">
                    <label for="phone">Telephone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                    <div class="invalid-feedback">Please provide a valid telephone number.</div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    <div class="invalid-feedback">Please provide a message.</div>
                </div>
                <button class="btn btn-primary" type="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php include 'templates/footer.php'; ?>
