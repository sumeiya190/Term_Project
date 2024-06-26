<?php require_once("includes/db_connect.php");?>
<?php require_once("templates/header 2.php");?>
<body>
    <?php include_once("templates/nav.php");?>
    <div class="header">
        <h1>Our Services and Products</h1>
    </div>
    <div class="row">
        <div class="content">
            <p>
                Welcome to our world of healthcare innovation! Dive into our wide-ranging portfolio tailored to the ever-evolving needs of the medical industry. From advanced medical devices to cutting-edge software solutions, we offer a comprehensive approach to transforming healthcare. Join us in revolutionizing patient care and driving medical advancements forward.
            </p>
        </div>
        <div class="content_inside">
            <h2>SERVICES:</h2>
            <p>These are services that we provide in our company:</p> 
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Service Category</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Healthcare Software Solutions</td>
                        <td>
                            • Electronic Health Record (EHR) Systems <br>
                            • Practice Management Software <br>
                            • Telemedicine Platforms <br>
                            • Health Analytics Software
                        </td>
                    </tr>
                    <tr>
                        <td>Remote Patient Monitoring Services</td>
                        <td>
                            • Remote Monitoring Devices <br>
                            • Patient Data Analysis <br>
                            • Real-time Alerts and Notifications
                        </td>
                    </tr>
                    <tr>
                        <td>AI-Driven Healthcare Solutions</td>
                        <td>
                            • AI-powered Diagnosis Assistance <br>
                            • Predictive Analytics <br>
                            • Personalized Treatment Planning
                        </td>
                    </tr>
                    <tr>
                        <td>Blockchain-enabled Healthcare Solutions</td>
                        <td>
                            • Secure Medical Data Management <br>
                            • Transparent Billing and Payments <br>
                            • Immutable Patient Records
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php require_once("templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>