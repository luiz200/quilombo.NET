<!DOCTYPE html>
<html lang="pt-BR">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
    
<body>
    <!--menu-->
    
    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-secondary bg-light">
        <div class="container">
            <a href="#" class="navbar-brand h1 mb-0 border-secondary">Quilombo.NET</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
        
        <div class="collapse navbar-collapse" id="navbarSite">
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Social</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Facebook</a>
                        <a class="dropdown-item" href="#">Twitter</a>
                        <a class="dropdown-item" href="#">Instagram</a>
                    </div>
                </li>
            </ul>
            
        <form class="form-inline">
            <div class="col-auto">
            <input class="form-control" type="search" placeholder="Buscar...">
            <button class="btn btn-dark" type="Submit">Ok</button>
            </div>
        </form>
            
        </div>
        </div>
    </nav>
    
    
     <!--scrollspy-->
    
    <div class="container">
        <br>
        <br>
        
        <div class="row mb-5">
            
            <div class="col-sm-6 col-md-4 mb-3">
                <nav id="navbarVertical" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item1">Item1</a>
                   <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3" href="#item1-1">Item1-1</a>
                        <a class="nav-link ml-3" href="#item1-2">Item1-2</a>
                   </nav>
                        <a class="nav-link my-2" href="#item2">Item2</a>
                        <a class="nav-link my-2" href="#item3">Item3</a>
                        <a class="nav-link ml-3" href="#item3-1">Item3-1</a>
                        <a class="nav-link ml-3" href="#item3-1">Item3-2</a>
                    </nav>
                </nav>
            </div>
            
        <div class="col-sm-6 col-md-8">
            <!--Div Carrossel-->
    
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
    
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="2" class="active"></li>
        </ol>
        
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img src="img1.jpg" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block">
                <h1>Minha Primeira imagem</h1>
                <p class="lead">minha primeira imagem é essa, com essa cor</p>
            </div>    
            </div>
        
            <div class="carousel-item">
                <img src="img2.jpg" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h1>Minha segunda imagem</h1>
                <p class="lead">minha segunda imagem é essa, com essa cor</p>
            </div>
            </div>
        
            <div class="carousel-item">
                <img src="img3.jpg" class="img-fluid d-block">
            <div class="carousel-caption d-none d-md-block text-dark">
                <h1>Minha terceira imagem</h1>
                <p class="lead">minha terceira imagem é essa, com essa cor</p>
            </div>
            </div>
        
        </div>
        
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
        
    </div>
  
            <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite" >
                
                <h4 id="item1">Item1</h4>
                <p>Praesent magna metus, blandit non mollis posuere, scelerisque vel lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce semper tempor lacus, sit amet euismod justo porta non.</p>   
                
                <h5 id="item1-1">item1-1</h5>
                <p>Morbi eget magna sapien. Sed imperdiet sollicitudin nibh, eu auctor leo ullamcorper quis. Ut eleifend leo est. Quisque libero mauris, finibus id magna vitae, tincidunt interdum arcu. Quisque sit amet dolor non quam porttitor tempus et ac lorem. Aliquam egestas nibh non suscipit imperdiet. Fusce hendrerit nisl sit amet tristique consectetur. </p>
                
                <h5 id="item1-2">item1-2</h5>   
                <p>Quisque sed lectus urna. Ut metus leo, fermentum et elit vel, tempor faucibus tortor. Maecenas ac molestie augue, quis lobortis libero. Morbi convallis, tortor vel placerat rhoncus, ante massa elementum urna, ut accumsan magna ante ac erat. Phasellus euismod pellentesque commodo. Integer ac est nisl. Praesent feugiat feugiat tellus vitae lobortis. Curabitur egestas orci id ullamcorper eleifend.</p>
                    
                <h4 id="item2">Item2</h4>
                <p>Praesent magna metus, blandit non mollis posuere, scelerisque vel lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce semper tempor lacus, sit amet euismod justo porta non.</p>
                    
                <h4 id="item3">Item3</h4>
                <p>Praesent magna metus, blandit non mollis posuere, scelerisque vel lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce semper tempor lacus, sit amet euismod justo porta non.</p> 
                    
                <h5 id="item3-1">item3-1</h5>
                <p>Morbi eget magna sapien. Sed imperdiet sollicitudin nibh, eu auctor leo ullamcorper quis. Ut eleifend leo est. Quisque libero mauris, finibus id magna vitae, tincidunt interdum arcu. Quisque sit amet dolor non quam porttitor tempus et ac lorem. Aliquam egestas nibh non suscipit imperdiet. Fusce hendrerit nisl sit amet tristique consectetur. </p>
                    
                <h5 id="item3-2">item3-2</h5>
                <p>Morbi eget magna sapien. Sed imperdiet sollicitudin nibh, eu auctor leo ullamcorper quis. Ut eleifend leo est. Quisque libero mauris, finibus id magna vitae, tincidunt interdum arcu. Quisque sit amet dolor non quam porttitor tempus et ac lorem. Aliquam egestas nibh non suscipit imperdiet. Fusce hendrerit nisl sit amet tristique consectetur. </p>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>