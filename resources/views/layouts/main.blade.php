<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<header>
        <div>
            <nav class="navbar navbar-expand-lg border-bottom border-dark    navbar-dark sticky-top" id="nav">
                <div class="container">
                    <a class="navbar-brand h1 mb-0" href="#">Quilombo.NET</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                <div class="collapse navbar-collapse" id="navbarSite">
                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Depoimentos</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Comunidades</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Facebook</a>
                                <a class="dropdown-item" href="#">Twitter</a>
                                <a class="dropdown-item" href="#">Instagram</a>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </nav> 
    </header>
<body id="back">
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>