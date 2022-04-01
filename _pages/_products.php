<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specs World, by Klinton</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- custom js file link  -->
    <script src="../js/script.js" defer></script>
</head>
<body>
    <?php
    print(basename(__FILE__));
    ?>
    <br><br><br>
    <?php
    print($_SERVER['DOCUMENT_ROOT'].lcfirst("/Optical System Project/css/style.css"));
include('../_components/_header.php');
?>
    <section class="home">

        <div class="slide active" style="background: url(../images/Apex.jpg) no-repeat;">
            <div class="content">
                <span>protect your eyes</span>
                <h3>upto 50% off</h3>
                <a href="_pages/products.html" class="btn">shop now</a>
            </div>
        </div>
    
        <div class="slide" style="background: url(../images/Apex\ 2.jpg) no-repeat;">
            <div class="content">
                <span>protect your eyes</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
    
        <div class="slide" style="background: url(../images/Apex\ 3.png) no-repeat;">
            <div class="content">
                <span>protect your eyes</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
    
        <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
        <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>
    
    </section>
    <h2> Product Page Lies here.  </h2>
</body>
</html>