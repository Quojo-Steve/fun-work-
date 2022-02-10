<?php
$conn = new PDO('mysql:host=localhost;port=3306;dbname=product', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['slay'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $time = date('Y-m-d H:i:s');


    $new = $conn->prepare("INSERT INTO girls(name, image, description, price, create_date) VALUES(:name,:image, :description, :price, :date)");
    $new->bindValue(':name', $name );
    $new->bindValue(':image', '' );
    $new->bindValue(':description', $description );
    $new->bindValue(':price', $price );
    $new->bindValue(':date', $time );
    $new->execute();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Joining Page</title>

    </head>
    <body>
        <h1>Join Our Hoard of Horny Bitches</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
            <label>Image</label><br>
            <input type="file" name="image"><br><br>
            <label>Slay Name</label><br>
            <input type="text" name="slay" required><br><br>
            <label>Description</label><br>
            <textarea name="description" cols="30" rows="10"></textarea><br><br>
            <label>Price</label><br>
            <input type="number" name="price" step="0.01" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
