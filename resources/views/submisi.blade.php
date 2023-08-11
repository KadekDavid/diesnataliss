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
       
        .wrapper h1 {
                font-family: 'Playfair Display', serif;
                text-align: center;
                padding: 10px;
                margin-top: 5%
        }
        .wrapper p {
            font-family: 'Playfair Display', serif;
                text-align: center;
                padding: 2%;
                margin-top: 10px%
        }
        .bt {
            display: flex;
            justify-content: center;
             align-items: center;
        }
        .bt button {
            background-color: #ffffff;
            color: #000;
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
        .wrapper {
                font-family: 'Playfair Display', serif;
                margin-top: 2%;
                background-color: rgba(0, 0, 0, 0.584) !important;
                border-radius: 10px;
                padding: 10px;
                border-width: 2px;
                margin-left: 6%;
                margin-right: 6%;
                margin-bottom: 24%;
                padding-bottom: 5%;
                margin-top: 10%;
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
                color: #ffffff;
            }
       
        .wrapper h1 {
                font-family: 'Playfair Display', serif;
                text-align: center;
                padding: 10px;
                margin-top: 5%
                fon
        }
        .wrapper p {
            font-family: 'Playfair Display', serif;
                text-align: center;
                padding: 2%;
                margin-top: 10px;
        }
        .bt {
            display: flex;
            justify-content: center;
             align-items: center;
        }
        .bt button {
            background-color: #ffffff;
            color: #000;
        }
    }


    </style>
    
</head>
<body>

 @include('navbar')
<div class="wrapper">
    {{-- <form action="{{ route('pdf.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file_pdf">
        <button type="submit">Upload</button>
    </form> --}}

    <h1>Submit Karya PDF</h1>
    <p>Klik tombol submit lalu akan diarahkan ke google drive </p>
    <div class="bt">
      <a href="https://drive.google.com/drive/folders/19AuhABWDOxdYAcdTmF5QDBCjv7Eryevq?usp=share_link" target="_blank">
        <button class="btn btn-lg" >Submit</button>
      </a>  
    </div>
    
    
    
</div>



   @include('footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
</body>
</html>