<?php
include 'db.php';
global $conn;
if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $quantity = $_POST['qt'];
    $q = "INSERT INTO product (productName, price, category, quantity) VALUES ('$pname', '$price', '$category', '$quantity')";
    $result = mysqli_query($conn, $q);
    if($result){
        echo "<script>alert('Product Added Successfull');window.location.href='home.php';</script>";
    }
    else{
        echo "<script>alert('Failed');window.location.href='add_product.php';</script>";
    }
}
?>
<html>
<head>
    <title>
        Add Product
    </title>
</head>
<style>
    h2{
        margin-top: 50px;
    }
    form {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap:20px;
    }
    form input{
        height: 40px;
        width: 300px;
    }
</style>
<body>
<center>
    <h2>Add Product</h2>
    <form action="" method="post">
        <input type="text" placeholder="Enter Product Name" name="pname" required>
        <input type="number" placeholder="Enter Price" name="price" required>
        <input type="text" placeholder="Enter Category" name="category" required>
        <input type="number" placeholder="Enter Quantity" name="qt" required>
        <input type="submit" value="Add Product" name="submit">
    </form>
</center>
</body>
</html>

