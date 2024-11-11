<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDP Pixel Position</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <nav>
            <div >
                <a href="">
                    <img src="{{ Vite::asset('resourcers/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>