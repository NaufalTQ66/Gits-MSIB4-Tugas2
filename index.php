<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section starts  -->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">NFLTQ66</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="https://instagram.com/nfl_tq" target="_blank" class="fab fa-instagram"></a>
            <a href="https://github.com/NaufalTQ66" target="_blank" class="fab fa-github"></a>
        </div>

    </header>
    <!-- header section ends -->

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/pictures.jpeg" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hi, I'm Naufal</h3>
            <span data-aos="fade-up"><b>College Student</b></span>
            <p data-aos="fade-up">Just an ordinary man who wants to enjoy life</p>
            <a data-aos="fade-up" href="#about" class="btn">About Me</a>
        </div>

    </section>
    <!-- home section ends -->

    <!-- about section starts  -->
    <section class="about" id="about">
        <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>
        <div class="biography">
            <p data-aos="fade-up">Saya lahir di Purwokerto pada tahun 2002. NFLTQ66 merupakan singkatan dari nama saya Naufal Taufiqurrakhman, 
                dan 66 adalah nomor favorit saya karena itu merupakan tanggal dan bulan lahir saya. Saya lulusan dari TK deket rumahku 😺, 
                SDN 2 Karangklesem, SMPN 7 Purwokerto dan SMKN 2 Purwokerto. Saat ini saya kuliah di Universitas Amikom Purwokerto, Program Studi Ilmu Komputer, 
                Jurusan Informatika, dengan Konsentrasi Sistem Cerdas.</p>
            <div class="bio">
                <h3 data-aos="zoom-in"><b><span>Name : </span>Naufal Taufiqurrakhman</b></h3>
                <h3 data-aos="zoom-in"><b><span>Email : </span>naufaltaufiq66@gmail.com</b></h3>
                <h3 data-aos="zoom-in"><b><span>Address : </span>Purwokerto, Jawa Tengah</b></h3>
                <h3 data-aos="zoom-in"><b><span>Age : </span>20 years</b></h3>
                <h3 data-aos="zoom-in"><b><span>Favorite Animal : </span>Cat &#128571;</b></h3>
            </div>
        </div>
        <div class="skills" data-aos="fade-up">
            <h1 class="heading"> <span>skills</span> </h1>
            <div class="progress">
                <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>85%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>70%</span></h3> </div>
                <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>55%</span></h3> </div>
                <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>75%</span></h3> </div>
            </div>
        </div>
        <div class="edu-exp">
            <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title" data-aos="fade-right">Education</h3>
                    <div class="box" data-aos="fade-right">
                        <span>( 2008 - 2014 )</span>
                        <h3><b>SD N 2 Karangklesem</b></h3>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>( 2014 - 2017 )</span>
                        <h3><b>SMP N 7 Purwokerto</b></h3>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>( 2017 - 2020 )</span>
                        <h3><b>SMK N 2 Purwokerto</b></h3>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <span>( 2020 - Sekarang )</span>
                        <h3><b>Universitas Amikom Purwokerto</b></h3>
                    </div>
                </div>
                <div class="box-container">
                    <h3 class="title" data-aos="fade-left">Experience</h3>
                    <div class="box" data-aos="fade-left">
                        <span>( 2019 )</span>
                        <h3>PT Kombas Digital Internasional</h3>
                        <p>Praktek Kerja Lapangan di PT Kombas Digital Internasional sebagai Publisher</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <span>( 2020 )</span>
                        <h3>Fiverr</h3>
                        <p>Freelance di website Fiverr sebagai Graphic Designer</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <span>( 2020 - 2021 )</span>
                        <h3>Youtube</h3>
                        <p>Video Editor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- portfolio section starts  -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading" data-aos="fade-up"> <span>Portfolio</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <img src="images/meja.png" alt="">
                <h3>Modeling 3D Meja</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="images/redbull.png" alt="">
                <h3>Modeling 3D Kaleng Red Bull</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="images/chess.png" alt="">
                <h3>Modeling 3D Papan Catur</h3>
            </div>
        </div>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <img src="images/logowhite.jpg" alt="">
                <h3>Desain Logo NFL</h3>
            </div>
        </div>
    </section>
    <!-- portfolio section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"> <span>Contact Me</span> </h1>
        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>
    </section>
    <!-- contact section ends -->
    
    <div class="credit"> &copy; Copyright <?php echo date('Y'); ?> <span style="font-weight: 700;"> Naufal Taufiq</span> </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- aos js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

        AOS.init({
            duration:800,
            delay:300
        });

    </script>
   
</body>
</html>