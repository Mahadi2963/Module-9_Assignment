@extends('layouts.app')

@section('title', 'About Me')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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

    section p {
        font-size: 1.2em;
        line-height: 1.6;
    }
    </style>
</head>

<body>


    <header>
        <h1>About Me</h1>
    </header>

    <section>
        <div class="container">
            <h2>Hello, I'm Mahadi Hasan</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dicta non eaque deleniti expedita
                iusto facere soluta debitis autem quis corporis voluptatibus explicabo quisquam illo deserunt nesciunt
                consequatur aut! Amet ipsum excepturi saepe eaque deleniti. Accusantium itaque dolores provident soluta
                illo. Facere doloribus nam amet beatae modi quaerat qui quidem.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officiis corporis ipsam cupiditate
                at sint laudantium inventore adipisci, temporibus, expedita voluptatibus beatae dolores perspiciatis
                voluptas blanditiis voluptatum nemo in veritatis sed ut! Explicabo dolor molestiae commodi, incidunt
                libero laborum, delectus voluptatum minus molestias ex aspernatur, voluptatibus ratione reiciendis a
                possimus?
            </p>
        </div>
    </section>

</body>

</html>

@endsection