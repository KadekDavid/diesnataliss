<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sandikala</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
          *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
        body {
          background-color: #ffffff;
        }

        .navbar{
            background-color: rgba(0, 0, 0, 0.584) !important;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img{
            width: 120px;
            margin-left: 50px;
        }
        .navbarr {
        list-style: none;
        display: flex;
        margin-left: 60%;
       
        }
        .navbarr li a:active,
        .navbarr li a:focus {
             color: #ffffff;
        }
        .navbarr li a {
         transition: color 0.2s ease-in-out;
        }
        .navbarr li {
        margin-right: 40px;
        }

        .navbarr li:last-child {
        margin-right: ;
        }

        .navbarr li a {
        text-decoration: none;
        color: #ffffff;
        font-family: 'Playfair Display', serif;
        }

        .navbarr li a:hover {
        color: #000000;
        }
        .wrapper {
                font-family: 'Playfair Display', serif;
                margin-top: 2%;
                background-color: rgba(0, 0, 0, 0.584) !important;
                border-radius: 10px;
                padding: 10px;
                border-width: 2px;
                margin-left: 6%;
                margin-right: 6%;
                margin-bottom: 5%;
                padding-bottom: 5%;
                margin-top: 10%;
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
                color: #ffffff;
            }
       
        .wrapper h3 {
            font-size: 22px;
                font-family: 'Playfair Display', serif;
                text-align: center;
                padding: 2%;
                margin-top: 5%
        }
    
        .list {
                margin-top: 3%;
                margin-left: 8%;
            }
        .list p {
                padding-bottom: 10px;
            }
            
        .ul {
                margin-left: 8%;
            }
            footer{
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            background: #111;
            height: auto;
            width: 100vw;
            font-family: "Open Sans";
            padding-top: 40px;
            color: #fff;
        }
        .footer-content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .footer-content h3{
            font-size: 1.8rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
        }
        .footer-content p{
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
        }
        .socials{
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }
        .socials li{
            margin: 0 10px;
        }
        .socials a{
            text-decoration: none;
            color: #fff;
        }
        .socials a i{
            font-size: 1.1rem;
            transition: color .4s ease;

        }
        .socials a:hover i{
            color: aqua;
        }

        .footer-bottom{
            background: #000;
            width: 100vw;
            padding: 20px 0;
            text-align: center;
        }
        .footer-bottom p{
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }
        .footer-bottom span{
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }
        @media (max-width: 768px) {
        .navbar-brand img{
            width: 90px;
            margin-left: 50px;
        }
        .navbarr {
        list-style: none;
        display: flex;
        margin-left: 20px;
        font-size: 12px;
        }
        .navbarr li a:active,
        .navbarr li a:focus {
        color: #686868;
        }
        .navbarr li a {
         transition: color 0.2s ease-in-out;
        }

        .navbarr li {
        margin-right: 20px;
        color: #ffffff;
        }

        .navbarr li:last-child {
        margin-right: 10px;
        }

        .navbarr li a {
        text-decoration: none;
        color: #e3e3e3;
        font-family: 'Playfair Display', serif;
        }
        .wrapper {
                font-family: 'Playfair Display', serif;
                margin-top: 2%;
                background-color: rgba(0, 0, 0, 0.584) !important;
                border-radius: 10px;
                padding: 10px;
                border-width: 2px;
                margin-left: 6%;
                margin-right: 6%;
                margin-bottom: 5%;
                padding-bottom: 5%;
                margin-top: 10%;
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
                color: #ffffff;
            }
       
        .wrapper h3 {
            font-size: 14px;
                font-family: 'Playfair Display', serif;
                text-align: center;
                padding: 2%;
                margin-top: 5%
        }
    
        .list {
                margin-top: 3%;
                margin-left: 8%;
            }
        .list p {
                padding-bottom: 10px;
                font-size: 14px;

            }
            
        .ul {
                margin-left: 8%;
            }
            footer{
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            background: #111;
            height: auto;
            width: 100vw;
            font-family: "Open Sans";
            padding-top: 40px;
            color: #fff;
        }
        footer{
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            background: #111;
            height: auto;
            width: 100vw;
            font-family: "Open Sans";
            padding-top: 40px;
            color: #fff;
        }
        .footer-content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .footer-content img {
            width: 120px;
        }
        .footer-content h3{
            font-size: 1.2rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
        }
        .footer-content p{
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 10px;
        }
        .socials{
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }
        .socials li{
            margin: 0 10px;
        }
        .socials a{
            text-decoration: none;
            color: #fff;
        }
        .socials a i{
            font-size: 1.1rem;
            transition: color .4s ease;

        }
        .socials a:hover i{
            color: aqua;
        }

        .footer-bottom{
            background: #000;
            width: 100vw;
            padding: 20px 0;
            text-align: center;
        }
        .footer-bottom p{
            font-size: 10px;
            word-spacing: 2px;
            text-transform: capitalize;
        }
        .footer-bottom span{
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }

    }
    </style>
    
</head>
<body>

 @include('navbar')
<div class="wrapper">
    <h3>SYARAT DAN KETENTUAN APLIKASI SENIMAN SANDIKALA 2023</h3>
        <div class="list">
            
            <p>1. Usia seniman aplikasi <b>tidak dibatasi.</b></p>
            <p>2. Karya yang diikutsertakan dalam SANDIKALA 2023 merupakan karya baru <b>(tahun 2018-2023)</b>. Memiliki konsep yang dekat dengan pesan SANDIKALA 2023</p>
            <p>3. Seniman aplikasi wajib mengirimkan KARYA dalam satu file format PDF dengan data sebagai berikut: </p>
                <div class="ul">
                    <p>a. <b>Profil dan pengalaman ringkas</b> seniman (maksimal 100 kata).</p>
                    <p>b. <b>Deskripsi  karya</b> sebanyak 100-200 kata</p>
                    <p>c. Untuk karya Harus mencantumkan <b>foto dan data karya</b> (Media dan Tahun pembuatan) selengkapnya.</p>
                    <p>d. Apabila karya lebih dari satu judul, <b>tambahkan nomor karya</b> (01, 02, 03, dst) pada masing-masing keterangan gambar. </p>
                    <p>e. Sertakan foto <b>karya-karya lain</b> yang pernah dibuat sebelumnya (minimal 3 karya). </p>
                </div>
            <p>4. Media karya yang diikutsertakan bersifat <b>bebas</b> (Manual dan Digital), harap memperhatikan poin berikut :  </p>
                <div class="ul">
                    <p>a. Jumlah karya yang diajukan maksimal <b>3 judul</b> (bisa karya satuan atau series)</p>
                    <p>b. Mohon memperhatikan ukuran pintu ruangan (tinggi 200 cm dan lebar 140 cm) dan tinggi ruangan 300 cm </p>
                </div>
            <p>5. <b>Dua Seniman</b> lolos seleksi akan mendapat kesempatan untuk berdiskusi lebih lanjut dengan kurator SANDIKALA 2023 pada hari pembukaan pameran.</p>
            <p>6. Pengiriman dan pengembalian karya menjadi tanggung jawab seniman. Informasi lebih lanjut silahkan menghubungi:  Shaffa Padlurahman (082126055526)</p>
            <p>7. <b>Batas pengajuan karya</b> pada tanggal 25 Mei 2023</p>
            <p>8. <b>Karya Fisik dapat dikumpulkan</b>  pada tanggal 20 Mei 2023</p>
        </div>
</div>



   @include('footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
</body>
</html>