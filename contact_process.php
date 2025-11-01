<?php
// Atur header untuk output JSON
header('Content-Type: application/json');

// Pengaturan koneksi ke database
$servername = "127.0.0.1"; // atau "localhost"
$username = "root";        // Ganti jika username database Anda berbeda
$password = "";            // Ganti jika password database Anda berbeda
$dbname = "umkm";          // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Koneksi ke database gagal: ' . $conn->connect_error]);
    exit();
}

// Cek apakah data 'name' dan 'message' dikirim
if (isset($_POST['name']) && isset($_POST['message'])) {
    
    $nama_pengirim = $conn->real_escape_string($_POST['name']);
    $isi_pesan = $conn->real_escape_string($_POST['message']);

    // Validasi sederhana agar tidak kosong
    if (empty(trim($nama_pengirim)) || empty(trim($isi_pesan))) {
        echo json_encode(['status' => 'error', 'message' => 'Nama dan pesan tidak boleh kosong.']);
        exit();
    }

    // Buat id_pesan unik (pastikan panjangnya tidak melebihi 10 karakter)
    $id_pesan = substr("psn_" . time(), 0, 10);

    // Siapkan query SQL untuk memasukkan data
    $sql = "INSERT INTO pesan (id_pesan, nama_pengirim, isi_pesan) VALUES ('$id_pesan', '$nama_pengirim', '$isi_pesan')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'Pesan Anda berhasil terkirim! Terima kasih.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal mengirim pesan. Silakan coba lagi nanti.']);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Data formulir tidak lengkap.']);
}

// Tutup koneksi
$conn->close();

?>