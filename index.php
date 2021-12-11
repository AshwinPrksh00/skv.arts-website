<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="header">
        <nav>
            <a class="title" href="index.html">SKV</a>
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

        <div class="text-box">
            <h1 id="name-text"><span id="fn">Suminder</span> <span id="mn">Kaur</span> <span id="ln">Vahra</span></h1>
            <br>
            <p style="font-size:22px">ARTIST</p>
            <!-- <a href="order.html" class="order-btn">Get Your Own Potrait</a> -->
        </div>
        <div class="arrow">
            <span></span>
            <!-- <span></span>
            <span></span> -->

        </div>
    </section>

    <!-----Part2----->

    <section class="campus">
        <h1>Courses we Offer</h1>
        <p>Motorola says Hello Moto with new spot featuring Moto Z family.</p>

        <div class="row">
            <div class="campus-col">
                <img src="css/jocker.jpeg">
                <div class="layer">
                    <h3>JOKER</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="css/kobe.png">
                <div class="layer">
                    <h3>KOBE</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="css/jocker.jpeg">
                <div class="layer">
                    <h3>JOKER</h3>
                </div>
            </div>
        </div>

    </section>


    <!-----x--Part2--x----->

    <!-----Part3----->

    <section class="part3">
        <div class="cources">
            <h1>Courses we Offer</h1>
            <p>Motorola says Hello Moto with new spot from Ogilvy featuring Moto Z family.</p>

            <div class="row">
                <div class="cource-col">
                    <h3>Russian</h3>
                    <p>Motorola is continuing its commercial that features the shareability of its Moto Z family.</p>
                </div>

                <div class="cource-col">
                    <h3>Asian</h3>
                    <p>Motorola is continuing its commercial that features the shareability of its Moto Z family.</p>
                </div>

                <div class="cource-col">
                    <h3>Latin</h3>
                    <p>Motorola is continuing its commercial that features the shareability of its Moto Z family.</p>
                </div>
            </div>
        </div>

    </section>

    <!-----x--Part3--x----->

    <!-----Part4----->
    <section class="facilities">

        <h1>Courses we Offer</h1>
        <p>Motorola says Hello Moto with Z family.</p>

        <div class="row">
            <div class="facilities-col">
                <img src="css/dp.jpg">
                <h3>Potrait</h3>
                <p>Motorola says Hello Moto with new spot featuring Moto Z family.</p>
            </div>

            <div class="facilities-col">
                <img src="css/dp.jpg">
                <h3>Potrait</h3>
                <p>Motorola says Hello Moto with new spot featuring Moto Z family.</p>
            </div>

            <div class="facilities-col">
                <img src="css/dp.jpg">
                <h3>Potrait</h3>
                <p>Motorola says Hello Moto with new spot featuring Moto Z family.</p>
            </div>
        </div>


    </section>

    <!-----x--Part4--x----->

    <!-----Footer----->

    <?php include("footer.php"); ?>

    <!-----x--Footer--x----->
    <script>
        var navLinks = document.getElementById("navLinks");
        var name = document.getElementById("name-text");
        var arrow = document.querySelector('.arrow span');
        arrow.addEventListener("click", () => {
            document.querySelector('.campus').scrollIntoView({
                behavior: "smooth",
                inline: "nearest"
            });
        })
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        if (isMobile) {
            name.innerHTML = "Suminder<br>Kaur<br>Vahra";
        }

        function showMenu() {
            navLinks.style.display = 'inline-block';
            navLinks.style.right = "0";

        }

        function hideMenu() {
            navLinks.style.right = "-250px";
            // navLinks.style.display = 'none';
        }
    </script>
</body>

</html>