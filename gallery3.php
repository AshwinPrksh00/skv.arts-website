<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container">
        <div class="heading">
            <h3>Photo <span>Gallery</span></h3>
        </div>

        <div class="box">
            <div class="dream">
                <img id="1" src="assets/101.jpg">
                <img id="2" src="assets/102.jpg">
                <img id="3" src="assets/103.jpg">
                <img id="4" src="assets/104.jpg">
                <img id="5" src="assets/101.jpg">
            </div>

            <div class="dream">
                <img src="assets/106.jpg">
                <img src="assets/101.jpg">
                <img src="assets/108.jpg">
                <img src="assets/101.jpg">
                <img src="assets/102.jpg">
            </div>

            <div class="dream">
                <img src="assets/103.jpg">
                <img src="assets/104.jpg">
                <img src="assets/102.jpg">
                <img src="assets/106.jpg">
                <img src="assets/108.jpg">
            </div>
        </div>
    </div>

    <!-----Footer----->

    <?php include("footer.php"); ?>

    <!-----x--Footer--x----->

    <script>
        var navLinks = document.getElementById("navLinks");
        var navsection = document.getElementsByClassName('sub-header-general')[0];

        function showMenu() {
            navLinks.style.right = "0";
            navsection.style.overflow = "visible";
        }

        function hideMenu() {
            navLinks.style.right = "-250px";
            setTimeout('navsection.style.overflow = "hidden";', 1000);
        }
    </script>
</body>

</html>