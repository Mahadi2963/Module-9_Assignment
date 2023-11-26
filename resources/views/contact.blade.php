@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #495057;
    }

    header {
        background-color: #007bff;
        padding: 15px 0;
        color: white;
        text-align: center;
    }

    section {
        padding: 40px 20px;
        text-align: center;
    }

    section h2 {
        color: #007bff;
        margin-bottom: 30px;
    }

    .contact-info {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .contact-info div {
        margin-right: 40px;
    }

    .contact-form {
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }

    .form-group textarea {
        height: 150px;
    }

    .form-group button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>


    <header>
        <h1>Contact Me</h1>
    </header>


    <section>
        <div class="container">

            <h2>Get in Touch</h2>

            <div class="contact-info">
                <div>
                    <h3>Email</h3>
                    <p>mdmehedihasan2963@gmial.com</p>
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+880 1537247119</p>
                </div>
            </div>


            <div class="contact-form">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</body>

</html>

@endsection
