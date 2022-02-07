<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=webshop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Macho Man Gym</title>
    <link href="admincss.css" rel="stylesheet"
    ">
</head>
<body>
<div class="header">
    <header class="d-flex justify-content-center py-3">
        <ul class="navbar">
            <li><p>Admin Panel</p></li>
            <li><a href="loginp.php">Logout</a></li>
        </ul>
    </header>
</div>
<div class="main">
    <table class="table">
        <thead>
        <th>
        <th scope="col">title</th>
        <th scope="col">image</th>
        <th scope="col">description</th>
        <th scope="col">category</th>
        <th scope="col">price</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($stmt->fetchAll() as $product) { ?>
            <tr>
                <th scope="row">1</th>
                <td> <?php echo $product['title'] ?> </td>
                <td> <?php echo $product['image'] ?> </td>
                <td> <?php echo $product['description'] ?></td>
                <td> <?php echo $product['category_id'] ?></td>
                <td> <?php echo $product['price'] ?></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>