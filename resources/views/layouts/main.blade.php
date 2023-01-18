<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
  </head>
  <body>





    <header>
        <div id="HEADER" class="HEADER">
            <div  id="header" class="header">


                    <header>
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                            <a class="navbar-brand" href="index.php">
                                <img width="50" src="/imgs/icon.png"  / >
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">                </navbar>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link text-success" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link text-success" href="#about">Sobre</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link text-success" href="#benefits">Benefícios</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link text-success" href="#form">Contato</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </header>

                </div>
            </div>
        </div>
    </header>

    <main>

        <div class="container-fluid">
            <div class="row">
            @if(session('msg'))
                <p class="msg" {{ session('msg') }} </p>
            @endif

                    @yield('content')

        </div>


    <footer>

        <p> Tec &copy Tec </p>

    </footer>


  </body>
</html>
