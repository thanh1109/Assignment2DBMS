<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="data.css">
    <title>Customer partial payment</title>
</head>
<body>
    <header>
        <h1><span style="color:yellow;">Fabric</span>Agency</h1>
    </header>
    <br>
    <h2>Customer partial payment</h2>
    <?php
        $connection = mysqli_connect('localhost','root','','fabricAgency');
        $sql = "SELECT * FROM CUSTOMERPARTIALPAYMENT";
        $result = mysqli_query($connection,$sql);
    ?>
    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Payment date</th>
                            <th>Amount</th>
                        </tr>
                        <?php while($row = mysqli_fetch_object($result)) { ?>
                        <tr>
                            <td><?php echo $row->CUSTOMERID ?></td>
                            <td><?php echo $row->PAYMENTDATE ?></td>
                            <td><?php echo $row->AMOUNT?></td>
                        </tr>
                        <?php 
                        } 
                        ?>
    </table>
    <br>
    <footer>
           <p style="text-align:center;"> We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. 
            <span><a href="#" style="color:blue;">More info</a></span> </p>
    </footer>
</body>
</html>