@extends('layouts.app')

@section('title', 'Home')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }

    header {
        background-color: #007bff;
        padding: 70px 0;
        color: white;
        text-align: center;
    }

    header h1 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    header p {
        font-size: 1.2em;
    }

    section {
        padding: 60px 0;
    }

    section h2 {
        color: #007bff;
        margin-bottom: 40px;
    }

    .project-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 20px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .project-card:hover {
        transform: scale(1.05);
    }

    .project-card img {
        width: 100%;
        height: auto;
    }
    </style>
</head>

<body>


    <header>
        <div class="container">
            <h1>Mahadi Hasan</h1>
            <p>Laravel | Learner | Explorer</p>
        </div>
    </header>


    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <img src="{{asset('images/profile.jpg')}}" alt="Project Image" height="400px">
            <p>I am Mahadi Hasan. <br> I'm from Cumilla. <br> I am Learning Laravel. <br> Wish me good luck</p>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <h2>Contact</h2>
            <p>Email: mdmehedihasan2963@gmail.com</p>
            <p>contact: +880 1537247119</p>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

@endsection