<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css">
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
            <div class='row'>
                <div class='col'>
                    <div class='bio'>
                    <h1>AURYNO NAGATA ADYATMA</h1>
                    <h3>Mahasiswa Politeknik Negeri Malang</h3>
                    <div class='box'>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Odio earum explicabo obcaecati unde incidunt doloremque qui ex 
                            vitae nobis quaerat adipisci aperiam quidem nostrum quae, r
                            epudiandae, laborum dignissimos, culpa quos!
                            <br><br>
                            <b>TTL</b> : Malang 19 Mei 2000 <br>
                            <b>Kelamin</b> : Laki-laki <br>
                            <b>Daerah</b> : Malang <br>
                            <b>Jurusan</b> : Teknologi Informasi <br>
                            <b>Program Studi</b> : D4 Teknik Informasi <br>
                            
                        </p>
                    </div>

                    <div class='box2'>
                            <a href="https://www.facebook.com/aga.d.rino">
                            <img src="fb.png" class="sosmed"></a>
                            <a href="https://www.instagram.com/auryno.nagata/">
                            <img src="ig.png" class="sosmed"></a>
                            <a href="mailto:aurynoaga19@gmail.com">
                            <img src="gmail.png" class="sosmed"></a>
                        
                    </div>
                    </div>
                </div>
                <div class='col'>
                        <div class="photo">
                        <img src="myphoto.jpeg" width="350px" height="auto";>
                        <div class="photobox">
                        <p>My Photo</p>
                        </div>
                        </div>
                        
                        
                    </div>
            </div>
           
            </div>
    
</body>
</html>