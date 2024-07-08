<?php require_once("includes/db_connect.php");?>
<?php include_once("templates/header4.php");?>
<body> 
    <?php include_once("templates/nav.php");?>
    <div class="row">
        <div class="content">
            <h1>Goods</h1>
            <form action="" method="" class="goods&services" action="form.php" method="POST">
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
                <label for="price">Price ($):</label>
                    <input type="number" id="price" name="price" required>
                    <br><br>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity">
                    <br><br>
                    <label for="availability">Availability:</label>
                    <select id="availability" name="">
                        <option value=""></option>
                        <option value="pre_order">pre_order</option>
                        <option value="in_stock">in_stock</option>
                        <option value="out_of__stock">out_of__stock</option>
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