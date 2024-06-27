<?php require_once("includes/db_connect.php");?>
<?php include_once("templates/header4.php");?>
<body> 
    <?php include_once("templates/nav.php");?>
    <div class="row">
        <div class="content">
            <h1>Services</h1>
            <form action="" method="" class="goods&services" action="form.php" method="POST">
                <label for="goods">Services</label>
                <select name="" id="services">
                    <option value="">Select a Service</option>
                    <option value="1">Electronic Health Record (EHR) Systems</option>
                    <option value="2">Practice Management Software </option>
                    <option value="3">AI-powered Diagnosis Assistance</option>
                    <option value="4">Remote Monitoring Devices</option>
                    <option value="5">Health Analytic Software</option>
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
                    <option value=""></option>
                    <option value="available">available</option>
                    <option value="not_available">not_available</option>
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