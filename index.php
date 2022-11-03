<?php require __DIR__ . '/load.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <title><?= $model[$_GET['id']]['nama'] ?></title>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon"/>

    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet"/>
    <link
            href="vendor/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <link
            href="vendor/bootstrap-icons/bootstrap-icons.css"
            rel="stylesheet"
    />
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet"/>
    <link
            href="vendor/glightbox/css/glightbox.min.css"
            rel="stylesheet"
    />
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>

    <link href="assets/css/style.css" rel="stylesheet"/>
</head>

<body>
<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img
                    src="<?= $model[$_GET['id']]['photo'] ?>"
                    alt=""
                    class="img-fluid rounded-circle"
            />
            <h1 class="text-light"><a href="index.php"><?= $model[$_GET['id']]['nama'] ?></a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li>
                    <a href="#hero" class="nav-link scrollto active"
                    ><i class="bx bx-home"></i> <span>Home</span></a
                    >
                </li>
                <li>
                    <a href="#about" class="nav-link scrollto"
                    ><i class="bx bx-user"></i> <span>Tentang</span></a
                    >
                </li>
                <li>
                    <a href="#resume" class="nav-link scrollto"
                    ><i class="bx bx-file-blank"></i> <span>Resume</span></a
                    >
                </li>
                <li>
                    <a href="#portfolio" class="nav-link scrollto"
                    ><i class="bx bx-book-content"></i> <span>Portfolio</span></a
                    >
                </li>
                <li>
                    <a href="#contact" class="nav-link scrollto"
                    ><i class="bx bx-envelope"></i> <span>Kontak</span></a
                    >
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section
        id="hero"
        class="d-flex flex-column justify-content-center align-items-center"
>
    <div class="hero-container" data-aos="fade-in">
        <h1><?= $model[$_GET['id']]['nama'] ?></h1>
        <p>
          <span
                  class="typed"
                  data-typed-items="Frontend,UI/UX, Design"
          ></span>
        </p>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang</h2>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="<?= $model[$_GET['id']]['photo'] ?>" class="img-fluid" alt=""/>
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>UI/UX Designer &amp; Web Developer.</h3>
                    <p class="fst-italic">
                        Menjadi seorang UI/UX Designer dan Web Developer merupakan
                        sebuah tantangan untuk saya karna harus dengan teliti
                        memperhatikan sebuah konsep dasar dan program dalam sebuah
                        website yang akan dibangun.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Nama:</strong> <span><?= $model[$_GET['id']]['nama'] ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Tanggal Lahir:</strong> <span>13 Mei 2000</span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Telepon:</strong> <span>+6281222943438</span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Kota:</strong> <span>Karawang, Jawa Barat</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Umur:</strong> <span>22</span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Email:</strong>
                                    <span>fauzananasta66@gmail.com</span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Pekerjaan:</strong> <span>Freelancer</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Skill</h2>
                <p><em><?= $model[$_GET['id']]['nama'] ?></em></p>
            </div>

            <div class="row skills-content">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="100"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                            ></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="90"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                            ></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="75"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                            ></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="80"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                            ></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="90"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                            ></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Figma <i class="val">65%</i></span>
                        <div class="progress-bar-wrap">
                            <div
                                    class="progress-bar"
                                    role="progressbar"
                                    aria-valuenow="65"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">
            <div class="section-title">
                <h2>Resume</h2>
                <p><em><?= $model[$_GET['id']]['nama'] ?></em></p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Ringkasan</h3>
                    <div class="resume-item pb-0">
                        <h4><?= $model[$_GET['id']]['nama'] ?></h4>
                        <p>
                            <em
                            >Desainer Grafis yang inovatif dan berorientasi pada tenggat
                                waktu dengan pengalaman lebih dari 3 tahun merancang dan
                                mengembangkan materi pemasaran digital/cetak yang berpusat
                                pada pengguna dari konsep awal hingga hasil akhir yang
                                dipoles.</em
                            >
                        </p>
                        <ul>
                            <li>Karawang timur, Karawang, Jawa Barat</li>
                            <li>+6281222943438</li>
                            <li>fauzananasta66@gmail.com</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Pendidikan</h3>
                    <div class="resume-item">
                        <h4>Ilmu Pengetahuan Sosial (Ekonomi)</h4>
                        <h5>2015 - 2018</h5>
                        <p><em>Sman 1 Subang</em></p>
                        <h4>SARJANA SENI HALUS & DESAIN GRAFIS</h4>
                        <h5>2018 - 2021</h5>
                        <p><em>Universitas Bina Nusantara (Binus)</em></p>
                        <h4>Tehnik Informatika</h4>
                        <h5>2021 - Sekarang</h5>
                        <p><em>Universitas Buana Perjuangan, karawang (UBP)</em></p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Pengalaman profesional</h3>
                    <div class="resume-item">
                        <h4>Spesialis desain grafis</h4>
                        <h5>2019 - Sekarang</h5>
                        <p><em>Karawang Timur, Karawang, Jawa Barat</em></p>
                        <ul>
                            <li>
                                Memimpin dalam desain, pengembangan, dan implementasi
                                grafik, tata letak, dan materi komunikasi produksi
                            </li>
                            <li>
                                Delegasikan tugas kepada 9 anggota tim desain dan berikan
                                nasihat tentang semua aspek proyek.
                            </li>
                            <li>
                                Mengawasi penilaian semua materi grafis untuk memastikan
                                kualitas dan akurasi desain
                            </li>
                            <li>
                                Mengawasi penggunaan anggaran proyek produksi yang efisien
                                mulai dari $2.000 - $25.000
                            </li>
                        </ul>
                    </div>
                    <div class="resume-item">
                        <h4>Frontend Developer</h4>
                        <h5>2018 - Sekarang</h5>
                        <p><em>Freelancer</em></p>
                        <ul>
                            <li>
                                Mengembangkan berbagai program pemasaran (logo, brosur,
                                infografis, presentasi, dan iklan
                            </li>
                            <li>
                                Mengelola hingga 5 proyek atau tugas pada waktu tertentu
                                saat berada di bawah tekanan
                            </li>
                            <li>
                                Direkomendasikan dan berkonsultasi dengan klien tentang
                                desain grafis yang paling tepat
                            </li>
                            <li>
                                Membuat 4+ presentasi desain dan proposal sebulan untuk
                                klien dan manajer akun
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Project</h2>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-app">Aplikasi</li>
                        <li data-filter=".filter-card">Website</li>
                    </ul>
                </div>
            </div>

            <div
                    class="row portfolio-container"
                    data-aos="fade-up"
                    data-aos-delay="100"
            >
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img
                                src="assets/img/Screenshot%202022-11-04%20025509.png"
                                class="img-fluid"
                                alt=""/>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img
                                src="assets/img/Screenshot%202022-11-04%20024558.png"
                                class="img-fluid"
                                alt=""
                        />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img
                                src="assets/img/Screenshot_20221104_024323.png"
                                class="img-fluid"
                                alt=""
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row" data-aos="fade-in">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Lokasi:</h4>
                            <p>Karawang Timur, Karawang, Jawa Barat</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>fauzananasta66@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon:</h4>
                            <p>+6281222943438</p>
                        </div>

                        <iframe
                                src=""
                                style="border: 0; width: 100%; height: 290px"
                                allowfullscreen
                        ></iframe>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form
                            action="index.php"
                            method="post"
                            role="form"
                            class="php-email-form"
                    >
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        id="name"
                                        required
                                />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        required
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    name="subjek"
                                    id="subject"
                                    required
                            />
                        </div>
                        <div class="form-group">
                            <label for="textarea">Pesan</label>
                            <textarea
                                    class="form-control"
                                    name="pesan"
                                    rows="10"
                                    id="textarea"
                                    required
                            ></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Pesan terkirim! terima kasih telah memberi pesan.
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright 2022 <strong><span>Portfolio</span></strong>
        </div>
        <div class="credits">
            Designed by <strong><?= $model[$_GET['id']]['nama'] ?></strong>
        </div>
    </div>
</footer>
<!-- End  Footer -->

<a
        href="#"
        class="back-to-top d-flex align-items-center justify-content-center"
><i class="bi bi-arrow-up-short"></i
></a>

<!-- Vendor JS File -->
<script src="vendor/purecounter/purecounter_vanilla.js"></script>
<script src="vendor/aos/aos.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/typed.js/typed.min.js"></script>
<script src="vendor/waypoints/noframework.waypoints.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
