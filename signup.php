<?php require_once("includes/db_connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamsy BioTech Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/signx.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Hamsy BioTech Inc.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services & Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="services.html">Services</a></li>
                            <li><a class="dropdown-item" href="products.html">Products</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="industry.html">Industries</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Insight & Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li><a class="dropdown-item" href="insights.html">Insights</a></li>
                            <li><a class="dropdown-item" href="resources.html">Resources</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career.html">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forms.html">Goods & Services Form</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="content">
            <h1>Sign Up</h1>
            <form id="signupForm" class="signup">
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
