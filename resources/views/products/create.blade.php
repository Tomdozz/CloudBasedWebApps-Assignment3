<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <title>Skapa en ny produkt</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Pricegunner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('producs.index') }}">Alla produkter  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('producs.create') }}">Lägg till en produkt <span class="sr-only">(current)</span></a>
                </li>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Hem</a>
                        @else
                            <a href="{{ route('login') }}">Logga in</a>
                            <a href="{{ route('register') }}">Registrera dig</a>
                        @endauth
                    </div>
                @endif
                <!--<li class="nav-item active">
                    <a class="nav-link" href="update.php">Uppdatera en produkt <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="update.php">Ta bort en produkt <span class="sr-only">(current)</span></a>
                </li>-->
            </div>
        </nav>

      <div class="container" style="padding-top: 20px;">
          <form action="{{ route('producs.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">ProduktNamn</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="title">Märke</label>
              <input type="text" class="form-control" id="brand" name="brand">
            </div>
            <div class="form-group">
              <label for="title">Bild</label>
              <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
              <label for="title">Beskrivning</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
              <label for="title">Pris</label>
              <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
              <label>Välj butik som produkten ska finnas i </label>
              <div id="product-choose-stores" name"product-choose-stores">
                @foreach($stores as $store)
                  <div class="checkbox">
                    <label><input type="checkbox" name="stores[]" value="{{$store->id}}">{{$store->name}}</label>
                  </div>
                @endforeach
              </div>
            </div>
            <button type="submit" class="btn btn-success">Spara produkt</button>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
