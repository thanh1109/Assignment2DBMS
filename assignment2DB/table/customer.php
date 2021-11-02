<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="data.css">
    <title>Customer</title>
</head>
<body>
    <header>
        <h1><span style="color:yellow;">Fabric</span>Agency</h1>
    </header>
    <br>
    <h2>Customer</h2>
    <?php
        $connection = mysqli_connect('localhost','root','','fabricAgency');
        $sql = "SELECT * FROM CUSTOMER";
        $result = mysqli_query($connection,$sql);
    ?>
    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Address</th>
                            <th>Staff ID</th>
                        </tr>
                        <?php while($row = mysqli_fetch_object($result)) { ?>
                        <tr>
                            <td><?php echo $row->CUSTOMERID ?></td>
                            <td><?php echo $row->FIRSTNAME ?></td>
                            <td><?php echo $row->LASTNAME ?></td>
                            <td><?php echo $row->ADDRESS ?></td>
                            <td><?php echo $row->OFFICESTAFFID ?></td>
                        </tr>
                        <?php 
                        } 
                        ?>
    </table>
    <br><br><br>
    <footer>
           <p style="text-align:center;"> We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. 
            <span><a href="#" style="color:blue;">More info</a></span> </p>
    </footer>
</body>
</html>