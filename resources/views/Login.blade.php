<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

    <!-- datepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">



</head>

<body>
    <nav class="navbar " style="background-color: #E0E0E0;">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/img/Logo_transparente.png" style="width: 150px; height: 60px"
                    class="d-inline-block align-text-top">
                <a class="navbar-brand text-dark">
                    Login de Entrada
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white"></a>
                    </li>

                </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mh-100" style="width: 1000px; height: 1000px;">
            <div class="card border-dark" style="max-width: 700rem;">
              <div class="card-header text-white" style="background-color: #044f84;">Login</div>
               <div class="card-body text-dark">
                    <p class="card-text">
                    <form action="{{ route('login.entrar') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Usuário:</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="staticEmail">
                            </div>
                        </div>
                        <br>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword">
                            </div>
                            <br><br><br><br>

                            <div class="container">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-outline-primary">Entrar</button>

                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript">
    $(function() {
        $('#datetimepicker').datetimepicker();
    });
</script>

</html>