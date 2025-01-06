# PROFIL
## UTS Pemrograman Web

#### ![PHP-Logo-Free-Download-PNG](https://github.com/user-attachments/assets/873fceee-6f6b-4685-97dc-3d4410698235)

| Variable           |       isi           |
| -------------------|---------------------|
| **Nama**           | Ananda Rahmadani    |
| **NIM**            | 312310461           |
| **Kelas**          | TI.23.A.5           |
| **Mata Kuliah**    | Pemrograman Web     |

### Membuat Website-KULINER
### langkah-langkah
### 1. Membuat file Website-KULINER

### 2. Menjalankan  MySQL server
![image](https://github.com/user-attachments/assets/3d0407a9-cdc9-4f15-9908-1b3ff36678a0)



# Mengakses Apache Client menggunakan "website-KULINER".
pastikan webserver Apache sudah dijalankan. kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/KULINER__1/?page=home  

### 3. Membuat index: membuat webssite-KULINER

### membuat tampilan dalam


### Menambahkan data navbar

<!-- Navbar Container -->
<nav style="
    background-color: #fce5cd; /* Soft pink untuk background */
    padding: 10px; 
    border-radius: 5px; 
    font-family: 'Times New Roman', Times, serif; 
    font-weight: bold; 
    text-align: center;">
    
    <!-- Link Styles -->
    <a href="?page=home" 
        style="text-decoration: none; color: #9c7d6f; margin: 0 15px;">Home</a>
    <a href="?page=makanan" 
        style="text-decoration: none; color: #9c7d6f; margin: 0 15px;">Makanan</a>
    <a href="?page=minuman" 
        style="text-decoration: none; color: #9c7d6f; margin: 0 15px;">Minuman</a>
    <a href="?page=about" 
        style="text-decoration: none; color: #9c7d6f; margin: 0 15px;">About</a>
    <a href="?page=contact" 
        style="text-decoration: none; color: #9c7d6f; margin: 0 15px;">Contact</a>
</nav>

### outputnya ketika berhasil:

![image](https://github.com/user-attachments/assets/23ca6186-f25b-4253-934f-b8acdc143dc2)


### 3. Menambahkan Home
dengan memasukan halaman Home
![image](https://github.com/user-attachments/assets/9c037108-0394-472d-9acb-1ceaa9a9dfe8)

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Kuliner Thailand</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8e2e2;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
        }

        header {
            background-color: #e6b89e;
            width: 100%;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            color: white;
        }

        .content {
            margin: 20px;
            text-align: center;
            max-width: 1200px;
            width: 100%;
        }

        .content h2 {
            font-size: 2rem;
            color: #9c7d6f;
        }

        .content p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #7d4b38;
        }

        .content img.hero {
            width: 100%;
            max-width: 900px;
            aspect-ratio: 3 / 4; /* Mengatur rasio aspek 3:4 */
            object-fit: cover; /* Memastikan gambar tetap rapi */
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .dish-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .dish {
            background-color: #fce5cd;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dish:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .dish img {
            width: 100%;
            border-bottom: 3px solid #e6b89e;
            transition: transform 0.3s ease, filter 0.3s ease, box-shadow 0.3s ease;
        }

        .dish img:hover {
            transform: scale(1.1);
            filter: brightness(1.1) contrast(1.2);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .dish h3 {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #9c7d6f;
        }

        footer {
            background-color: #e6b89e;
            color: white;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Kuliner Thailand</h1>
    </header>

    <div class="content">
        <!-- Gambar besar di tengah dengan rasio 3:4 -->
        <img src="image/HOME.jpg" alt="Keindahan Thailand" class="hero">

        <h2>Rasakan Keunikan Rasa dari Thailand</h2>
        <p>Nikmati perpaduan sempurna antara manis, asam, asin, dan pedas dengan hidangan Thailand autentik kami. Mulai dari Pad Thai klasik hingga Tom Yum yang lezat, setiap hidangan dibuat dengan cinta dan bahan-bahan segar.</p>

        <div class="dish-grid">
            <div class="dish">
                <img src="image/pad thai.jpg" alt="Pad Thai">
                <h3>Pad Thai</h3>
            </div>
            <div class="dish">
                <img src="image/tom yam.jpg" alt="Tom Yum">
                <h3>Sup Tom Yum</h3>
            </div>
            <div class="dish">
                <img src="image/green curry.jpg" alt="Green Curry">
                <h3>Green Curry</h3>
            </div>
            <div class="dish">
                <img src="image/mango sticky rice.jpg" alt="Mango Sticky Rice">
                <h3>Mango Sticky Rice</h3>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Rumah Kuliner Thailand</p>
    </footer>
</body>
</html>

### 4. Menambahkan about
dengan memasukan image dan carousel dari :

http://localhost/KULINER__1/?page=about

![image](https://github.com/user-attachments/assets/c6e14e2d-ac90-4a2c-a104-b11fec94c098)

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Kuliner Thailand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4e1dc; /* Latar belakang soft pink */
            margin: 0;
            padding: 0;
            color: #6e4c3b; /* Warna teks coklat gelap */
            overflow-x: hidden; /* Menghindari scroll horizontal */
        }

        header {
            background-image: linear-gradient(to right, #d2b398, #b1957a); /* Gradien warna */
            padding: 40px;
            color: white;
            text-align: center;
            border-bottom: 5px solid #b1957a; /* Garis pemisah lembut */
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); /* Bayangan header */
            animation: fadeInDown 1.5s ease-out; /* Animasi header */
        }

        header h1 {
            font-size: 3.5rem;
            margin: 0;
            letter-spacing: 1px;
            animation: fadeInDown 1.5s ease-out;
        }

        .container {
            padding: 50px;
            max-width: 900px;
            margin: 40px auto;
            background: linear-gradient(to bottom, #f5f1e3, #e6dace); /* Gradien lembut */
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Bayangan kontainer */
            text-align: center;
            animation: fadeIn 1.2s ease-in-out;
        }

        h2 {
            color: #d2b398;
            font-size: 2.8rem;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: slideUp 1.5s ease-out;
        }

        p {
            font-size: 1.25rem;
            line-height: 1.8;
            color: #6e4c3b;
            text-align: justify; /* Paragraf diratakan kiri dan kanan */
            margin-bottom: 25px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .highlight {
            font-weight: bold;
            color: #d28562; /* Warna oranye lembut */
            text-decoration: underline;
        }

        .highlight:hover {
            color: #f18f01; /* Warna oranye cerah saat hover */
            cursor: pointer;
        }

        footer {
            background-image: linear-gradient(to right, #d2b398, #b1957a); /* Gradien footer */
            color: white;
            padding: 20px;
            text-align: center;
            border-top: 5px solid #b1957a; /* Garis pemisah lembut */
            box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.2); /* Bayangan footer */
            animation: fadeInUp 1.5s ease-out;
        }

        footer p {
            margin: 0;
            font-size: 1.2rem;
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 1.2rem;
            color: white;
            background-color: #d28562;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #f18f01;
            transform: scale(1.1);
        }

        /* Animasi */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animasi lucu */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .button:hover {
            animation: bounce 1s;
        }

        header h1:hover {
            animation: rotate 2s linear infinite;
        }

        /* Responsif */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.8rem;
            }

            h2 {
                font-size: 2rem;
            }

            p {
                font-size: 1.1rem;
            }

            .container {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Rumah Kuliner Thailand</h1>
    </header>

    <div class="container">
        <h2>Selamat Datang</h2>
        <p>
            Kami mengundang Anda untuk menikmati kelezatan <span class="highlight">kuliner Thailand autentik</span> 
            yang dipersiapkan dengan penuh cinta dan keahlian. Dengan resep-resep tradisional dan bahan berkualitas, 
            kami memastikan setiap hidangan memberikan pengalaman tak terlupakan.
        </p>
        <p>
            Dari hidangan ikonik seperti <span class="highlight">Pad Thai</span> hingga sup pedas dan segar 
            <span class="highlight">Tom Yum</span>, setiap sajian kami menghadirkan cita rasa asli Thailand yang kaya dan menggoda.
        </p>

        <div class="button-container">
            <a href="#menu" class="button">Lihat Menu</a>
            <a href="#contact" class="button">Hubungi Kami</a>
        </div>
    </div>
</body>
</html>

### 5. Menambahkan contact
Dengan Memasukan Halaman contact

![image](https://github.com/user-attachments/assets/a6f5ecd3-af9c-4c3a-901d-176d916c2eef)

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Times New Roman', Times, serif;
      background-color: #f7ebe8;
      color: #4b3f35;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 20px;
    }

    .contact-section {
      background-color: #e7d7c6;
      color: #4b3f35;
      width: 80%;
      max-width: 1200px;
      display: flex;
      position: relative;
      border-radius: 10px;
      overflow: hidden;
      animation: fadeIn 1.5s ease;
    }

    .contact-section img {
      width: 50%;
      object-fit: cover;
    }

    .contact-info {
      padding: 20px;
      width: 50%;
    }

    .contact-info h1 {
      margin: 0;
      font-size: 36px;
      color: #4b3f35;
    }

    .contact-info p {
      margin: 5px 0;
    }

    .contact-info .address,
    .contact-info .contacts {
      margin-top: 20px;
    }

    .contact-info .social-icons {
      margin-top: 20px;
    }

    .contact-info .social-icons i {
      margin-right: 10px;
      font-size: 20px;
      color: #c99494;
      transition: transform 0.3s ease;
    }

    .contact-info .social-icons i:hover {
      transform: scale(1.2);
    }

    .contact-info .follow-us {
      margin-top: 20px;
    }

    .form-section {
      background-color: #fceaea;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 50%;
    }

    .form-section h2 {
      margin-top: 0;
      color: #4b3f35;
    }

    .form-section input,
    .form-section textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #d6c4c4;
      border-radius: 5px;
      background-color: #fff;
      font-family: 'Times New Roman', Times, serif;
    }

    .form-section .upload-file {
      display: flex;
      align-items: center;
      margin: 10px 0;
    }

    .form-section .upload-file i {
      margin-right: 10px;
      color: #c99494;
    }

    .form-section .send-message {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .form-section .send-message button {
      background-color: #c99494;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-family: 'Times New Roman', Times, serif;
    }

    .form-section .send-message button:hover {
      background-color: #b27a7a;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .contact-section {
        flex-direction: column;
      }
      .form-section,
      .contact-info {
        width: 100%;
      }
      .contact-section img {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="contact-section">
      <img src="https://storage.googleapis.com/a1aa/image/2eT9NCfMzdunMkoYZMBoAX5cg0eS6CPBeWUXb3YjfT2PWIwfE.jpg" alt="Latar belakang peta dengan pin yang menunjukkan lokasi">
      <div class="contact-info">
        <h1>Hubungi Kami</h1>
        <div class="address">
          <p>ALAMAT KAMI</p>
          <p>123456 Jakarta Barat</p>
          <p>Jalan Merpati</p>
        </div>
        <div class="contacts">
          <p>KONTAK KAMI</p>
          <p>@Restothai.com</p>
          <p>+62812905678242</p>
        </div>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
        <div class="follow-us">
          <p>— ikuti kami</p>
        </div>
      </div>
      <div class="form-section">
        <h2>Formulir Umpan Balik</h2>
        <input type="text" placeholder="Nama">
        <input type="email" placeholder="Email">
        <input type="tel" placeholder="Telepon">
        <textarea placeholder="Pesan" rows="4"></textarea>
        <div class="upload-file">
          <i class="fas fa-cloud-upload-alt"></i>
          <span>Unggah file</span>
        </div>
        <div class="send-message">
          <button>KIRIM PESAN</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

### 6.  Menambahkan makananView
Dengan Memasukan Halaman makananView

![image](https://github.com/user-attachments/assets/5e0b2cd7-fc10-4fbb-8496-cb9e3d1647a0)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Times New Roman', Times, serif; /* Menggunakan font Times New Roman */
            background-color: #f5f5dc; /* Warna krem (soft coklat) */
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h2 {
            color: #6a4e23; /* Coklat tua untuk judul */
        }

        /* Table Styles */
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            background-color: #ffffff; /* Putih untuk tabel */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #d3b897; /* Border dengan warna coklat muda */
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #6a4e23; /* Warna coklat tua untuk header */
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f9f5e1; /* Baris genap dengan warna coklat muda */
        }

        tr:hover {
            background-color: #e6d8b9; /* Highlight pada hover dengan warna krem lebih gelap */
        }

        /* Link Styles */
        a {
            color: #6a4e23; /* Link dengan warna coklat tua */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Action Buttons */
        .action-buttons a {
            margin: 0 5px;
        }

        /* Footer Text */
        p {
            color: #6a4e23; /* Warna coklat tua untuk teks footer */
        }

        /* Kotak Styles */
        .box {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #d3b897;
            background-color: #fff2e6; /* Warna lembut untuk kotak */
            text-align: center;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <h2>Data Makanan</h2>
    
    <!-- Kotak untuk Tambah Data Baru -->
    <div class="box">
        <a href="?page=makananAdd" style="text-decoration: none; color: #6a4e23; font-weight: bold;">[+] Tambah Data Baru</a>
    </div>
    
    <!-- Data Table -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Daerah Makanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;
            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td style="text-align: center;"><?= $nomor++; ?></td>
                    <td><?= $data["nama_makanan"] ?></td>
                    <td><?= $data["daerah_makanan"] ?></td>
                    <td style="text-align: center;" class="action-buttons">
                        <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>">Edit</a> |
                        <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" 
                            onclick="return confirm('Yakin ingin menghapus data ini ?');">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <!-- Kotak untuk Total Data -->
    <div class="box">
        <p style="color: #6a4e23; font-weight: bold;">Total: <?= mysqli_num_rows($sql) ?></p>
    </div>
</body>
</html>

### 6.  Menambahkan minumanView
Dengan Memasukan Halaman minumanView

![image](https://github.com/user-attachments/assets/c853cc05-3a85-4dd5-8e4c-104e8b582fa5)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Minuman</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Times New Roman', Times, serif; /* Menggunakan font Times New Roman */
            background-color: #f5f5dc; /* Warna krem (soft coklat) */
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h2 {
            color: #6a4e23; /* Coklat tua untuk judul */
        }

        /* Table Styles */
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            background-color: #ffffff; /* Putih untuk tabel */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan halus */
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #d3b897; /* Border dengan warna coklat muda */
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #6a4e23; /* Warna coklat tua untuk header */
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f9f5e1; /* Baris genap dengan warna coklat muda */
        }

        tr:hover {
            background-color: #e6d8b9; /* Highlight pada hover dengan warna krem lebih gelap */
        }

        /* Link Styles */
        a {
            color: #6a4e23; /* Link dengan warna coklat tua */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Action Buttons */
        .action-buttons a {
            margin: 0 5px;
        }

        /* Footer Text */
        p {
            color: #6a4e23; /* Warna coklat tua untuk teks footer */
        }

        /* Kotak Styles */
        .box {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #d3b897;
            background-color: #fff2e6; /* Warna lembut untuk kotak */
            text-align: center;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <h2>Data Minuman</h2>
    
    <!-- Kotak untuk Tambah Data Baru -->
    <div class="box">
        <a href="?page=minumanAdd" style="text-decoration: none; color: #6a4e23; font-weight: bold;">[+] Tambah Data Baru</a>
    </div>
    
    <!-- Data Table -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Minuman</th>
                <th>Daerah Minuman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;
            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td style="text-align: center;"><?= $nomor++; ?></td>
                    <td><?= $data["nama_minuman"] ?></td>
                    <td><?= $data["daerah_minuman"] ?></td>
                    <td style="text-align: center;" class="action-buttons">
                        <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>">Edit</a> |
                        <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" 
                            onclick="return confirm('Yakin ingin menghapus data ini ?');">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <!-- Kotak untuk Total Data -->
    <div class="box">
        <p style="color: #6a4e23; font-weight: bold;">Total: <?= mysqli_num_rows($sql) ?></p>
    </div>
</body>
</html>

## KAMSIA

