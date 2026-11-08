<!DOCTYPE html>
<html>

<head>
    <title>Actividad 11 Blade</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color:#F2F5F3;
            margin:0;
            padding:0;
        }

        .container{
            width:90%;
            margin:auto;
        }

        .menu{
            display:flex;
            justify-content:center;
            gap:40px;
            background:white;
            padding:20px;
        }

        .menu a{
            text-decoration:none;
            color:#1b4f46;
            font-weight:normal;
        }

        .menu a.active{
            font-weight:bold;
            border-bottom:3px solid #1b4f46;
        }

        .hero{
            background:#DDE8E0;
            padding:60px;
            margin-top:20px;
        }

        .footer{
            margin-top:40px;
            padding:20px;
            background:#E5EAE6;
            text-align:center;
        }

        .section{
            background:white;
            padding:40px;
            margin-top:20px;
        }

        input,
        textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
        }

        button{
            background:#1b4f46;
            color:white;
            border:none;
            padding:12px 20px;
            cursor:pointer;
        }

        .two-columns{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
        }

        .gallery{
            display:grid;
            grid-template-columns: repeat(3, 1fr);
            gap:20px;
        }


        .gallery img{
            width:250px;
            border-radius:10px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="menu">

        <a href="/home"
        class="{{ request()->is('home') ? 'active' : '' }}">
        Home
        </a>

        <a href="/photos"
        class="{{ request()->is('photos') ? 'active' : '' }}">
        Photos
        </a>

        <a href="/contact"
        class="{{ request()->is('contact') ? 'active' : '' }}">
        Contact
        </a>

    </div>

    @yield('content')

    <div class="footer">
        Juan de Dios Guzmán Isaías - Actividad 11 Blade
    </div>

</div>

</body>

</html>