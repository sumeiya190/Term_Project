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
            <h1>Goods&Services</h1>
            <form action="" method="" class="goods&services">
                <label for="goods">Products</label>
                <select name="" id="goods">
                    <option value="">Select a Product</option>
                    <option value="1">Advanced Imaging Systems</option>
                    <option value="2">Surgical Robotics</option>
                    <option value="3">Patient Monitoring Devices</option>
                    <option value="4">Diagnostic Equipment</option>
                    <option value="5">Rehabilitation Robots</option>
                    <option value="6">Remote Consultation Devices</option>
                    <option value="7">Assisted Living Devices</option>
                </select>
                <br><br>
                
                <form action="" method="" class="goods&services">
                    <label for="goods">Services</label>
                    <select name="" id="services">
                        <option value="">Select a Service</option>
                        <option value="1">Electronic Health Record (EHR) Systems</option>
                        <option value="2">Telemedicine Platforms</option>
                        <option value="3">AI-powered Diagnosis Assistance</option>
                        <option value="4">Remote Monitoring Devices</option>
                        <option value="5">Secure Medical Data Management</option>
                    </select>
                    <br><br>

                    <label for="price">Price ($):</label>
                    <input type="number" id="price" name="price" required>
                    <br><br>
                    <label for="quantity">Quantity (if applicable):</label>
                    <input type="number" id="quantity" name="quantity">
                    <br><br>
                    <label for="availability">Availability:</label>
                    <select id="availability" name="">
                        <option value="">Available</option>
                        <option value="in_stock">In Stock</option>
                        <option value="out_of_stock">Out of Stock</option>
                        <option value="preorder">Preorder</option>
                    </select>
                    <br><br>
                    <div class="clearfix">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <button type="submit" class="orderbtn">Order</button>
                    </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>