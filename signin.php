<?php require_once("includes/db_connect.php");?>
<?php include_once("templates/header4.php");?>
<body>
    <?php include_once("templates/nav.php");?>
    <div class="row">
        <div class="content">
            <h1>Sign In</h1>
            <form id="signInForm" class="signin" action="sign_in.php" method="POST>
                <label for="email">Email Address</label><br>
                <input type="text" id="email" placeholder="Mail"><br><br>
                <label for="password">Password</label><br>
                <input type="password" id="pass" placeholder="Enter Password"><br><br> 

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign In</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const signInForm = document.getElementById('signInForm');
        const emailInput = document.getElementById('email');
        const passInput = document.getElementById('pass');

        signInForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const email = emailInput.value.trim();
            const pass = passInput.value.trim();

            if (!isValidEmail(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            if (!isValidPassword(pass)) {
                alert('Password must be at least 8 characters long.');
                return;
            }

            // Form submission logic here
            // You can submit the form via AJAX or any other method

            // For now, let's just log the form data
            console.log('Email:', email);
            console.log('Password:', pass);
        });

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPassword(password) {
            return password.length >= 8;
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
