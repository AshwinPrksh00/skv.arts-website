<?php
    require_once "pdo.php";
    if (isset($_POST['name']) && isset($_POST['phno']) && isset($_POST['addr']) && isset($_POST['paint']) && isset($_POST['desc'])) {
        $stmt = $pdo->prepare('INSERT INTO orders ( name, phno, addr, paint, description ) VALUES (:na, :ph, :ad, :pa, :dc)');
        $stmt->execute(array(
                ':na' => $_POST['name'],
                ':ph' => $_POST['phno'],
                ':ad' => $_POST['addr'],
                ':pa' => $_POST['paint'],
                ':dc' => $_POST['desc'])
        );

        $to = "ak2494@gmail.com";
        $subject = "Order";
        $message = "Name: ".$_POST['name']."\nPhone Number: ".$_POST['phno']."\nEmail Address: ". $_POST['addr']."\nPainting Style". $_POST['paint']."\nDescription: ". $_POST['desc'];
        $from = "kumarayush2418@gmail.com";
        $header = "From : $from";

        if(mail($to, $subject, $message, $header)){
            echo "Mail Sent";
            header('Location: index.html');
            return;
        }else{
            echo "Error";
        }
    }
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="sub-header-general">
        <nav>
            <a class="title" href="index.html">SKV</a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="catogery.html">GALLERY</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="order.php">ORDER</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>



    </section>

    <section class="order-part">
        <div class="order-box">
            <div class="head">
                <h1>Order Page</h1>
            </div>

            <form method="POST" class="order-form">
                <div class="form-input">
                    <label for="name">NAME</label>
                    <input class="filed" type="text" id="name" name="name" placeholder=' Full Name'>
                </div>

                <div class="form-input">
                    <label for="phno">PHONE NUMBER</label>
                    <input class="filed" type="text" id="phno" name="phno" placeholder=' Whatsapp Number'>
                </div>


                <div class="form-input">
                    <label for="addr">E-MAIL ADDRESS</label>
                    <input class="filed" type="text" id="addr" name="addr" placeholder=' E-mail Address'>
                </div>


                <div class="form-input">
                    <label for="paint-style">Painting Style</label>
                    <select class="field" name="paint" id="styles" place>
                        <option value="null">--Select Style--</option>
                        <option value="oil">Oil</option>
                        <option value="sketch">Sketch</option>
                        <option value="bw">Black n White</option>
                        <option value="abs">Abstract</option>
                    </select>
                </div>


                <div class="form-input CANVAS">
                    <label for="size">Canvas Size</label>
                    <div class="can-size">
                        <div class="size-a4">A4</div>
                        <div class="size-a3">A3</div>
                    </div>
                </div>


                <div class="form-input">
                    <label for="desc">DESCRIPTION</label>
                    <textarea class="filed" name="desc" id="desc" cols="60" rows="8" placeholder="   Description of the work you want to commission"></textarea>
                </div>

                <input id="button" type="submit" value="SUBMIT" name="submit">
            </form>
        </div>
    </section>

    <!-----Footer----->

    <section class="footer">
        <div class="icons">
            <a href="https://www.instagram.com/skv.arts/"><i class="fa fa-instagram"></i></a>
            <a href="https://m.facebook.com/profile.php?id=100018278464932&ref=content_filter"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/suminder-kaur-01756b21b"><i class="fa fa-linkedin"></i></a>
            <a href="https://twitter.com/SuminderKaur15?t=PUSSJxjCqYVfQ6LVC3giww&s=08"><i class="fa fa-twitter"></i></a>
        </div>

    </section>

    <!-----x--Footer--x----->
    <script>
        var select = document.getElementById('styles');
        var canvas = document.getElementsByClassName('CANVAS')[0];
        canvas.style.display = "none";
        var canvaa3 = document.getElementsByClassName('size-a3')[0];
        var canvaa4 = document.getElementsByClassName('size-a4')[0];

        canvaa3.addEventListener('click', () => {
            canvaa3.style.borderColor = "#f44336";
            canvaa3.style.color = "#f44336";
            canvaa3.style.boxShadow = "3px 3px 1px #f44336";
            canvaa4.style.borderColor = "#fff";
            canvaa4.style.color = "#fff";
            canvaa4.style.boxShadow = "none";
        })

        canvaa4.addEventListener('click', () => {
            canvaa4.style.borderColor = "#f44336";
            canvaa4.style.color = "#f44336";
            canvaa4.style.boxShadow = "3px 3px 1px #f44336";
            canvaa3.style.borderColor = "#fff";
            canvaa3.style.color = "#fff";
            canvaa3.style.boxShadow = "none";
        })

        select.addEventListener('click', () => {
            if (select.value == "null") {
                canvas.style.display = "none";
            } else {
                canvas.style.display = "flex";
            }

        })
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