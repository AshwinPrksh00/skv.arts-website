<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php include "navbar.php"; ?>

    <div class='order-success' style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height:90vh; background: black;">
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_wkebwzpz.json" background="transparent" speed="1" style="width: 300px; height: 300px;" autoplay></lottie-player>
        <h1 style="color: white;">Order Placed</h1>
        <h2 style="color: white;">You Will be contacted soon!!!<h2>
    </div>

    <!-----Footer----->

    <?php include("footer.php"); ?>

    <!-----x--Footer--x----->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
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