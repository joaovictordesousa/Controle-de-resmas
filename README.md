
![Logo da novacap](https://assets.infra.grancursosonline.com.br/projeto/novacap-companhia-urbanizadora-da-nova-capital-do-brasil.png)


# CONTROLE DE RESMAS.
Controle de Resmas e Impressões.

![image](https://user-images.githubusercontent.com/107226493/228243897-6f82edc6-cd9e-4c50-8f93-86c9bbd91ec6.png)


## Descrição
O Controle de Resmas e Impressões é um software desenvolvido para auxiliar empresas e organizações no gerenciamento de estoque de papel e impressões. O software permite que os usuários acompanhem o uso das resmas de papel e controlem a quantidade de impressões realizadas.

## Funcionalidades
O software possui as seguintes funcionalidades:

* Cadastro de resmas de papel: os usuários podem cadastrar as resmas de papel que foram gastas e a quantidade de folhas de cada resma.


* Registro de impressões: os usuários podem registrar as impressões realizadas, informando a quantidade de folhas de papel utilizadas em cada impressão.

* Controle de impressões: o software permite que os usuários controlem a quantidade de impressões realizadas, o setor responsável pela impressão e a quantidade de folhas de papel utilizadas.

* Relatórios: o software gera relatórios sobre o uso das resmas e impressões realizadas, permitindo que os usuários acompanhem o desempenho do estoque de papel e das impressoras.

# Tecnologias utilizadas no Controle de resmas

* laravel

* Boostrap

* Html

* CSS

#

**Ex PHP do projeto**
```PHP

    <div class="container">

        <a class="btn btn-outline-primary" href="{{ route('cadastro') }}" role="button">NOVA SOLICITAÇÃO</a>

                        {{-- NOVA view --}}

        <a class="btn btn-outline-primary" href="{{ route('cadastro2') }}" role="button">GESTÃO DE IMPRESSÕES</a>
        <br><br>

        @if (session('msg'))
            <div id="sumir" class="alert alert-success" role="alert"style="width: 1200px;">
                <p class="msg">
                    {{ session('msg') }}
                </p>
            </div>
        @endif

        <div class="mh-100" style="width: 1200px; height: 1000px;">
            <div class="card border-dark" style="max-width: 700rem;">
                <div class="card-header text-white" style="height:58px; background-color: #044f84; text-align: center;"> <h5>HISTÓRICO DE IMPRESSÕES</h5>
                <div class="card-body text-dark">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <ul class="nav nav-pills card-header-pills">



                                    <li class="nav-item">
                                        <a type="button" class="nav-link active " style="margin:-54px 0px; background-color: #05395e;"
                                        href="{{route('historico')}}">Histórico de Resmas</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
...

```


**Ex CSS do projeto**
```CSS

* {
    font-family: 'Roboto';
}

img, h1{
    display: inline-block;
}

h1{
    display: flex;
    font-size: 30px;
}

...

```

**Ex HTML do projeto**
```HTML

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
                <img src="{{asset('/img/Logo_transparente.png')}}" style="width: 150px; height: 60px"
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

...

```

---------------------------------------------------------------

_**COLABORADORES**_ | _**GITHUB**_
-------------- | ----------------
**João Victor de Sousa Ribeiro** | https://github.com/joaovictodesousa
**Rafael Magalhães Veloso** | https://github.com/matraf123
**Cibely Araujo e Silva** | https://github.com/belyaraujo
**Jenniffer Glenda da Silva** | https://github.com/JennifferGS
**Rute Miliana** | https://github.com/rutemiliana

---------------------------------------------------------------

