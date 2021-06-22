{{-- COSE DA FARE PER PARTIRE CON UN PREGETTO LARAVEL
1 La cartella del progetto non deve essere una cartella virtuale (es desktop per win)
2 in questa cartella generare da linea di comando il progetto con questo comando
composer create-project --prefer-dist laravel/laravel:^7.0 MyProject
3 una volta generato php artisan serve per accendere il server locale
4 aggiungere in webpack.mix.js
    .options({
        processCssUrls: false
    });
5 npm install per tutte le dipendenze frontend
6 npm run watch per far partire il compilatore SASS --}}

{{-- nome repo: laravel-comics
Create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.
Bonus:
Create più pagine istituzionali che condividono lo stesso layout --}}


<!DOCTYPE html>
<html lang="en">
{{-- in main inserisco tutti i metatag e le cdn comumni al mio progetto come ad esempio i fonts e bootstrap --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- f_awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> --}}
    <title>Home - DC Comics</title>
</head>

<body>

    {{-- includo header --}}
    @include('partials.header')

    {{-- inserisco un marcatore di nome content. Qui viene iniettato il codice presente nella sezione content presente in tutte le mie pagine --}}
    @yield('content')

    {{-- includo footer --}}
    @include('partials.footer')

</body>

</html>
