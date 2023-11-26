@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<!-- Projects Page Content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
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
    }

    section h2 {
        color: #007bff;
        margin-bottom: 30px;
    }

    .project {
        margin-bottom: 40px;
    }

    .project img {
        max-width: 100%;
        height: auto;
    }

    .project-info {
        text-align: center;
        padding: 20px;
    }

    .project-info h3 {
        margin-bottom: 10px;
    }

    .project-info p {
        font-size: 1.2em;
        line-height: 1.6;
    }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <h1>My Projects</h1>
    </header>

    <!-- Projects Section -->
    <section>
        <div class="container">

            <!-- Project 1 -->
            <div class="project">
                <img src="{{asset('images/laravel.jpg')}}" alt="Project">
                <div class="project-info">
                    <h3>Laravel Project</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sit quia facilis nihil
                        totam. Cupiditate non debitis tenetur similique nulla!
                    </p>
                    <a href="#">View Project</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

@endsection
