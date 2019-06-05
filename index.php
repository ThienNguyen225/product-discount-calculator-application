<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Product Discount Calculator</title>
</head>
<style>
    h2{
        color: blue;
    }
    .display{
        height:200px; width:300px;
        margin:0;
        padding:10px;
        border:2px #dd33dd solid;
    }
    input {
        padding:5px; margin:5px
    }
    input[name=price]{
        margin-left: 24%;
    }
    input[name=ratio]{
        margin-left: 8%;
    }
    input[type=submit]{
        color: red;
        width: 50%;
        margin-left: 25%;
    }
    form{
        margin-left: 40%;
    }
</style>
<body>
<form method="post">
    <div class="display">
        <h2>Product Discount Calculator</h2>
        <div>Product Description:
            <?php
            if (isset($product)) { ?>
                <p><?php echo $product ?></p>
                <?php
            } else {
                ?>
                <input type="number" name="product">
                <?php
            }
            ?>
        </div>
        <div>List Price:
            <?php
            if (isset($listPrice)) { ?>
                <p><?php echo("$ . $listPrice") ?></p>
                <?php
            } else {
                ?>
                <input type="number" name="price">
                <?php
            }
            ?>
        </div>
        <div>Discount Percent:
            <?php
            if (isset($discountPercent)) { ?>
                <p><?php echo("$discountPercent") ?></p>
                <?php
            }else{
                ?>
                 <input type="number" name="ratio"></div>
                 <?php
             }
            ?>
        <input type="submit" value="submit">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product = $_POST["product"];
    $listPrice = $_POST["price"];
    $discountPercent = $_POST["ratio"];
    $discountAmount = $listPrice * $discountPercent * 0.1;
    $discountPrice = $listPrice - $discountAmount;
}
echo "Product Description: $product . <br>";
echo "List Price: $$listPrice . <br>";
echo "Discount Percent: $discountPercent% . <br>";
echo "Discount Amount: $$discountAmount . <br>";
echo "Discount Price: $$discountPrice . <br>";
?>
</body>
</html>