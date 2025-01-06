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
      font-family: Arial, sans-serif;
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
