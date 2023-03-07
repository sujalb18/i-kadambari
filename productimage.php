<?php

// database Connection
$conn = mysqli_connect('localhost', 'root' , '' , 'ecommerce');
if(isset($_POST['submit'])){
    $image_name = $_FILES['image']['name'] ;
    $temp = $_FILES['image']['tmp_name'] ;
    move_uploaded_file($temp , "images/products/$image_name");
    $query = mysqli_query($conn , "INSERT INTO products(image) values('$image_name')");
    
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Select Image to Upload</h1>
        <form method='post' action='#' enctype='multipart/form-data'>
            <div class="form-group">
                <input type="file" name="image" id="file" multiple>
            </div>
            <div class="form-group">
                <input type='submit' name='submit' value='Upload' class="btn btn-primary">
            </div>
        </form>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
        $query = mysqli_query($conn, "SELECT * from products");
        while ($row = mysqli_fetch_array($query)) {
            $image = $row['image'];
        }
        ?>
        <img src="images/products/<?php echo $image; ?>" width="300px" alt="" srcset="">
    </div>
</body>

</html>