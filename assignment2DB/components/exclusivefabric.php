<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exclusivefabric.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exclusive fabric categories</title>
</head>
<body>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        $connection = mysqli_connect('localhost','root','','fabricAgency');
        if(isset($_POST['supplier']))
            $searchKey = $_POST['supplier'];
            $sql = "CALL ONE_SUPPLIER('$searchKey')";
            
        $result = mysqli_query($connection,$sql);
    ?>
    <header>
        <h1><span style="color:yellow;">Fabric</span>Agency</h1>
    </header>
    <br>
    <h2 style="text-align:center;">Exclusive Fabric Categories</h2>
    <br>
    <div id="formcontainer">
        <form action="exclusivefabric.php" method="POST">
            <br>
            <input type="text" name="supplier" placeholder="Supplier ID">
            <button class="btn btn-primary">
                Search
            </button>
        </form>
    </div>
    <br>
    <h2>The result:</h2>
    <br>
    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Category name</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Supplier ID</th>
                        </tr>
                        <?php while($row = mysqli_fetch_object($result)) { ?>
                        <tr>
                            <td><?php echo $row->FABRICID ?></td>
                            <td><?php echo $row->CATEGORYNAME ?></td>
                            <td><?php echo $row->CATEGORYCOLOR ?></td>
                            <td><?php echo $row->CATEGORYQUANTITY ?></td>
                            <td><?php echo $row->SUPPLIERID ?></td>
                        </tr>
                        <?php 
                        } 
                        ?>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
           <p style="text-align:center;"> We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. 
            <span><a href="#" style="color:blue;">More info</a></span> </p>
    </footer>
</body>
</html>