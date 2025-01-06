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