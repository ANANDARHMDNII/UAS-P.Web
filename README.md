# PROFIL
## UTS Pemrograman Web

#### ![PHP-Logo-Free-Download-PNG](https://github.com/user-attachments/assets/873fceee-6f6b-4685-97dc-3d4410698235)

| Variable           |       isi           |
| -------------------|---------------------|
| **Nama**           | Ananda Rahmadani    |
| **NIM**            | 312310461           |
| **Kelas**          | TI.23.A.5           |
| **Mata Kuliah**    | Pemrograman Web     |

# Buatlah sebuah aplikasi CRUD sederhana dengan menggunakan tambahan Boostrap 5  dan Datatables
## Langkah-langkah
### 1. Membuat file Website-KULINER
![SS folder kuliner](https://github.com/user-attachments/assets/d6cbbdde-6e4b-4578-94dd-6794500f5804)
### 2. Menjalankan MySQL server
![image](https://github.com/user-attachments/assets/1867ceab-d9c1-4b59-a79e-701b1ee84cbe)
## Mengakses Apache Client menggunakan "website-KULINER
  pastikan webserver Apache sudah dijalankan. kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: http://localhost/KULINER__1/?page=home
### 3. Membuat index: Website-KULINER
## Membuat website-KULINER

<?php
if (isset($_GET['page'])) {
$page = $_GET['page'];
switch ($page) {
case 'home':
include "views/home.php";
break;
case 'about':
include "views/about.php";
break;
case 'contact':
include "views/contact.php";
break;
case 'makanan':
include "views/makananView.php";
break;
case 'makananAdd':
include "modul/makananAdd.php";
break;
case 'makananAddProses':
include "modul/makananAddProses.php";
break;
case 'makananDelete':
include "modul/makananDelete.php";
break;
case 'makananUpdate':
include "modul/makananUpdate.php";
break;
case 'makananUpdateProses':
include "modul/makananUpdateProses.php";
break;
case 'minuman':
include "views/minumanView.php";
break;
case 'minumanAdd':
    include "modul/minumanAdd.php";
break;
case 'minumanAddProses':
include "modul/minumanAddProses.php";
break;
case 'minumanDelete':
include "modul/minumanDelete.php";
break;
case 'minumanUpdate':
include "modul/minumanUpdate.php";
break;
case 'minumanUpdateProses':
include "modul/minumanUpdateProses.php";
break;

default:
include "views/404.php";
}
} else {
include "views/home.php";
}

## Membuat website-KULINER
