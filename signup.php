<?php require_once("includes/db_connect.php");?>
<?php include_once("templates/header4.php");?>

<body>
    <?php include_once("templates/nav.php");?>
    <div class="row">
        <div class="content">
            <h1>Sign Up</h1>
            <form id="signupForm" class="signup" action="sign_up.php" method="POST">
            <label for="Fn">Name:</label><br>
            <input type="text" id="Fn" placeholder="Fullname"><br><br>
            <label for="email">Email Address</label><br>
            <input type="text" id="email" placeholder="Mail"><br><br>
            <label for="password">Password</label><br>
            <input type="password" id="pass" placeholder="Enter Password"><br><br>
            <label for="confirm">Confirm Password</label><br>
            <input type="password" id="confirm" placeholder="Confirm Password"><br><br>
            <label for="birthdate">Date of Birth</label><br>
            <input type="date" id="birthdate"><br><br>
            <label>
                <input type="checkbox" checked="checked" name="remember">Remember me
            </label>
            <p>By creating an account you agree to our <a href="terms.html">Terms & Privacy</a></p>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const signupForm = document.getElementById('signupForm');
        const emailInput = document.getElementById('email');
        const passInput = document.getElementById('pass');
        const confirmInput = document.getElementById('confirm');
        const birthdateInput = document.getElementById('birthdate');
        const nameInput = document.getElementById('Fn');

        signupForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const email = emailInput.value.trim();
            const pass = passInput.value.trim();
            const confirm = confirmInput.value.trim();
            const birthdate = birthdateInput.value;
            const name = nameInput.value.trim();

            if (!isValidEmail(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            if (pass !== confirm) {
                alert('Passwords do not match.');
                return;
            }

            if (!isValidDateRange(birthdate)) {
                alert('Please enter a valid birthdate.');
                return;
            }

            if (!isValidName(name)) {
                alert('Please enter a valid name.');
                return;
            }

            // Form submission logic here
            // You can submit the form via AJAX or any other method

            // For now, let's just log the form data
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Password:', pass);
            console.log('Birthdate:', birthdate);
        });

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidDateRange(date) {
            // Assume a valid date range is between 1900-01-01 and today's date
            const minDate = new Date('1900-01-01');
            const maxDate = new Date();
            return (new Date(date) >= minDate && new Date(date) <= maxDate);
        }

        function isValidName(name) {
            // Assume valid characters are alphabets, spaces, and hyphens
            const nameRegex = /^[A-Za-z\s\-']+$/;
            return nameRegex.test(name);
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
