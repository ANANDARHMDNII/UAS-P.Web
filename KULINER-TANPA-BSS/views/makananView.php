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
