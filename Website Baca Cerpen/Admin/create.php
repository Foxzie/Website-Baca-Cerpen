    <?php
    include "../Admin/Adminlayou/inc_header.php";
    include "../service/db.php";
    ?>
    <?php
    session_start();
     // Initialize variables
        $judul = $sinopsis = $isi = "";
        $loginError = "";

        // Check if the form is submitted
    // Check if the form is submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $judul = trim($_POST["judul"]);
        $gambar = trim($_POST["gambar"]);
        $sinopsis = trim($_POST["sinopsis"]);
        $isi = trim($_POST["isi"]);
        // Assuming you have a database connection in $conn
       $sql = "INSERT INTO cerpen (judul, gambar, sinopsis, isi) VALUES ('$judul', '$gambar', '$sinopsis', '$isi')";
        $result = $conn->query($sql);
        // Simple validation (you can enhance this)
            // Here you would typically check the credentials against a database
            // For demonstration purposes, we will use hardcoded credentials
           if ($result-> num_rows >= 0) {
            // Assuming the user is successfully created
            // You can set session variables or perform other actions as needed
            $_SESSION['judul'] = $judul;
            $_SESSION['sinopsis'] = $sinopsis;
            $_SESSION['isi'] = $isi;
    // User exists, redirect to dashboard
            echo "<script>alert('Cerpen berhasil dibuat!'); window.location.href='dashboard.php';</script>";
            } elseif ($judul == "" || $gambar == "" || $sinopsis == "" || $isi == "") {
                echo "All fields are required.";
        }
    }

    ?>
    <br><br>
    <div class="container mt-5">
        <h1>Halaman Pembuatan Cerpen</h1>
        <div class="mb-3 row">
            <a href="dashboard.php">
                << Kembali Ke Halaman Admin</a>
        </div>
    </div>

    <div class="mb-3 row">
        <form action="" method="post">
            <div class="container mt-5">
                <label for="judul" class="form-label">Judul Cerpen</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>

            <div class="container mt-3">
                <label for="sinopsis" class="form-label">Sinopsis Cerpen</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required></textarea>
            </div>

            <div class="container mt-3">
                <label for="isi" class="form-label">Isi Cerpen</label>
                <textarea class="form-control" id="summernote" name="isi" rows="10" required></textarea>
            </div>
            <div class="container mt-3">
                <button type="submit" class="btn btn-primary">Buat Cerpen</button>
            </div>
        </form>
    </div>
    <?php
    include "../Admin/Adminlayou/inc_footer.php";
    ?>
    </body>

    </html>