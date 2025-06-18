    <?php
    include "../Admin/Adminlayou/inc_header.php";
    ?>
        <br><br>
        <div class="container mt-5">
            <h1>Dashboard Admin</h1>
            <p>Selamat datang di dashboard Admin. Di sini Anda dapat mengelola konten, pengguna, dan pengaturan lainnya.</p>
            <br>
            <div class="container mt-5">
                <h2>Pengaturan</h2>
                <div class="container mt-5" style="display:-webkit-flex; justify-content: center; align-items: center; flex-wrap:wrap; margin: 0px 10px 0px 10px; padding: 20px;">
                    <div class="card" style="width: 14rem; margin-right: 10px; margin-left: 10px; margin-bottom: 20px;" name="button">
                        <img src="../img/sampah.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-truncate text-center">Hapus Cerpen</p>
                        </div>
                    </div>
                    <div class="card" style="width: 14rem; margin-right: 20px; margin-left: 10px; margin-bottom: 20px;" name="button1">
                        <img src="../img/menulis.jpg" class="card-img-top " alt="...">
                        <div class="card-body">
                            <p class="card-text text-truncate text-center">Buat Cerpen</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <style>
        .container {
            animation: scrollspy 1s linear;
            animation-timeline: view();
            animation-range: entry 0% cover 40%;
        }

        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Delete = document.querySelector('div[name="button"]');
            const Create = document.querySelector('div[name="button1"]');

            Delete.addEventListener('click', function() {
                window.location.href = 'delete.php'; // Redirect to the Cerpen page
            });
            Create.addEventListener('click', function() {
                window.location.href = 'create.php'; // Redirect to the Cerpen page
            });
        });
    </script>
    <br><br>
    <?php include "../Admin/Adminlayou/inc_footer.php"; ?>
</body>

</html>