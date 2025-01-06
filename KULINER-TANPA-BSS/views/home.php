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

        .content img {
            width: 100%;
            max-width: 1200px;
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
            transform: scale(1.1); /* Perbesaran gambar */
            filter: brightness(1.1) contrast(1.2); /* Penyesuaian kecerahan dan kontras */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih menonjol */
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
        <!-- Gambar besar di tengah -->
        <img src="image/download (8).jpg" alt="Keindahan Thailand">

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
</body>
</html>
