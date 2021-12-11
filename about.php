<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a class="title" href="index.php">SKV</a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="catogery.php">GALLERY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="order.php">ORDER</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <h1>About Me</h1>
    </section>

    <!-----About us Content----->

    <section class="about-us">
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
        var navsection = document.getElementsByClassName('sub-header')[0];

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