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
            <h2>PRODUCTS:</h2>
            <p>These are products that we sell in our company:</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Product Category</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Medical Devices</td>
                        <td>
                            • Advanced Imaging Systems <br>
                            • Surgical Robotics <br>
                            • Patient Monitoring Devices <br>
                            • Diagnostic Equipment
                        </td>
                    </tr>
                    <tr>
                        <td>Telemedicine Innovations</td>
                        <td>
                            • Telehealth Platforms <br>
                            • Remote Consultation Devices <br>
                            • Virtual Health Kiosks
                        </td>
                    </tr>
                    <tr>
                        <td>Health Data Analytics Platforms</td>
                        <td>
                            • Data Integration Solutions <br>
                            • Predictive Analytics Tools <br>
                            • Healthcare Dashboards
                        </td>
                    </tr>
                    <tr>
                        <td>Medical Robotics</td>
                        <td>
                            • Surgical Robots for Minimally Invasive Procedures <br>
                            • Rehabilitation Robots <br>
                            • Assisted Living Devices
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php require_once("templates/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>