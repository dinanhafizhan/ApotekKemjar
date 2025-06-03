<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apotek Sehat - Solusi Kesehatan Anda</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      box-sizing: border-box;
    }
    body {
      background-color: #f5f7fa;
      color: #333;
    }
    header {
      background: linear-gradient(120deg, #6a11cb, #2575fc);
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    header h1 {
      font-size: 36px;
    }
    nav {
      background-color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    nav a {
      color: #2575fc;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 600;
    }
    .hero {
      padding: 80px 30px;
      text-align: center;
      background-image: url('https://img.freepik.com/free-vector/medicine-concept-illustration_114360-4116.jpg');
      background-size: cover;
      background-position: center;
      color: white;
    }
    .hero h2 {
      font-size: 40px;
      margin-bottom: 20px;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    }
    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    .hero a {
      background-color: white;
      color: #2575fc;
      padding: 12px 25px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
    }
    .section {
      padding: 60px 30px;
      text-align: center;
    }
    .section h3 {
      font-size: 28px;
      margin-bottom: 30px;
      color: #2575fc;
    }
    .cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }
    .card {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      width: 280px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .card h4 {
      color: #6a11cb;
      margin-bottom: 10px;
    }
    table {
      width: 100%;
      max-width: 800px;
      margin: auto;
      background: white;
      border-collapse: collapse;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    table th, table td {
      padding: 10px;
      border: 1px solid #ddd;
    }
    table th {
      background-color: #2575fc;
      color: white;
    }
    input[type="text"], input[type="number"], textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #6a11cb;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    footer {
      background-color: #222;
      color: #fff;
      padding: 30px;
      text-align: center;
    }
    footer p {
      font-size: 14px;
    }
  </style>
</head>
<body>

<header>
  <h1>Selamat Datang di Apotek Sehat</h1>
  <p>Solusi Kesehatan Keluarga Anda</p>
</header>

<nav>
  <div><strong>Apotek Sehat</strong></div>
  <div>
    <a href="#layanan">Layanan</a>
    <a href="#tentang">Tentang</a>
    <a href="#testimoni">Testimoni</a>
    <a href="#pesan-obat">Pesan</a>
    <a href="#kontak">Kontak</a>
  </div>
</nav>

<section class="hero">
  <h2>Konsultasi & Pembelian Obat Lebih Mudah</h2>
  <p>Pesan obat dari rumah dengan layanan antar cepat dan konsultasi online dari apoteker terpercaya.</p>
  <a href="#layanan">Lihat Layanan</a>
</section>

<section id="layanan" class="section">
  <h3>Layanan Kami</h3>
  <div class="cards">
    <div class="card">
      <h4>Obat Lengkap</h4>
      <p>Tersedia berbagai obat generik & resep, dengan harga terjangkau.</p>
    </div>
    <div class="card">
      <h4>Konsultasi Apoteker</h4>
      <p>Konsultasikan keluhan Anda secara online dengan apoteker profesional.</p>
    </div>
    <div class="card">
      <h4>Layanan Antar</h4>
      <p>Obat langsung dikirim ke rumah Anda dengan cepat dan aman.</p>
    </div>
  </div>
</section>

<section id="tentang" class="section" style="background-color: #eef2f7;">
  <h3>Tentang Kami</h3>
  <p>Apotek Sehat merupakan platform digital yang menyediakan kebutuhan obat-obatan dan konsultasi kesehatan secara daring. Kami berkomitmen memberikan pelayanan terbaik dan kemudahan akses untuk semua lapisan masyarakat.</p>
</section>

<section id="pesan-obat" class="section">
  <h3>Pesan Obat</h3>

  <table id="tabel-obat">
    <thead>
      <tr>
        <th>Nama Obat</th>
        <th>Harga (Rp)</th>
        <th>Jumlah</th>
        <th>Subtotal (Rp)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Paracetamol</td>
        <td>5000</td>
        <td><input type="number" min="0" value="0" onchange="hitungTotal()"></td>
        <td class="subtotal">0</td>
      </tr>
      <tr>
        <td>Amoxicillin</td>
        <td>10000</td>
        <td><input type="number" min="0" value="0" onchange="hitungTotal()"></td>
        <td class="subtotal">0</td>
      </tr>
      <tr>
        <td>Vitamin C</td>
        <td>8000</td>
        <td><input type="number" min="0" value="0" onchange="hitungTotal()"></td>
        <td class="subtotal">0</td>
      </tr>
    </tbody>
  </table>

  <div style="max-width: 800px; margin: 20px auto; text-align: right;">
    <strong>Total Harga: <span id="total-harga">Rp 0</span></strong><br><br>
    <button onclick="checkout()">Pesan Sekarang</button>
  </div>
</section>

<footer id="kontak">
  <p>&copy; 2025 Apotek Sehat. Semua Hak Dilindungi.</p>
  <p>Email: info@apoteksehat.id | Telepon: 0812-3456-7890</p>
</footer>

<script>
  function hitungTotal() {
    const rows = document.querySelectorAll("#tabel-obat tbody tr");
    let total = 0;
    rows.forEach(row => {
      const harga = parseInt(row.cells[1].textContent);
      const jumlah = parseInt(row.querySelector("input").value) || 0;
      const subtotal = harga * jumlah;
      row.querySelector(".subtotal").textContent = subtotal;
      total += subtotal;
    });
    document.getElementById("total-harga").textContent = "Rp " + total.toLocaleString("id-ID");
  }

  function checkout() {
    alert("Terima kasih! Pesanan Anda telah diterima.");
  }
</script>

</body>
</html>