{{-- Used to write all common interface elements, so that the code is not repeated --}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel = stylesheet href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
{{--Top Menu--}}
<style>
    menu {
        position: fixed
    }
</style>
<div class="container" style=".menu">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/mainPage" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/userProfile" class="nav-link">User Profile</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Reviews</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/shoppingBag" class="nav-link">Shopping Bag</a></li>
        </ul>
    </header>

</div>

{{--Register layer below top menu--}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="http://localhost">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->

                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('top_menu')

</body>
</html>
