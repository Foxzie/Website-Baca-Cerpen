<?php
// index.php
include "service/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <?php include 'layout/header.html' ?>
    <br> <br>
    <div class="container mt-5">
        <h1>Selamat Datang di Baca Cerpen !</h1>
        <p>Baca Cerpen dibuat untuk memberikan platform bagi para penulis dan pembaca cerita pendek. Anda dapat menemukan berbagai genre cerita, mulai dari fiksi, non-fiksi, hingga fantasi. </p>
        <br>
        <div max-width="550px">
            <img src="./img/buku1.jpg" alt="" style="object-fit: cover; width: 90%; height: auto; display: flex; margin: 0 auto;">
        </div>
    </div>
    <br>
    <div class="container mt-5">
        <div class="container mt-5">
            <h3> Karya Terbaik Penulis</h3>
        </div>
        <div class="container mt-5" style="display:-webkit-flex; justify-content: center; align-items: center;  flex-wrap:wrap; margin: 0px 10px 0px 10px; padding: 20px;">
            <div class="card" style="width: 18rem; margin-right: 10px; margin-left: 10px; margin-bottom: 20px;">
                <img src="img/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-truncate text-center">Langit Gelap</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right: 20px; margin-left: 10px; margin-bottom: 20px;">
                <img src="img/1(1).png" class="card-img-top " alt="...">
                <div class="card-body">
                    <p class="card-text text-truncate text-center">Hari Terakhir di Sekolah</p>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-right: 20px; margin-left: 10px; margin-bottom: 20px;">
                <img src="img/1(1)(1).png" class="card-img-top " alt="...">
                <div class="card-body">
                    <p class="card-text text-truncate text-center">Hal Baru</p>
                </div>
            </div>
        </div>

        <center><button type="button" class="btn btn-dark" style="margin-bottom: 10px;" name="learn">Learn More</button></center>
    </div>


    <div style="background-color:rgb(144, 135, 145); padding: 20px; margin-top: 0px;">
        <div class="container mt-5">
            <h2>Contact Us</h2>
            <p>If you have any questions or feedback, please feel free to reach out to us through our contact page.</p>
            <p>We value your input and are here to assist you!</p>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Your Name" class="form-control mb-2" required>
                <input type="email" name="email" placeholder="Your Email" class="form-control mb-2" required>
                <textarea name="message" placeholder="Your Message" class="form-control mb-2" rows="4" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            $to = "wolft6977@gmail.com";
            $subject = "New Contact Form Submission";
            $body = "Name: $name\nEmail: $email\nMessage:\n$message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo "<div class='alert alert-success mt-3'>Message sent successfully!</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Failed to send message. Please try again later.</div>";
            }
        }
        ?>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const learnButton = document.querySelector('button[name="learn"]');
            learnButton.addEventListener('click', function() {
                window.location.href = 'Cerpen.php'; // Redirect to the Cerpen page
            });
        });
    </script>
    <style>
        .body {
            background-color: rgba(236, 237, 226, 0.33);
        }

        .row-g-0 {
            background-color: rgb(29, 186, 189);
        }

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
    <?php include "layout/footer.html" ?>
</body>

</html>