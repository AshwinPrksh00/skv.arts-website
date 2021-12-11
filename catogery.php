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

        <div class="catogeries">
            <div class="catogry" id="L">
                <div class="img-box">
                    <img src="assets/101.jpg">
                </div>
                <div class="cat-des">
                    <h3>OIL PAINTING</h3>
                </div>
            </div>

            <div class="catogry" id="R">
                <div class="cat-des ">
                    <h3>BLACK 'N' WHITE</h3>
                </div>
                <div class="img-box">
                    <img src="assets/106.jpg">
                </div>
            </div>

            <div class="catogry" id="L">
                <div class="img-box">
                    <img src="assets/103.jpg">
                </div>
                <div class="cat-des">
                    <h3>Sketch</h3>

                </div>
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

        var cat = document.querySelectorAll('.img-box');
        cat[0].addEventListener("click", () => {
            // console.log(cat[0].innerHTML);
            window.location.href = "gallery1.html";
        })
        cat[1].addEventListener("click", () => {
            // console.log(cat[1].innerHTML);
            window.location.href = "gallery2.html";
        })
        cat[2].addEventListener("click", () => {
            // console.log(cat[2].innerHTML);
            window.location.href = "gallery3.html";
        })
    </script>
</body>

</html>