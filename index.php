<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>COMPANY PROFILE - CP PKK</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="" width="70" height="" class="d-inline-block align-text-top">
                Logo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-end navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item mx-3 ">
                        <a class="nav-link py-1" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link py-1" href="tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle py-1" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="layanan1.php">Layanan 1</a></li>
                            <li><a class="dropdown-item" href="layanan2.php">Layanan 2</a></li>
                            <li><a class="dropdown-item" href="layanan3.php">Layanan 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3 py-1" href="kontak.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">
        <img src="assets/images/bg6.jpg" />
        <div class="content">
            <h3>PT. Company Profile</h3>
            <p>Merupakan sebuah perusahaan yang menyediakan kebutuhan online.</p>
            <a href="tentang.php" class="button">Tentang Kami</a>
        </div>
    </div>
    <div class="menu">
        <a href="tentang.php">Tentang</a><a href="kontak.php">Kontak</a>
    </div>
    <div class="features">
        <div class="feature">
            <img class="picture" src="assets/images/img1.png" />
            <h4 class="caption">Layanan 1</h4>
            <p class="summary">Deskripsi Layanan. <a href="layanan1.php">Read more ...</a></p>
        </div>
        <div class="feature">
            <img class="picture" src="assets/images/img1.png" />
            <h4 class="caption">Layanan 2</h4>
            <p class="summary">Deskripsi Layanan. <a href="layanan2.php">Read more ...</a></p>
        </div>
        <div class="feature">
            <img class="picture" src="assets/images/img1.png" />
            <h4 class="caption">Layanan 3</h4>
            <p class="summary">Deskripsi Layanan. <a href="layanan3.php">Read more ...</a></p>
        </div>
    </div>
    <div class="peta">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2638095247994!2d106.95470561396696!3d-6.228909295491041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMK%20NEGERI%201%20KOTA%20BEKASI!5e0!3m2!1sid!2sid!4v1661324652275!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="extras">
        <div class="extra">
            CP enterprise Maintenance System
            <br />
            <a href="#" class="button button-green">Get Brochure</a>
        </div>
    </div>
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>CP<span>CompanyProfile</span></h3>
            <p class="footer-links">
                <a href="index.php">Beranda</a>
                |
                <a href="tentang.php">Tentang Kami</a>
                |
                <a href="layanan.php">Layanan Kami</a>
                |
                <a href="kontak.php">Kontak Kami</a>
            </p>
            <p class="footer-company-name">Copyright © 2022. Template Company Profile PKK.</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa-solid fa-location-dot"></i>
                <p>
                    <span>
                        Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Bekasi Barat
                    </span>
                    Kota Bekasi, Jawa Barat 17134
                </p>
            </div>
            <div>
                <i class="fa-solid fa-phone"></i>
                <p>+62 123-4567-8910</p>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <p><a href="#">support@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang Perusahaan</span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus ullamcorper mattis.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>