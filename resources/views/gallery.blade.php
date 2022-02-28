<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    
</head>
<body>
<div class="container">
        <div class="navbar">
        <a href="http://127.0.0.1:8000">
				<img src="logo.png" class="logo">
                </a>
				<nav>
					<ul>
                        <li><a href="http://127.0.0.1:8000/about">ABOUT ME</a></li>
						<li><a href="http://127.0.0.1:8000/gallery">GALLERY</a></li>
						<li><a href="https://wa.me/+6282232316263">CONTACT</a></li>
						
					</ul>
				</nav>
			</div>
            <hr>
            <div class="time">
            <span id="date_time"></span>
            <script type="text/javascript" src="js/datetime.js"></script>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
            </div>
            </div>
            <div class="container2">

                <!-- Full-width images with number text -->
                <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                    <img src="img1_wide.png" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                    <img src="img2_wide.png" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                    <img src="img3_wide.png" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                    <img src="img4_wide.png" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                    <img src="img5_wide.png" style="width:100%">
                </div>

                <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                    <img src="img6_wide.png" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- Image text -->
                <div class="caption-container">
                <p id="caption"></p>
                </div>

                <!-- Thumbnail images -->
                <div class="row">
                <div class="column">
                    <img class="demo cursor" src="img1.png" style="width:100%" onclick="currentSlide(1)" alt="Snowy Mountains">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img2.png" style="width:100%" onclick="currentSlide(2)" alt="Water Cave">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img3.png" style="width:100%" onclick="currentSlide(3)" alt="Shiny Beach">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img4.png" style="width:100%" onclick="currentSlide(4)" alt="Bamboo Forest">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img5.png" style="width:100%" onclick="currentSlide(5)" alt="Aurora Borealis">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img6.png" style="width:100%" onclick="currentSlide(6)" alt="Swamp Forest">
                </div>
                </div>
                </div>

                <script src="js/script.js"></script>
    
</body>
</html>