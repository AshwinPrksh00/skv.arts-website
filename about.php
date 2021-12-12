<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="icon" href="./assets/icons/S.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include "navbar.php"; ?>


    <!-----About us Content----->


    <section class="about-us">
        <div class="paint-video">
            <img src="assets/images/about_background.jpg" alt="moon">
            <h1>About Me</h1>
        </div>
        <div class="row">
            <div class="about-col c1">
                <img src="assets/images/Profile-pic.jpg">
            </div>

            <div class="about-col c2">
                <h1>Suminder Kaur Vahra</h1>
                <p>The demo then changes the flex-basis on the first item. It will then grow and shrink from that flex-basis. This means
                    that, for example, when the flex-basis of the first item is 200px, it will start out at 200px but then shrink to fit the
                    space available with the other items being at least min-content sized.The demo then changes the flex-basis on the first item. It will then grow and shrink from that flex-basis. This means
                    that, for example, when the flex-basis of the first item is 200px, it will start out at 200px but then shrink to fit the
                    space available with the other items being at least min-content sized.The demo then changes the flex-basis on the first item. It will then grow and shrink from that flex-basis. This means
                    that, for example, when the flex-basis of the first item is 200px, it will start out at 200px but then shrink to fit the
                    space available with the other items being at least min-content sized.</p>
            </div>

        </div>
    </section>


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