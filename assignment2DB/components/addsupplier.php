<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addsupplier.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add new supplier</title>
</head>
<body>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        $connection = mysqli_connect('localhost','root','','fabricAgency');
        $supplierid = $_POST['supplier_id'];
        $suppliername = $_POST['supplier_name'];
        $supplieraddress = $_POST['supplier_address'];
        $supplierbankaccount = $_POST['bank_account'];
        $taxcode = $_POST['tax_code'];
        $staffid = $_POST['partner_id'];

        if(isset($_POST['submit'])){
            $sql = "CALL ADD_INFO_SUPPLIER('$supplierid','$suppliername','$supplieraddress','$supplierbankaccount','$taxcode','$staffid')";

            if(mysqli_query($connection,$sql)){
                echo "New row is added";
            } else {
                echo "Failed to input data";
            }
        }
    ?>
    <header>
        <h1 style="text-align:center;color: aliceblue;"><span style="color:yellow;">Fabric</span>Agency</h1>
    </header>
    <br>
    <h2 style="text-align:center;">Add new supplier</h2>
    <br>
    <div id="formcontainer" class="border border-secondary">
        <form action="addsupplier.php" method="POST">
            <br>
            <div class="form-group">
                <label for="supplier_id">Supplier ID</label>
                <br>
                <input type="text" name="supplier_id">
            </div>
            <div class="form-group">
                <label for="supplier_name">Supplier name</label>
                <br>
                <input type="text" name="supplier_name">
            </div>
            <div class="form-group">
                <label for="supplier_address">Address</label>
                <br>
                <input type="text" name="supplier_address">
            </div>
            <div class="form-group">
                <label for="bank_account">Bank account</label>
                <br>
                <input type="text" name="bank_account">
            </div>
            <div class="form-group">
                <label for="tax_code">Tax code</label>
                <br>
                <input type="text" name="tax_code">
            </div>
            <div class="form-group">
                <label for="partner_id">Partner staff ID</label>
                <br>
                <input type="text" name="partner_id">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
    <br>
    <footer>
           <p style="text-align:center;"> We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. 
            <span><a href="#" style="color:blue;">More info</a></span> </p>
    </footer>
</body>
</html>

