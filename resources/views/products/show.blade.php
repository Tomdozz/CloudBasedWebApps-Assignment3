<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <title>En superful butik</title>
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
            .content{
              display: flex;;
              flex-direction: column;
              position: fixed;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
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
            .loginText{
              color: grey;
              font-size: 12px;
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
                    <a class="nav-link" href="{{ route('producs.index') }}">Alla produkter <span class="sr-only">(current)</span></a>
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
            </div>
        </nav>
        <div class="content">
          <h1>Titel:{{$product->title}}</h1>
          <h3>Märke: {{$product->brand}}</h3>
          <p>Beskrivning: {{$product->description}}</p>
          <i>Pris: {{$product->price}}</i><br>
          <ol>
            <label>Resensioner:</label>
            @foreach($product->reviews as $review)
              <li>recension: {{$review->comment}} <i>namn: {{$review->name}}</i></li>
            @endforeach
          </ol>
          <img src="{{$product->image}}" alt="{{$product->title}}" style="max-width: 400px">
          @if (Route::has('login'))
          <form action="{{ route('producs.edit', ['product' => $product->id]) }}" method="GET">
            @auth
            @csrf
              <button type="submit" class="btn btn-success">Redigera produkt</button>
            @else
              <p class="loginText">Logga in för att redigera produkt</p>
            @endauth
          </form>
          @endif
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
