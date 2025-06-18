<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Fantasi & Pendidikan</title>
</head>
<body>
     <?php include "layout/header.html" ?>
    <br><br>
    <div class="container mt-5">
        <h1>Fantasi & Pendidikan</h1>
        <p>Dalam dunia pendidikan, cerita pendek dengan tema fantasi dapat menjadi alat yang efektif untuk menarik minat siswa dan mengajarkan nilai-nilai penting. Cerita-cerita ini tidak hanya menghibur, tetapi juga memberikan pelajaran berharga tentang moralitas, tanggung jawab, dan pentingnya belajar.</p>
        <div max-width="550px">
            <img src="./img/belajar.jpg" alt="" style="object-fit: cover; width: 90%; height: 50%; display: flex; margin: 0 auto;">
        </div>
    </div>
    <br>
    <div class="container mt-5">
        <h2>Berikut adalah Cerpen dengan tema Fantasi & Pendidikan</h2>
        <div class="container mt-5" style="display:-webkit-flex; justify-content: center; align-items: center; flex-wrap:wrap; margin: 0px 10px 0px 10px; padding: 20px;">
            <div class="card" style="width: 18rem; margin-right: 10px; margin-left: 10px; margin-bottom: 20px;" name="button">
                <img src="./img/1(1).png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-truncate text-center">Hari Terakhir di Sekolah</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right: 20px; margin-left: 10px; margin-bottom: 20px;" name="button1">
                <img src="./img/1(1)(1).png" class="card-img-top " alt="...">
                <div class="card-body">
                    <p class="card-text text-truncate text-center">Hal Baru</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include 'layout/footer.html' ?>
   <style>
        @keyframes scrollspy {
            from {
                opacity: 0;
                scale: 0;
            }
            to {
                opacity: 1;
                scale: 1;
            }
        }

        .container {
            animation: scrollspy 1s linear;
            animation-timeline: view();
            animation-range: entry 0% cover 40%;
        }
         .card:hover{
            transform: scale(1.05);
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const HariTerakhirdiSekolah = document.querySelector('div[name="button"]');
            const HalBaru = document.querySelector('div[name="button1"]');
            HariTerakhirdiSekolah.addEventListener('click', function() {
                window.location.href = './membaca/Hari_Terakhir_di_Sekolah.php'; // Redirect to the Cerpen page
            });
            HalBaru.addEventListener('click', function() {
                window.location.href = './membaca/Hal_Baru.php'; // Redirect to the Cerpen page
            });
        });
   </script>
</body>
</html>