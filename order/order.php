<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potong Rambut Pak To</title>
    <?php include '../include/loading.php' ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Poppins", sans-serif;
        }
    </style>

</head>

<body>
    <div class="order-container">
        <div class="order-header">
            <img src="logo.png" alt="Logo Barbershop" class="order-logo">
            <h2>Formulir Pemesanan</h2>
            <p>Silakan isi detail di bawah ini untuk memesan layanan kami.</p>
        </div>
        <form id="order-form" action="process_order.php" method="POST">
            <div class="form-group">
                <label for="name">Nama Lengkap Anda:</label>
                <input type="text" id="name" name="name" placeholder="Contoh: Budi Setiawan" required>
            </div>

            <div class="form-group">
                <label for="model">Pilih Model Potongan Rambut:</label>
                <select id="model" name="model" required>
                    <option value="" disabled selected>-- Silakan pilih model --</option>
                    <?php
                    include 'db.php';
                    if ($conn->connect_error) {
                        $conn = new mysqli("localhost", "root", "", "umkm");
                    }
                    $sql = "SELECT * FROM model";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["id_model"] . "'>" . $row["nama_model"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Pilih Layanan Tambahan:</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="radio" id="no-service" name="service" value="" checked>
                        <label for="no-service">Tidak ada layanan tambahan</label>
                    </div>
                    <?php
                    $sql = "SELECT * FROM layanan";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='checkbox-item'>";
                            echo "<input type='radio' id='" . $row["id_layanan"] . "' name='service' value='" . $row["id_layanan"] . "'>";
                            echo "<label for='" . $row["id_layanan"] . "'>" . $row["nama_layanan"] . "</label>";
                            echo "</div>";
                        }
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

            <button type="submit" class="cta-button">Kirim Pesanan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(window).on('load', function () {
            $('#preloader-active').fadeOut('slow');
        });
    </script>
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>
    <script src="../assets/js/gijgo.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/hover-direction-snake.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


</body>

</html>