
<head>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<nav class="navbar " style="background-color: #E0E0E0;">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="{{asset('/img/Logo_transparente.png')}}" style="width: 150px; height: 60px"
                class="d-inline-block align-text-top">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login') }}">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" hidden href="{{ route('register') }}"></a>
                </li>


            </ul>

    </div>
</nav>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

            <img src="{{asset('/img/Logo_transparente.png')}}" style="width: 150px; height: 60px" />

    </x-slot>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <!--x-auth-validation-errors class="mb-4" :errors="$errors" -->

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">

                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
