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
        margin: 0;
        padding: 0;
        height: 100%;
        position: relative;
    }

.content {
  padding-bottom: 50px; /* tambahkan padding bottom untuk memberikan ruang kosong pada bawah halaman */
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
                margin-left: 10%;
                margin-right: 10%;
                margin-bottom: 5%;
                padding-bottom: 5%;
                margin-top: 10%;
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
            }
       
        .container {
            margin: 0 auto;
            color: #ffffff;
        }
        .container h1{
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            font-size: 40px;
            padding-top: 18%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
            
        }
        .container h3 {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            padding-top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
            font-size: 22px;
        }
        .para {
            margin-top: 300px;
        }
        .para p {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            text-align: center;
            margin-left: 10%;
            margin-right: 9%;
            font-size: 17px;
        }
        .sign  {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            padding-top: 10%;
            margin-left: 10%;
        }
        .sign p {
            padding-bottom: 20px;
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
                margin-left: 10%;
                margin-right: 10%;
                margin-bottom: 5%;
                padding-bottom: 5%;
                margin-top: 10%;
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
            }
       
        .container {
            margin: 0 auto;
            color: #ffffff;
        }
        .container h1{
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            font-size: 24px;
            padding-top: 18%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
            
        }
        .container h3 {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            padding-top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
            font-size: 14px;
        }
        .para {
            margin-top: 120px;
        }
        .para p {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            text-align: justify;
            margin-left: 10%;
            margin-right: 9%;
            font-size: 12px;
        }
        .sign  {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            padding-top: 8%;
            margin-left: 10%;
        }
        .sign p {
            padding-bottom: 20px;
            font-size: 12px;
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
    <div class="container">
    <h1>SANDIKALA 2023</h1>
    <h3>Pengantar Kurator</h3>    
  
</div>

<div class="para">
    <p>SANDIKALA 2023 membawakan sebuah pesan tentang sisi lain dari Pulau Dewata yang ingin dibawakan oleh rekan-rekan UKM Bali Telkom University. SANDI berarti pertemuan dan KALA berarti waktu, jadi SANDIKALA artinya pertemuan waktu antara siang dan malam (maghrib). SANDIKALA menurut analogi kami berarti Rwa Bhineda yang jika dibelah maka terdapat konsep keseimbangan di dalamnya. Keseimbangan yang dimaksud disini adalah kebaikan dan juga keburukan. Hadirnya SANDIKALA ini diharapkan bisa membuka pikiran umum akan adanya muara keseimbangan yang menghasilkan keharmonisan.</p>
    <p>Lebih dalam, SANDIKALA juga membicarakan tentang sisi lain dari kehidupan. SANDIKALA ingin menghadirkan hal-hal yang selama ini hadir di balik persona, hubungan, dan kisah-kisah masyarakat, yang dipaksa tenggelam, yang diabaikan, yang disembunyikan, yang ditakutkan. Sama seperti para Memedi dan Bhuta Kala, saat hal-hal itu dimunculkan ke permukaan, maka semua dalam gelap akan terlihat. Dengan ini, seperti konsep rectoverso, kita akan melihat dua sisi secara bersamaan, meski berbeda tetapi saling melengkapi. Disuarakannya apa yang tidak terlihat, dibungkamnya apa yang biasa dinikmati, adalah sebuah cara kita dalam menghargai jeda. Seperti yang tertera dalam tajuk, ini menjadi waktu dimana kita akan memasuki rimba lain, mengetahui apa yang bersembunyi.</p>
</div>  

<div class="sign">
    <p>Kurator,</p>
    <p>Shaffa Padlurahman</p>
    </div>
</div>

@include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
</body>
</html>