        <?php
        include "../Admin/Adminlayou/inc_header.php";
        include "../service/db.php";
        ?>
        <br><br>
        <?php
        // Initialize variables
        $judul = "SELECT * judul FROM cerpen WHERE id = 8";
        $id = "SELECT * id FROM cerpen WHERE id = 8";
        $gambar = "SELECT * gambar FROM cerpen WHERE id = 8";
        ?>
        <div class="container mt-5">
            <form class="row g-3" method="get">
                <div class="col-auto">
                    <input type="text" class="form-control" name="katakunci" placeholder="Masukkan Judul Cerpen " value="<?php echo $katakunci ?>">
                </div>
                <div class="col-auto">
                    <input type="submit" value="Cari Tulisan" name="cari" class="btn btn-primary mb-3">
                </div>
            </form>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th>Judul</th>
                    <th>Sinopsis</th>
                    <th class="col-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p><?php echo $id ?></p>
                    </td>
                    <td><?php $judul ?></td>
                    <td>
                        <span class="badge text-bg-warning">Edit</span>
                        <span class="badge text-bg-danger">Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <?php
        include "../Admin/Adminlayou/inc_footer.php";
        ?>
        </main>
        </body>

        </html>