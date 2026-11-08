@extends('layouts.app')

@section('content')

<div class="hero">

    <h1>Let's Start a Conversation</h1>

    <p>
        Questions, ideas or just saying hello are always welcome.
    </p>

</div>

<div class="section">

    <div class="two-columns">

        <div>

            <h2>Send a Message</h2>

            <form id="contactForm">

                <label>Your Name</label>

                <input
                    type="text"
                    id="name"
                    placeholder="Your name"
                    required
                >

                <label>Email Address</label>

                <input
                    type="email"
                    id="email"
                    placeholder="your@email.com"
                    required
                >

                <label>Message</label>

                <textarea
                    rows="6"
                    id="message"
                    required
                ></textarea>

                <button type="submit">
                    SEND MESSAGE
                </button>

            </form>

        </div>

        <div>

            <h2>Prefer another way?</h2>

            <p>
                Email<br>
                juandd200511@gmail.com
            </p>

            <hr>

            <p>
                Location<br>
                Mexico City, Mexico
            </p>

            <hr>

            <p>
                Response time<br>
                Within 24-48 hours
            </p>

        </div>

    </div>

</div>

<script>

document
.getElementById('contactForm')
.addEventListener('submit', function(event){

    event.preventDefault();

    alert('Datos enviados correctamente');

    this.reset();

});

</script>

@endsection