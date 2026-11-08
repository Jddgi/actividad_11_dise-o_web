<!DOCTYPE html>
<html>

<head>
    <title>Actividad 11 Blade</title>
</head>

<body>

    <nav>

        <a href="/home"
           style="{{ request()->is('home') ? 'font-weight:bold;' : '' }}">
           Home
        </a>

        |

        <a href="/photos"
           style="{{ request()->is('photos') ? 'font-weight:bold;' : '' }}">
           Photos
        </a>

        |

        <a href="/contact"
           style="{{ request()->is('contact') ? 'font-weight:bold;' : '' }}">
           Contact
        </a>

    </nav>

    <hr>

    @yield('content')

    <hr>

    <footer>

        Juan de Dios Guzmán Isaías - Actividad 11 Blade

    </footer>

</body>

</html>