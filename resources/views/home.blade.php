@extends('layouts.app')

@section('content')

<div class="hero">

    <h1>Welcome to My Website</h1>

    <p>
        This website was created using Laravel Blade Templates.
    </p>

</div>

<div class="section">

    <h2>About This Project</h2>

    <p>
        Hello, miss Viridiana, I hope you like my activity 11 :).<br>
        <br>
        This activity is for demostrating a menu navigation,
        template inheritance and Blade views. Everything according to Blade and Laravel technology. Each page has a different 
        functionality and view.<br>
        <br>
        This first page is only for descriptions about the activity. The photos page shows a row of photos simulating 
        a gallery of it that changes all the photos on each refresh to the page .
        And the last one is a forms that simulate a comunication user-functional, where you can contact them via email.
    </p>

</div>

@endsection