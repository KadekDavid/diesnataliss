<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sandikala</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url("background.png");
            background-repeat: inherit;
            background-size: cover;
        }
        .navbar{
            background-color: rgba(255, 255, 255, 0.239) !important;
            color: #ffffff;
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
        color: #686868;
        }
        .navbarr li a {
         transition: color 0.2s ease-in-out;
        }

        .navbarr li {
        margin-right: 40px;
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

        .navbarr li a:hover {
        color: #b3b3b3;
        }
        .login a{
            font-family: 'Playfair Display', serif;
            text-decoration: none;
            color: black;
        }
        .sandikala {
            margin: 0 auto;

        }
        .sandikala img{
            position: absolute;
            top: 38%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
        }
        .sandikala h1{
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            top: 51%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
        }
        .sandikala p {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            text-align: center;
            top: 64%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
        }
        footer {
			background-color: rgba(255, 255, 255, 0.239) !important;
			color: #cecece;
			padding: 20px;
			text-align: center;
			position: absolute;
			bottom: 0;
			width: 100%;
           

        }
        .footer p{
             padding-top: 10px;
        }

        @media (max-width: 768px) {
            body {
            background-image: url("background.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-size: 400%
          
        }
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

        .navbarr li a:hover {
        color: #b3b3b3;
        }
        .sandikala {
            margin: 0 auto;

        }
        .sandikala img{
            position: absolute;
            top: 22%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 100px;
        }
        .sandikala h1{
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            top: 38%;
            left: 50%;
           
        
            font-size: 25px;
        }
        .sandikala p {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            text-align: justify;
            top: 62%;
            left: 50%;
            font-size: 14px;
            
        }
        footer {
			background-color: rgba(255, 255, 255, 0.239) !important;
			color: #cecece;
			padding: 15px;
			text-align: center;
			position: absolute;
			bottom: 0;
			width: 100%;
            font-size: 10px
        }
      

  }
  @media (min-width: 768px) and (max-width: 991px) {
  /* Aturan CSS untuk tampilan tablet di sini */

    .navbar-brand img{
            width: 150px;
            margin-left: 50px;
        }
        .navbarr {
        list-style: none;
        display: flex;
        margin-left: 30%;
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

        .navbarr li a:hover {
        color: #b3b3b3;
        }
        .sandikala {
            margin: 0 auto;

        }
        .sandikala img{
            position: absolute;
            top: 22%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 150px;
        }
        .sandikala h1{
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            top: 36%;
            left: 50%;
           
        
            font-size: 50px;
        }
        .sandikala p {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            position: absolute;
            text-align: justify;
            top: 58%;
            left: 50%;
            
            font-size: 22px;
            
        }
        footer {
			background-color: rgba(255, 255, 255, 0.239) !important;
			color: #cecece;
			padding: 20px;
			text-align: center;
			position: absolute;
			bottom: 0;
			width: 100%;
            font-size: 15px
        }

    }
 
   


    </style>
    
</head>
<body>

 @include('navbar')



<div class="sandikala">
    <img src="{{ asset('sandikala.png') }}" alt="">
    <h1>WELCOME</h1>

   <p>SANDIKALA merupakan tema yang kami ambil dalam Diesnatalis UKM Bali Widyacana Murti yang ke 31. SANDIKALA adalah 
    pertemuan antar dua waktu antara siang dan malam. Dimana pada saat tersebut terdapat sisi lain dari pulau dewata yang mulai 
    terlupakan karena tertutup dengan keindahannya. Kedua sisi tersebut bersatu mendajadi suatu keharmonisan dalam menjalankan kehidupan
    .</p>
</div>

@include('footerr')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
</body>
</html>