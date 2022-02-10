<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * FROM girls');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hook Up Girls</title>
        <style>
            .head{
                padding: 10px;
                background: wheat;
                margin: 30px;
            }
            .t{
                margin: 30px;
                width: 90%;
                background: whitesmoke;
                border-radius: 20px;
                padding: 30px;
            }
            body{
                padding: 20px;
            }
            .t tr td{
                background: white;
                padding: 5px;
            }
            button{
                outline:0;
                background: transparent;
                border-radius: 20px;
                width: 100px;
                border: 2px solid greenyellow;
            }
            button:active{
                transform: scale(0.9);
            }
        </style>
    </head>
    <body>
        <h1>Hook-up Girls Around You</h1>
        <h5>To join click on the button below</h5>
        <a href="new.php" target="_blank"><button>Join</button></a>
        <table class="t">
            <th class="head">#</th>
            <th class="head">Name</th>
            <th class="head">Image</th>
            <th class="head">Description</th>
            <th class="head">Price</th>
            <th class="head">Joining Date</th>
            <th class="head">Action</th>
            <?php foreach($products as $i => $product){ ?>
            <tr>
                <th><?php echo $i +1 ?></th>
                <td><?php echo $product['name'] ?></td>
                <td></td>
                <td><?php echo $product['description']?></td>
                <td><?php echo $product['price'] ?></td>
                <td><?php echo $product['create_date'] ?></td>
                <td><button>Call now</button></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>