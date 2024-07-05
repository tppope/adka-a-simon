<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') . ' - ' . 'Zadací poriadok' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <style>
        h1 {
            text-align: center;
            font-size: 3rem/* 48px */;
            line-height: 1;
            padding: 1.25rem/* 20px */;
            font-weight: 700;
            color: rgb(155 156 122);
        }
        @media (min-width: 640px) {
            h1 {
                font-size: 3.75rem /* 60px */;
                line-height: 1;
            }
        }

        @media (min-width: 1024px) {
            h1 {
                font-size: 4.5rem/* 72px */;
                line-height: 1;
            }
        }

        img {
            width: 100%
        }

        h2 {
            text-align: center;
            font-size: 1.875rem/* 30px */;
            line-height: 2.25rem/* 36px */;
            padding: 1.25rem/* 20px */;
            font-weight: 700;
            margin-top: 2.5rem/* 40px */;
            margin-bottom: 2.5rem/* 40px */;
            color: rgb(100 116 139);
        }

        body {
            background: #fefdfa;
            font-family: "Playfair Display", ui-sans-serif, system-ui;
        }
    </style>
</head>
<body>
<header>
    <h1>
        {{ config('app.name') }}
    </h1>
</header>
<main>
    <section>
        <h2>
            Zasadací poriadok
        </h2>
        <img src="{{ $message->embed(asset('storage/zasadaci_poriadok.png')) }}" alt="Zasadací poriadok">
        <h2>
            Tešíme sa na vás!
        </h2>
    </section>
</main>
</body>
</html>
