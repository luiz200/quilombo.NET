<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body >
    <header>
      <nav>
        <input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"><ion-icon name="menu-outline"></ion-icon></i>
		</label>
        <label class="logo">Quilombo.Net</label>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            @guest
            <li>
                <a href="/register">Cadastrar Quilombo</a>
            </li>
            @endguest
            @auth
            <li>
                <a href="/users/publiction">Publicar</a>
            </li>
            <li>
                <a href="/dashboard">Perfil</a>
            </li>
            @endauth
            @guest
            <li>
                <a href="/users/contact">Contatos</a>
            </li>
            @endguest    
            @guest
            <li>
                <a href="/login" >Entrar</a>
            </li>
            @endguest
            @auth
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" 
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                    >
                    Sair
                    </a>
                </form>
            </li>
            @endauth
        </ul>
      </nav>
    </header>
    <section>
        @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        <br>
        <br>
        <form action="/" method="get">
            <input id="search-container" class="form-control form-control border border-warnings" name="search" type="text" placeholder="Search" aria-label="Search">
        </form>
        @yield('content')
    </section>
</body>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</html>