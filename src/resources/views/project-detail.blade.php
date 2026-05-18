<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Monitoring Project</title>

    <link rel="stylesheet" href="{{ asset('assets/tooplate-split-portfolio.css') }}">
</head>
<body>

<header>
    <a href="/" class="logo">
        <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="45" fill="none" stroke="#ff3366" stroke-width="3"/>
                <path d="M 30 40 L 50 60 L 70 40" fill="none" stroke="#ff3366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="50" cy="70" r="3" fill="#ff3366"/>
            </svg>
        <span>Arum Portfolio</span>
    </a>
    <nav>
        <ul class="desktop-nav">
            <li><a href="/">Home</a></li>
            <li><a href="#detail">Detail Project</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="project-detail-page" id="detail">
    <div class="detail-container">
        <div class="detail-image">
            <img src="{{ asset('assets/images/Semo.png') }}"
                 alt="service monitoring">
        </div>
        <div class="detail-content">
            <span class="detail-label">
                Pemograman Web
            </span>
            <h1>
                Sistem Monitoring Service Elektronik
            </h1>
            <p class="detail-description">
                Sistem monitoring service elektronik berbasis web ini hadir sebagai solusi digital untuk mengatasi kelemahan pencatatan manual pada bengkel perbaikan, 
                seperti risiko kehilangan data, keterlambatan penanganan, dan sulitnya memantau status barang.
                Sistem ini menawarkan solusi terintegrasi yang mampu mencatat, melacak, dan melaporkan status perbaikan 
                secara real-time, mulai dari status antri, proses, selesai, hingga diambil.
                Melalui fitur pencarian cepat berdasarkan nama pelanggan atau nomor transaksi, sistem ini mempermudah teknisi dalam memperbarui data, 
                sekaligus memberikan transparansi penuh kepada pelanggan dalam memantau proses perbaikan barang mereka.
                4 jenis barang elektronik rumah tangga pada sistem ini yaitu:
            </p>
            <div class="detail-tags">
                <span>Mesin Cuci</span>
                <span>Lampu</span>
                <span>Setrika</span>
                <span>Kipas Angin</span>
            </div>
        </div>
    </div>
</section>

<section class="project-section">
    <div class="project-wrapper">
        <h2>Problem Analysis</h2>
        <p>
            Proses pencatatan manual pada bengkel servis saat ini menjadi kendala utama karena memicu risiko kehilangan data dan menghambat pelacakan status perbaikan barang elektronik pelanggan. 
            Untuk mengatasi masalah tersebut, sistem ini dianalisis dan dirancang dengan kebutuhan fungsional berbasis web yang wajib mencakup manajemen basis data untuk mengamankan data transaksi agar tidak hilang. 
            Selain itu, sistem memerlukan fitur pelacakan yang membagi alur kerja ke dalam empat status berkala (antri, proses, selesai, diambil) serta fitur pencarian cepat agar teknisi dapat memperbarui data jenis kerusakan 
            dan identitas pelanggan secara efisien.
        </p>

        <h2>System Features</h2>
        <ul>
            <li>Monitoring status service elektronik</li>
            <li>Manajemen data pelanggan</li>
            <li>Update progress perbaikan</li>
            <li>Dashboard admin berbasis Filament</li>
            <li>Penyimpanan data service secara digital</li>
        </ul>

        <h2>Architecture & Tech Stack</h2>
        <p>
            Sistem dikembangkan menggunakan konsep MVC Tahap perancangan meliputi perancangan arsitektur sistem, basis data, dan antarmuka pengguna. 
            Arsitektur sistem berbasis web dengan teknologi sebagai berikut:
            Framework = Laravel, Admin Panel = Filament version 3,
            Frontend = Livewire and Blade, 
            Database = Mariadb, 
            Technology = docker

        </p>

        <div class="project-gallery">
            <h2>Diagram</h2>
                <img src="{{ asset('assets/images/erdproject.png') }}"
                    alt="ERD">
        </div>
    </div>

</section>

<!-- CONTACT -->
<section id="contact" class="contact-section">
    <div class="contact-split">
        <div class="contact-info">
            <h2>Let's Work Together</h2>
            <p>
                Have a project in mind?
                I'd love to hear about it.
            </p>
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-item-icon">📧</div>
                    <div class="contact-item-content">
                        <h4>Email</h4>
                        <a href="#">
                            arumsyafitri11@gmail.com
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📱</div>
                    <div class="contact-item-content">
                        <h4>Phone</h4>
                        <a href="#">
                            081382238901
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div class="contact-item-content">
                        <h4>Location</h4>
                        <a href="#">
                            Indonesia
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <form class="contact-form">

            <div class="form-group">

                <label>Name</label>

                <input type="text">

            </div>

            <div class="form-group">

                <label>Email</label>

                <input type="email">

            </div>

            <div class="form-group">

                <label>Message</label>

                <textarea></textarea>

            </div>

            <button type="submit" class="submit-btn">
                Send Message
            </button>

        </form>

    </div>

</section>

<footer>

    <p>
        Copyright © 2026 Arum Portfolio.
    </p>

</footer>

</body>
</html>