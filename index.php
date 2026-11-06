<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BAGLOG BRIQUET</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- ==================================================
     NAVBAR
================================================== -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#beranda">
            🌱 BAGLOG BRIQUET
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu"
                aria-controls="menu"
                aria-expanded="false"
                aria-label="Buka atau tutup navigasi">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                  <a class="nav-link" href="index.php">Beranda</a>  
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="pages/tentang.php">Tentang</a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="pages/bahan.php">Bahan</a> 
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="pages/proses.php">Cara Pembuatan</a>  
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="pages/harga.php">Harga</a> 
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="pages/manfaat.php">Manfaat</a> 
                </li>

                        <!-- Menu Galeri -->
                <li class="nav-item">
                   <a class="nav-link" href="pages/galeri.php">Galeri</a> 
                </li>
    

            </ul>
            <form class="d-flex ms-lg-3 mt-3 mt-lg-0" id="formPencarian" role="search">
    <input
        class="form-control me-2"
        type="search"
        id="kataKunci"
        placeholder="Cari informasi..."
        aria-label="Cari informasi"
    >
    <button class="btn btn-outline-light" type="submit">
        Cari
    </button>
</form>

        </div>

    </div>

</nav>


<!-- ==================================================
     HERO / BERANDA
================================================== -->
<section id="beranda" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <!-- KIRI -->
            <div class="col-lg-7">

                <span class="badge-title">
                    ♻️ INOVASI RAMAH LINGKUNGAN
                </span>

                <h1>
                    Dari Limbah Baglog
                    <span>Menjadi Energi Bernilai</span>
                </h1>

                <p>
                    BAGLOG BRIQUET merupakan konsep pemanfaatan
                    limbah baglog jamur menjadi briket sebagai
                    alternatif bahan bakar yang lebih bernilai
                    dan ramah lingkungan.
                </p>

                <a href="#proses"
                   class="btn btn-success btn-lg">

                    Lihat Cara Pembuatan

                </a>

            </div>


            <!-- KANAN -->
            <div class="col-lg-5 mt-4 mt-lg-0">

                <div class="hero-card">

                    <div class="fire-icon">
                        🔥
                    </div>

                    <h3>
                        Briket Baglog
                    </h3>

                    <p>
                        Mengubah limbah menjadi produk
                        yang memiliki nilai guna dan
                        nilai ekonomi.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <!-- STATISTIK BAGLOG BRIQUET -->
<div class="container mt-5">
    <div class="row g-3 text-center">

        <div class="col-md-4">
            <div class="stat-card">
                <h3>7</h3>
                <p>Tahapan Pembuatan</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <h3>3</h3>
                <p>Bahan Utama</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <h3>♻</h3>
                <p>Pemanfaatan Limbah</p>
            </div>
        </div>

    </div>
</div>

</section>


<!-- ==================================================
     TENTANG PRODUK
================================================== -->
<section id="tentang" class="section">

    <div class="container text-center">

        <span class="section-label">
            TENTANG PRODUK
        </span>

        <h2>
            Apa Itu BAGLOG BRIQUET?
        </h2>

        <p class="section-text">

            Baglog merupakan media tanam yang digunakan
            dalam budidaya jamur. Setelah masa produksi
            jamur selesai, baglog biasanya menjadi limbah.

            Melalui proses pengolahan, limbah tersebut
            dapat dimanfaatkan sebagai bahan dasar
            pembuatan briket.

        </p>

    </div>

</section>


<!-- ==================================================
     BAHAN
================================================== -->
<section id="bahan" class="section bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                BAHAN
            </span>

            <h2>
                Bahan yang Dibutuhkan
            </h2>

            <p>
                Beberapa bahan yang dapat digunakan
                dalam pembuatan briket baglog.
            </p>

        </div>


        <div class="row g-4">


            <!-- BAHAN 1 -->
            <div class="col-md-4">

                <div class="info-card">

                    <div class="icon">
                        🍄
                    </div>

                    <h4>
                        Limbah Baglog
                    </h4>

                    <p>
                        Baglog bekas budidaya jamur
                        yang sudah tidak digunakan
                        dapat dimanfaatkan sebagai
                        bahan utama briket.
                    </p>

                </div>

            </div>


            <!-- BAHAN 2 -->
            <div class="col-md-4">

                <div class="info-card">

                    <div class="icon">
                        🌾
                    </div>

                    <h4>
                        Tepung Tapioka
                    </h4>

                    <p>
                        Tepung tapioka digunakan sebagai
                        bahan perekat agar bahan briket
                        dapat menyatu dan terbentuk.
                    </p>

                </div>

            </div>


            <!-- BAHAN 3 -->
            <div class="col-md-4">

                <div class="info-card">

                    <div class="icon">
                        💧
                    </div>

                    <h4>
                        Air
                    </h4>

                    <p>
                        Air digunakan untuk membantu
                        proses pencampuran bahan
                        perekat dengan bahan utama.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ==================================================
     CARA PEMBUATAN
================================================== -->
<section id="proses" class="section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                PROSES
            </span>

            <h2>
                Cara Pembuatan Briket
            </h2>

            <p>
                Tahapan sederhana pemanfaatan limbah
                baglog menjadi briket.
            </p>
           

        </div>


        <div class="process-list">


    <!-- LANGKAH 1 -->
<div class="process-item">

    <span>01</span>

    <div>
        <h4>Pengumpulan Baglog</h4>

        <p>
            Kumpulkan limbah baglog yang sudah tidak digunakan.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Pilih baglog bekas budidaya jamur.
                Pisahkan dari kotoran dan benda asing
                sebelum masuk ke tahap pengolahan.
            </p>
        </details>
    </div>

</div>

            </div>


    <!-- LANGKAH 2 -->
<div class="process-item">

    <span>02</span>

    <div>
        <h4>Persiapan Bahan</h4>

        <p>
            Siapkan bahan tambahan yang diperlukan untuk membuat briket.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Siapkan limbah baglog yang sudah dipisahkan
                dari kotoran. Bahan tambahan seperti tepung
                tapioka dan air dapat digunakan sebagai perekat.
                Jumlah bahan disesuaikan dengan kebutuhan
                dan hasil uji coba pembuatan briket.
            </p>
        </details>
    </div>

</div>

            </div>


    <!-- LANGKAH 3 -->
<div class="process-item">

    <span>03</span>

    <div>
        <h4>Pengeringan Baglog</h4>

        <p>
            Keringkan limbah baglog sebelum diproses lebih lanjut.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Jemur baglog di bawah sinar matahari atau gunakan
                alat pengering hingga kadar airnya berkurang.
                Pastikan bahan tidak terlalu basah agar lebih
                mudah diolah menjadi arang dan dicampur dengan
                bahan perekat.
            </p>
        </details>
    </div>

</div>

            </div>


    <!-- LANGKAH 4 -->
<div class="process-item">

    <span>04</span>

    <div>
        <h4>Pengarangan Baglog</h4>

        <p>
            Ubah baglog kering menjadi arang sebagai bahan utama briket.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Baglog kering diproses melalui pengarangan
                menggunakan alat yang sesuai dan dengan
                pengawasan yang baik. Proses ini harus dilakukan
                di tempat terbuka atau area berventilasi baik,
                jauh dari bahan mudah terbakar, karena dapat
                menghasilkan asap dan gas berbahaya.
            </p>
        </details>
    </div>

</div>

            </div>


    <!-- LANGKAH 5 -->
<div class="process-item">

    <span>05</span>

    <div>
        <h4>Pencampuran Bahan</h4>

        <p>
            Campurkan arang baglog dengan bahan perekat hingga merata.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Haluskan arang baglog, kemudian campurkan dengan
                perekat seperti tepung tapioka yang telah dimasak
                bersama air hingga membentuk larutan kental.
                Aduk sampai merata agar adonan mudah dicetak.
            </p>
        </details>
    </div>

</div>

            </div>


    <!-- LANGKAH 6 -->
<div class="process-item">

    <span>06</span>

    <div>
        <h4>Pencetakan Briket</h4>

        <p>
            Cetak adonan menjadi bentuk briket yang diinginkan.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Masukkan adonan arang dan perekat ke dalam
                cetakan. Tekan adonan hingga cukup padat dan
                bentuknya seragam. Gunakan cetakan yang sesuai
                agar briket mudah ditangani dan dikeringkan.
            </p>
        </details>
    </div>

</div>

            </div>


    <!-- LANGKAH 7 -->
<div class="process-item">

    <span>07</span>

    <div>
        <h4>Pengeringan dan Penyimpanan</h4>

        <p>
            Keringkan briket hingga siap disimpan dan digunakan.
        </p>

        <details class="process-detail">
            <summary>Lihat Detail</summary>
            <p>
                Jemur briket atau gunakan alat pengering hingga
                cukup kering dan kuat. Pastikan briket benar-benar
                kering sebelum disimpan agar tidak mudah berjamur.
                Simpan di tempat yang kering, sejuk, dan terlindung
                dari air.
            </p>
        </details>
    </div>

</div>

            </div>


        </div>

    </div>

</section>


<!-- ==================================================
     HARGA
================================================== -->
<section id="harga" class="section bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                HARGA
            </span>

            <h2>
                Harga Produk
            </h2>

            <p>
                Contoh harga produk BAGLOG BRIQUET.
            </p>

        </div>


        <div class="row justify-content-center g-4">


            <!-- 500 GRAM -->
            <div class="col-md-4">

                <div class="price-card">

                    <h4>
                        500 Gram
                    </h4>

                    <h2>
                        Rp8.000
                    </h2>

                    <p>
                        Briket baglog kemasan 500 gram.
                    </p>

                </div>

            </div>


            <!-- 1 KG -->
            <div class="col-md-4">

                <div class="price-card featured">

                    <span class="popular">
                        POPULER
                    </span>

                    <h4>
                        1 Kg
                    </h4>

                    <h2>
                        Rp15.000
                    </h2>

                    <p>
                        Briket baglog kemasan 1 kilogram.
                    </p>

                </div>

            </div>


            <!-- 5 KG -->
            <div class="col-md-4">

                <div class="price-card">

                    <h4>
                        5 Kg
                    </h4>

                    <h2>
                        Rp65.000
                    </h2>

                    <p>
                        Briket baglog untuk kebutuhan
                        lebih banyak.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- ==================================================
     MANFAAT
================================================== -->
<section id="manfaat" class="section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                MANFAAT
            </span>

            <h2>
                Manfaat untuk Lingkungan & Masyarakat
            </h2>

            <p>
                Pemanfaatan limbah baglog memberikan
                manfaat bagi lingkungan dan masyarakat.
            </p>

        </div>


        <div class="row g-4">


            <!-- LINGKUNGAN -->
            <div class="col-md-6">

                <div class="benefit-card">

                    <div class="benefit-icon">
                        🌱
                    </div>

                    <h3>
                        Manfaat bagi Lingkungan
                    </h3>

                    <ul>

                        <li>
                            Mengurangi limbah baglog jamur.
                        </li>

                        <li>
                            Mengurangi pembuangan limbah
                            secara sembarangan.
                        </li>

                        <li>
                            Mengubah limbah menjadi
                            produk yang memiliki nilai guna.
                        </li>

                        <li>
                            Mendukung pemanfaatan energi
                            alternatif.
                        </li>

                    </ul>

                </div>

            </div>


            <!-- MASYARAKAT -->
            <div class="col-md-6">

                <div class="benefit-card">

                    <div class="benefit-icon">
                        👨‍👩‍👧‍👦
                    </div>

                    <h3>
                        Manfaat bagi Masyarakat
                    </h3>

                    <ul>

                        <li>
                            Menambah nilai ekonomi limbah.
                        </li>

                        <li>
                            Membuka peluang usaha baru.
                        </li>

                        <li>
                            Dapat dikembangkan sebagai
                            usaha rumahan.
                        </li>

                        <li>
                            Memberikan peluang pendapatan
                            tambahan.
                        </li>

                    </ul>

                </div>

            </div>


        </div>

    </div>

</section>
<!-- GALERI PROSES -->
<section id="galeri" class="section gallery-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-label">DOKUMENTASI</span>
            <h2>Galeri Proses Briket</h2>
            <p class="section-text">
                Dokumentasi proses pemanfaatan limbah baglog
                menjadi briket yang lebih bermanfaat.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="gallery-card">
                    <div class="gallery-placeholder">🌱</div>
                    <h5>Pengumpulan Baglog</h5>
                    <p>Limbah baglog dikumpulkan dan dipilah.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-card">
                    <div class="gallery-placeholder">🔥</div>
                    <h5>Proses Pengarangan</h5>
                    <p>Baglog kering diolah menjadi arang.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-card">
                    <div class="gallery-placeholder">♻️</div>
                    <h5>Hasil Briket</h5>
                    <p>Arang dicampur perekat, dicetak, dan dikeringkan.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==================================================
     CTA
================================================== -->
<section class="cta">

    <div class="container text-center">

        <h2>
            ♻️ Limbah Bisa Menjadi Nilai
        </h2>

        <p>
            Bersama-sama memanfaatkan limbah baglog
            menjadi produk yang bermanfaat bagi
            lingkungan dan masyarakat.
        </p>

        <a href="#beranda"
           class="btn btn-light">

            Kembali ke Atas

        </a>

    </div>

</section>


<!-- FOOTER BAGLOG BRIQUET -->
<footer class="footer-baglog">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6">
                <h4>🌱 BAGLOG BRIQUET</h4>
                <p>
                    Mengubah limbah baglog jamur menjadi
                    produk yang lebih bermanfaat bagi
                    lingkungan dan masyarakat.
                </p>
            </div>

            <div class="col-md-3">
                <h5>Navigasi</h5>
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang</a>
                <a href="#bahan">Bahan</a>
                <a href="#proses">Cara Pembuatan</a>
            </div>

            <div class="col-md-3">
                <h5>Informasi</h5>
                <a href="#harga">Harga</a>
                <a href="#manfaat">Manfaat</a>
                <a href="#galeri">Galeri</a>
            </div>

        </div>

        <hr>

        <p class="footer-copy">
            © 2026 BAGLOG BRIQUET.
            Informasi Pemanfaatan Limbah Baglog Jamur.
        </p>
    </div>
</footer>


<!-- Bootstrap JavaScript: diperlukan untuk tombol menu responsif. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

<!-- Bootstrap JavaScript -->
<script>
document.getElementById("formPencarian").addEventListener("submit", function(event) {
    event.preventDefault();

    const input = document.getElementById("kataKunci");
    const kataKunci = input.value.trim().toLowerCase();

    const bagian = [
        {
            kata: ["beranda", "home", "awal"],
            id: "beranda"
        },
        {
            kata: ["tentang", "produk", "baglog", "briket"],
            id: "tentang"
        },
        {
            kata: ["bahan", "tapioka", "air", "arang"],
            id: "bahan"
        },
        {
            kata: ["cara", "pembuatan", "proses", "langkah"],
            id: "proses"
        },
        {
            kata: ["harga", "biaya", "jual"],
            id: "harga"
        },
        {
            kata: ["manfaat", "lingkungan", "masyarakat"],
            id: "manfaat"
        }
    ];

    if (kataKunci === "") {
        alert("Masukkan kata yang ingin dicari.");
        input.focus();
        return;
    }

    const hasil = bagian.find(item =>
        item.kata.some(kata => kataKunci.includes(kata))
    );

    if (hasil) {
        const tujuan = document.getElementById(hasil.id);

        if (tujuan) {
            tujuan.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        } else {
            alert("Bagian informasi belum ditemukan di halaman.");
        }
    } else {
        alert(
            "Informasi tidak ditemukan. Coba kata: bahan, harga, proses, atau manfaat."
        );
    }
});
</script>
<!-- Tombol Kembali ke Atas -->
<button id="btnKembaliAtas" title="Kembali ke Atas" aria-label="Kembali ke Atas">
    ↑
</button>

<script>
const tombolAtas = document.getElementById("btnKembaliAtas");

window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
        tombolAtas.style.display = "block";
    } else {
        tombolAtas.style.display = "none";
    }
});

tombolAtas.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>
</body>
</html>