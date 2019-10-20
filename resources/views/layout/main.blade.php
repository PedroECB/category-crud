<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-bold">CATEGORIAS</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 font-weight-bold {{  request()->routeIs('home')? 'text-danger': 'text-dark' }}" href="{{ route('home') }}">Categorias</a>
            <a class="p-2 font-weight-bold {{ request()->routeIs('create')? 'text-danger': 'text-dark' }}" href="{{ route('create') }}">Nova Categoria</a>
         </nav>
        <a class="btn btn-sm btn-outline-primary" href="#">Sair</a>
     </div>


      @yield('content')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>