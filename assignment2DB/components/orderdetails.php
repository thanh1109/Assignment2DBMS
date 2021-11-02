<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orderdetails.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Order summary</title>
</head>
<body>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        $connection = mysqli_connect('localhost','root','','fabricAgency');
        if(isset($_POST['customer_id']))
            $searchKey = $_POST['customer_id'];
            $sql = "CALL CATEGORY_ORDER_OF_CUSTOMER('$searchKey')";
        
        $result = mysqli_query($connection,$sql);
    ?>
    <header>
        <h1><span style="color:yellow;">Fabric</span>Agency</h1>
    </header>
    <br>
    <h2 style="text-align:center;">Order summary</h2>
    <br>
    <div id="formcontainer">
        <form action="orderdetails.php" method="post">
            <br><br>
            <div class="form-group">
                <label for="customer_id">Customer ID</label>
                <input type="text" name="customer_id">
            </div>
            <button name="search" class="btn btn-primary">
                Search
            </button>
        </form>
    </div>
    <br>
    <h2>The result:</h2>
    <br>
    <table class="table table-bordered">
                        <tr>
                            <th>Order ID</th>
                            <th>Total price</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Customer ID</th>
                            <th>Category code</th>
                            <th>Bolt length</th>
                        </tr>
                        <?php while($row = mysqli_fetch_object($result)) { ?>
                        <tr>
                            <td><?php echo $row->ORDERID ?></td>
                            <td><?php echo $row->TOTALPRICE ?></td>
                            <td><?php echo $row->ORDER_TIME ?></td>
                            <td><?php echo $row->ORDER_DATE ?></td>
                            <td><?php echo $row->CUSTOMERID ?></td>
                            <td><?php echo $row->CATEGORYCODE ?></td>
                            <td><?php echo $row->BOLTLENGTH ?></td>
                        </tr>
                        <?php 
                        } 
                        ?>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br>
    <footer>
           <p style="text-align:center;"> We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. 
            <span><a href="#" style="color:blue;">More info</a></span> </p>
    </footer>
</body>
</html>