<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mylifeasisstant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Space+Mono&display=swap" rel="stylesheet">

</head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">MyLifeAsisstant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="/memo">Memo</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="/schedule">Schedule</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="/reminder">Reminder</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="/money-planning">Money Planning</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 " type="text" placeholder="Search" id="SearchBoxID" style="font-family: 'Poppins';" name="Search">
                    <button class="btn btn-outline-info"  type="button" onclick="Searchx()">Search</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <div class="container">
    @yield('container')
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
