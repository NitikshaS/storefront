<?php include 'stock/stock.php';?>
<?php include 'web-service/collect-and-print-data.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic Finds</title>

    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <?php include 'includes/navigation.php';?>
    <div class="wrapper">
        
        <?php include 'includes/masthead.php';?>    

        <p class="products"><h1>Products</h1></p>
            <div class="container text-center">
                    <div class="row">
                        <?php printHTML(); ?>
                    </div>
            </div>

        <?php include 'includes/footer.php';?>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/98a699000d.js" crossorigin="anonymous"></script>
</body>
</html>